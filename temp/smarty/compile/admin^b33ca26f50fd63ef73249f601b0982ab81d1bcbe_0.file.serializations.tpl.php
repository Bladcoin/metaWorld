<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:41:56
  from 'C:\xampp\htdocs\admin\templates\serializations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6664ca2377_84413062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33ca26f50fd63ef73249f601b0982ab81d1bcbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\serializations.tpl',
      1 => 1603705150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6664ca2377_84413062 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serializations']->value, 'serialization', false, 'variable');
$_smarty_tpl->tpl_vars['serialization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variable']->value => $_smarty_tpl->tpl_vars['serialization']->value) {
$_smarty_tpl->tpl_vars['serialization']->do_else = false;
?>
$<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['serialization']->value;?>
;
$smarty->assignByRef('<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
', $<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
);
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '?>';
}
}
