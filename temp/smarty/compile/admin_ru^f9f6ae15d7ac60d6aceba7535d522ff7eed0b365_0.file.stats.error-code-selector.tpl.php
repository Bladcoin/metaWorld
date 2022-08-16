<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 12:05:55
  from 'C:\xampp\htdocs\admin\templates\stats.error-code-selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa1a832816f4_65943640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f6ae15d7ac60d6aceba7535d522ff7eed0b365' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.error-code-selector.tpl',
      1 => 1603860870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fa1a832816f4_65943640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form method="post" <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<div class="col-md-2 text-center">
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filterErrorCodeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['filterErrorCode']->value,'name'=>'filterErrorCode','onchange'=>"this.form.submit()",'class'=>"form-control select"),$_smarty_tpl);?>

	</div>
</form>
<?php }
}
