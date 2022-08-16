<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:11:40
  from 'C:\xampp\htdocs\admin\templates\stats.type-selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb432c4cd748_35489691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a2c83037779860933ac264981f91be719eaff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.type-selector.tpl',
      1 => 1603860806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb432c4cd748_35489691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form method="post" <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>                                  
    <div class="col-md-2 text-center">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filterTypeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['filterTypeId']->value,'name'=>'filterTypeId','onchange'=>"this.form.submit()",'class'=>"form-control select"),$_smarty_tpl);?>

    </div>
</form>
<?php }
}
