<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-25 11:52:53
  from 'C:\xampp\htdocs\themes\dist\templates\modules\paginationButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe5c485e660b9_29603704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0ec9b4fb5e1e57c186d6d3c20ead55d56e90cbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\paginationButton.tpl',
      1 => 1608552995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe5c485e660b9_29603704 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination']->value['pages']) {?>   
		<?php if ($_smarty_tpl->tpl_vars['pagination']->value['nextPage']) {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['nextPage']['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn-see">Показать ещё</a>
		<?php }
}
}
}
