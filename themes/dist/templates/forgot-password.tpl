{include file="components/doctype.tpl"}


{* <body>
    <div class="wrapper">

        <form class="form-signin" action="/public/resetPassword.php" method="POST">
            <input type="hidden" name="reset_password[code]" value="{$smarty.get.code}"></input>
            <input type="hidden" name="reset_password[userId]" value="{$smarty.get.userId}"></input>
            <h1 class="h3 mb-3 font-weight-normal">Сброс пароля</h1>
            <label for="password" class="sr-only">Пароль</label>
            <input type="password" id="password" class="form-control" placeholder="Password" required="" autofocus="" name="reset_password[password]">
            <label for="password2" class="sr-only">Подтвердите пароль</label>
            <input type="password" id="password2" class="form-control" placeholder="Password Confirm" required="" name="reset_password[password2]">

            <button class="btn btn-lg btn-primary btn-block">Сменить пароль</button>
        </form>

    </div>
</body> *}

<body>
    <div class="d-flex align-items-center justify-content-center w-100 h-100">

        <form class="form-signin" id="form-signin" action="/public/resetPassword.php" method="POST">
            <input type="hidden" name="reset_password[code]" value="{$smarty.get.code}"></input>
            <input type="hidden" name="reset_password[userId]" value="{$smarty.get.userId}"></input>
            <h1 class="h3 mb-3 font-weight-normal">Сброс пароля</h1>

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <img src="{$THEME_URL}/images/lock.svg" class="mr-1" width="16" height="21" alt="">
                    </div>
                </div>
                <label for="password" class="sr-only">Пароль</label>
                <input type="password" id="password" class="form-control" placeholder="Password" autofocus=""
                    name="reset_password[password]">
            </div>

            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <img src="{$THEME_URL}/images/lock.svg" class="mr-1" width="16" height="21" alt="">
                    </div>
                </div>
                <label for="password2" class="sr-only">Подтвердите пароль</label>
                <input type="password" id="password2" class="form-control" placeholder="Password Confirm"
                    name="reset_password[password2]">
            </div>

            <button class="btn btn-lg btn-primary btn-block">Сменить пароль</button>
        </form>

    </div>
</body>

</html>