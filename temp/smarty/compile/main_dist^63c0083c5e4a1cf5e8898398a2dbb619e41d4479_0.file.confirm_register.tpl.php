<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:48
  from 'C:\xampp\htdocs\themes\dist\templates\confirm_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d64500bf2_38956869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63c0083c5e4a1cf5e8898398a2dbb619e41d4479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\confirm_register.tpl',
      1 => 1660644704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/doctype.tpl' => 1,
  ),
),false)) {
function content_62fb6d64500bf2_38956869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/doctype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    .notification {
        width: 500px !important;
        margin: 50px auto !important;
    }

    .paragraph {
        color: black;
        text-align: center;
    }
</style>

<body>
    <div class="wrapper">
        <?php if ($_smarty_tpl->tpl_vars['messages']->value) {?>
            <div class="alert alert-success notification" role="alert">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['success'], ENT_QUOTES, 'UTF-8', true);?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['errors']->value) {?>

            <div class="alert alert-danger notification" role="alert">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value['failed'], ENT_QUOTES, 'UTF-8', true);?>

            </div>
        <?php }?>

        <h5 class="paragraph">Сейчас вас перекинет на главную страницу</h3>

    </div>


    <?php echo '<script'; ?>
>
        setTimeout(() => {
            window.location.href = window.location.origin;
        }, 3000);
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
