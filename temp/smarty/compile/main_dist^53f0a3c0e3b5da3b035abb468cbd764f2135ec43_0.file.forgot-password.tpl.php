<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 09:37:36
  from 'C:\xampp\htdocs\themes\dist\templates\forgot-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62f9f7c020c1f4_94446354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53f0a3c0e3b5da3b035abb468cbd764f2135ec43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\forgot-password.tpl',
      1 => 1660389566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/doctype.tpl' => 1,
  ),
),false)) {
function content_62f9f7c020c1f4_94446354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/doctype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    .form-signin {
        margin: 0 auto;
        width: 400px;
    }

    .paragraph {
        color: black;
        text-align: center;
    }

    .wrapper {
        background-color: grey;
    }
</style>

<body>
    <div class="wrapper">

        <form class="form-signin" action="/public/resetPassword.php" method="POST">
            <input type="hidden" name="reset_password[code]" value="<?php echo htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8', true);?>
"></input>
            <input type="hidden" name="reset_password[userId]" value="<?php echo htmlspecialchars($_GET['userId'], ENT_QUOTES, 'UTF-8', true);?>
"></input>
            <h1 class="h3 mb-3 font-weight-normal">Сброс пароля</h1>
            <label for="password" class="sr-only">Пароль</label>
            <input type="password" id="password" class="form-control" placeholder="Password" required="" autofocus="" name="reset_password[password]">
            <label for="password2" class="sr-only">Подтвердите пароль</label>
            <input type="password" id="password2" class="form-control" placeholder="Password Confirm" required="" name="reset_password[password2]">

            <button class="btn btn-lg btn-primary btn-block">Сменить пароль</button>
        </form>

    </div>
</body>

</html><?php }
}
