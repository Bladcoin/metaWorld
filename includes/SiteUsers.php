<?php


class SiteUsers
{
    /**
     * @var
     */
    public  $errors;

    /**
     * @var
     */
    private $userData;

    /**
     * @var array
     */
    private $requiredFields = array('email', 'password', 'password2');

    /**
     * @param $userData
     * @return bool
     */
    public function addNewUser($userData)
    {
        global $mail;
        $this->checkRequiredFiedls($userData);
        $this->checkUserEmail($userData['email']);
        $this->checkUserPassword($userData['password'], $userData['password2']);

        if (empty($this->errors)) {
            $userData['password']       = md5($userData['password']);
            $userData['ip']             = $_SERVER['REMOTE_ADDR'];
            $userData['registredOn']    = date('Y-m-d');
            // $userData['birth']          = "0000-00-00 00:00:00";
            $userData['activationCode'] = $this->generateActivationCode($length = 8, $userData['userName']);
            $userData["login"] = "";
            $userData["phone"] = "";
            $userData["name"] = "";
            $userData["address"] = "";

            if ($userData['userId'] = dbQuery('customers', DB_INSERT, array('values' => $userData))) {
                $confirm_url = SITE_URL . "/public/confirm_register.php?userId=" . $userData["userId"] . "&code=" . $userData["activationCode"];
                $this->newUserData = &$userData;
                $mail->addAddress($userData["email"]);
                $mail->Subject = 'Регистрация на сайте Second World';
                $mail->isHTML(true);
                $mail->Body = "Перейдите по этой ссылке для подтверждения регистрации <a href='$confirm_url'>$confirm_url</a>";
                if ($mail->send()) {
                    $this->messages["success"] = "Вам на почту было отправлено письмо для подтверждения регистрации.";
                    return true;
                } else {
                    $this->errors["failed"] = "При отправке email подтверждения произошла неизвестная ошибка!";
                    return false;
                }
                return true;
            } else {
                $this->errors["failed"] = "На сервере произошла ошибка. Попробуйте позже или обратитесь к администратору!";
                return false;
            }
        } else {
            $this->errors["failed"] = "На сервере произошла ошибка. Попробуйте позже или обратитесь к администратору!";
            return false;
        }
    }

    /**
     * @param $userData
     * @return bool
     */
    public function changeUserData($userData)
    {
        $this->requiredFields = array('name', 'email', 'password');
        $this->checkRequiredFiedls($userData);
        if (empty($this->errors)) {
            $where[] = 'userId=\'' . $_SESSION['siteUser']['userId'] . '\'';
            $values = $userData;

            dbQuery('customers', DB_UPDATE, array('values' => $values, 'where' => $where));

            $_SESSION['siteUser']['name']  = $userData['name'];
            $_SESSION['siteUser']['email']       = $userData['email'];
            //$_SESSION['siteUser']['subscribe']   = $userData['subscribe'];
            return true;
        } else {
            return false;
        }
    }

    public function changeUserPwd($userPwd)
    {
        //print_r($userPwd);

        if (!empty($userPwd['pwdnew'])) {

            $where[] = 'userId=\'' . $_SESSION['siteUser']['userId'] . '\'';

            $pwdOldUser = dbQuery('customers', DB_VALUE, array('where' => $where, 'fields' => 'password'));
            $pwdOld = md5($userPwd['pwdold']);
            if ($pwdOldUser != $pwdOld) {

                $this->errors = 'Старый пароль неверный';
                return false;
            } else {

                if ($userPwd['pwdnew'] != $userPwd['pwdnewrepeat']) {
                    $this->errors = 'Введенные пароли не совпадают.';
                    return false;
                } else {

                    $newPassword =  md5($userPwd['pwdnew']);

                    dbQuery('customers', DB_UPDATE, array('values' => "password='$newPassword'", 'where' => $where));
                    return true;
                }
            }
        }
    }

    /**
     * @param $fileName
     * @param int $userId
     * @param string $alt
     * @param string $origFileName
     * @return bool
     */
    public function createSiteUserImage($fileName, $userId = 0, $alt = '', $origFileName = '')
    {
        global $config, $smarty;
        /* users images*//* get image info */
        $image = getimagesize($fileName);
        if (empty($image) || $image[2] > 3 || $image[2] < 1) return false;
        /* if keeping original image name */
        if ($config['keep_original_image_name']) $imageName = pregGetValue('/([^\/]+)\.[^\.]+$/', $origFileName);
        if (empty($imageName)) $imageName = 'user';

        if (empty($userId)) {
            $rawDir = tmpDirName(SITE_ROOT . "/images/siteusers");
            $destDir = SITE_ROOT . "/images/siteusers/" . $rawDir;
        } else {
            $rawDir = $userId;
            $destDir = SITE_ROOT . "/images/siteusers/$userId";
        }
        if (!is_dir($destDir) && !@mkdir($destDir)) return false;
        $smarty->assign('imageDir', $destDir);
        /* saving thumbnails */
        foreach (array('small', 'medium', 'large') as $size) {
            $images[$size] = array();
            $images[$size]['userId'] = $userId;
            $images[$size]['fileName'] = $imageName . "-$size.jpg";
            $thumb = createThumbnail(
                $fileName,
                $config[$size . '_thumb_width'],
                $config[$size . '_thumb_height'],
                "$destDir/" . $images[$size]['fileName'],
                $config['thumbnail_quality']
            );
            $images[$size]['alt'] = $alt;
            $images[$size]['width']  = imagesx($thumb);
            $images[$size]['height'] = imagesy($thumb);
            $images[$size]['url'] = SITE_URL . "/images/siteusers/$rawDir/" . $images[$size]['fileName'];
            $images[$size]['codename'] = $size;
        }
        /* saving original image */
        if ($config['save_original_image']) {
            $images['original'] = array();
            $images['original']['userId'] = $userId;
            $extensions = array(1 => 'gif', 2 => 'jpg', 3 => 'png');
            $images['original']['fileName'] = $imageName . '-original.' . $extensions[$image[2]];
            copy($fileName, "$destDir/" . $images['original']['fileName']);
            $images['original']['alt'] = $alt;
            $images['original']['width']  = $image[0];
            $images['original']['height'] = $image[1];
            $images['original']['url'] = SITE_URL . "/images/siteusers/$rawDir/" . $images['original']['fileName'];
            $images['original']['codename'] = 'original';
        }
        @unlink($fileName);
        return $images;
    }

    /**
     * @param $email
     * @return bool
     */
    public function checkUserEmail($email)
    {
        if (!preg_match('/^[A-Z0-9\._\-]+@[A-Z0-9\.\-]+\.[A-Z]{2,4}$/i', $email)) {
            $this->errors["failed"] = 'Укажите адрес электронной почты';
            return false;
        } elseif (dbQuery('customers', DB_VALUE, array('fields' => 'userId', 'where' => "email='$email'"))) {
            $this->errors["failed"] = 'Этот адрес электронной почты уже существует!';
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param $userId
     * @param $newStatus
     * @param string $code
     * @return bool
     */
    public function changeUserStatus($userId, $newStatus, $code = '')
    {
        $where[] = "userId='$userId'";
        if (!empty($code)) $where[] = "activationCode='$code'";

        if (dbQuery('customers', DB_UPDATE, array('values' => array('status' => $newStatus), 'where' => $where))) {

            $userData = dbQuery('customers', DB_ARRAY, array('where' => $where));
            if ($userData) {
                $this->authMe($userData);
                $this->messages["success"] = "Аккаунт успешно подтвержден!";
                return true;
            } else {
                $this->errors['failed'] = "Ссылка устарела!";
                return false;
            }
        } else {
            $this->errors["failed"] = "Данная ссылка больше не действительна!";
            return false;
        }
    }


    public function refuseMe()
    {
        unset($_SESSION['siteUser']);
        $str = $_SERVER['REDIRECT_URL'];
        $tmp = explode('/', $str);
        if ($tmp[1] == 'ru') {
            $sub = '/' . $tmp[1] . '/';
        } else {
            $sub = '/';
        }
        header('location: ' . $sub);
    }

    /**
     * @param $email
     * @param $password
     * @return bool
     */
    public function checkLogin($email, $password)
    {
        if ($userData = dbQuery('customers', DB_ARRAY, array('where' => 'email=\'' . $email . '\' AND password=\'' . md5($password) . '\' AND status=\'active\''))) {
            $this->authMe($userData);
            $this->messages["success"] = "Вы успешно вошли в аккаунт!";
            return true;
        } else {
            $this->errors['checkLogin'] = 'empty';
            return false;
        }
    }

    /**
     * @param $email
     */
    public function sendPasswordChangeCode($email)
    {
        global $smarty, $config;
        $values['activationCode'] = $this->generateActivationCode(8);
        $where = "email='$email'";
        dbQuery('customers', DB_UPDATE, array('where' => $where, 'values' => $values));
        $values['email'] = $email;
        $userData = dbQuery('customers', DB_ARRAY, array('where' => 'email=\'' . $email . '\' AND status=\'active\''));
        $smarty->assign('userData', $userData);
        $recipient = $email;
        $subject   = ' =?' . $config['charset'] . '?B?' . base64_encode('Восстановление пароля') . '?=';
        $message   = chunk_split(base64_encode($smarty->fetch('recovery-confirm.tpl')), 68, "\n");
        $headers   = "From: " . '=?' . $config['charset'] . '?B?' . base64_encode($config['feedback_email']) . '?=' . " <$config[feedback_email]>\nContent-Type: text/html; charset=$config[charset]\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64";
        //echo $smarty->fetch('recovery-confirm.tpl');
        mail($recipient, $subject, $message, $headers);
    }

    /**
     * @param $userId
     * @param $code
     * @return bool
     */
    public function sendNewPassword($userId, $code)
    {
        global $smarty, $config;
        $where[] = "userId='$userId'";
        $where[] = "activationCode='$code'";
        if ($userData = dbQuery('customers', DB_ARRAY, array('where' => $where))) {
            $new_password             = $this->generateActivationCode(5);
            $values['password']       = md5($new_password);
            $values['activationCode'] = $this->generateActivationCode(8);
            dbQuery('customers', DB_UPDATE, array('where' => $where, 'values' => $values));
            $userData['password'] = $new_password;
            $smarty->assign('userData', $userData);
            $recipient = $userData['email'];
            $subject   = '=?' . $config['charset'] . '?B?' . base64_encode('Ваш новый пароль') . '?=';
            $message   = chunk_split(base64_encode($smarty->fetch('recovery-complete.tpl')), 68, "\n");
            $headers   = "From: " . '=?' . $config['charset'] . '?B?' . base64_encode($config['feedback_email']) . '?=' . " <$config[feedback_email]>\nContent-Type: text/html; charset=$config[charset]\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64";
            //echo $smarty->fetch('recovery-complete.tpl');
            mail($recipient, $subject, $message, $headers);
            return true;
        } else {
            return false;
        }
    }

    public function forgotPassword($email)
    {
        $where[] = "email='$email'";
        $values["activationCode"] = $this->generateActivationCode(8);

        if (dbQuery("customers", DB_UPDATE, array("where" => $where, "values" => $values))) {
            global $mail;
            $userData = dbQuery('customers', DB_ARRAY, array('where' => $where));
            $confirm_url = SITE_URL . "/public/forgot-password.php?userId=" . $userData["userId"] . "&code=" . $userData["activationCode"];
            $this->newUserData = &$userData;
            $mail->addAddress($userData["email"]);
            $mail->Subject = 'Восстановление пароля на сайте Second World';
            $mail->isHTML(true);
            $mail->Body = "Перейдите по этой ссылке для восстановления пароля <a href='$confirm_url'>$confirm_url</a>";
            if ($mail->send()) {
                $this->messages["success"] = "Вам на почту было отправлено письмо для подтверждения регистрации.";
                return true;
            } else {
                $this->errors["failed"] = "При письма для сброса пароля на email произошла неизвестная ошибка!";
                return false;
            }
        } else {
            $this->errors["failed"] = "На сервере произошла неизвестная ошибка. Попробуйте позже или обратитесь к администратору!";
        }
    }

    public function forgotPasswordCheckLink($userId, $code)
    {
        $where[] = "userId='$userId'";
        $where[] = "activationCode='$code'";

        if (dbQuery("customers", DB_ARRAY, array("where" => $where))) {
            return true;
        } else {
            $this->errors["failed"] = "Данная ссылка не действительна. Действия по смене пароля не совершены!";
        }
    }

    function resetPassword($forgotPasswordData)
    {
        $where[] = "userId='" . $forgotPasswordData["userId"] . "'";
        $where[] = "activationCode='" . $forgotPasswordData["code"] . "'";
        $userData = dbQuery("customers", DB_ARRAY, array("where" => $where));



        if ($forgotPasswordData["password"] == $forgotPasswordData["password2"]) {
            $changeData["password"] = md5($forgotPasswordData["password"]);
            $changeData["activationCode"] = "0";
            try {
                dbQuery("customers", DB_UPDATE, array("where" => $where, "values" => $changeData));
                $this->messages["success"] = "Пароль успешно изменен!";
                return true;
            } catch (Exception $error) {
                $this->errors["failed"] = "Произошла неизвестная ошибка с сервером. Попробуйте позже или свяжитесь с администратором!";
                return false;
            }
        }
    }

    /**
     * @param $userData
     * @return bool
     */
    private function checkRequiredFiedls($userData)
    {
        foreach ($this->requiredFields as $requiredField) {
            if (empty($userData[$requiredField])) {
                $this->errors[$requiredField] = 'empty';
                $errors = true;
            }
        }

        if (empty($errors)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $password
     * @param $password2
     * @return bool
     */
    private function checkUserPassword($password, $password2)
    {
        if ($password != $password2) $this->errors["failed"] = 'Данные поля Пароль и Подтверждение пароля различаются!';
        return false;
    }

    /**
     * @param int $length
     * @param string $userName
     * @return bool|string
     */
    private function generateActivationCode($length = 8, $userName = '')
    {
        $code = substr(md5(time() . 'jashkdjh#*(UJLKF@H@)#$' . $userName), rand(1, 32 - $length), $length);
        return $code;
    }

    /**
     * @param $userData
     */
    // private function sendActivationCode($userData)
    // {
    //     global $smarty, $config;
    //     $recipient = $userData['email'];
    //     $smarty->assign('userData', $userData);
    //     $subject = '=?' . $config['charset'] . '?B?' . base64_encode('Подтверждение регистрации') . '?=';
    //     $message = chunk_split(base64_encode($smarty->fetch('activation-email.tpl')), 68, "\n");
    //     $headers = "From: " . '=?' . $config['charset'] . '?B?' . base64_encode($config['feedback_email']) . '?=' . " <$config[feedback_email]>\nContent-Type: text/html; charset=$config[charset]\nMIME-Version: 1.0\nContent-Transfer-Encoding: base64";
    //     //echo $smarty->fetch('activation-email.tpl');
    //     mail($recipient, $subject, $message, $headers);
    // }

    /**
     * @param $userData
     */
    private function authMe($userData)
    {

        $_SESSION['siteUser'] = $userData;
        $str = $_SERVER['REDIRECT_URL'];
        $tmp = explode('/', $str);
        if ($tmp[1] == 'ru') {
            $sub = '/' . $tmp[1] . '/';
        } else {
            $sub = '/';
        }
        // header('location: ' . SITE_URL);
    }
}
