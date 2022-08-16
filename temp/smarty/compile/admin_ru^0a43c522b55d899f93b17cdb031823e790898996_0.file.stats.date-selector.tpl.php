<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:11:40
  from 'C:\xampp\htdocs\admin\templates\stats.date-selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb432c532f79_48553838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a43c522b55d899f93b17cdb031823e790898996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.date-selector.tpl',
      1 => 1603860818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb432c532f79_48553838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>
<div class="col-md-2 text-center">
    <form method="post">
	   <?php if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?><input type="hidden" name="filterTypeId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
	   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['simplePeriods']->value,'selected'=>$_smarty_tpl->tpl_vars['simplePeriod']->value,'name'=>'newSimplePeriod','onchange'=>"this.form.submit()",'class'=>"form-control select"),$_smarty_tpl);?>

	</form>
</div>
<div class="col-md-8 date text-right">
    <form method="post">
        <?php if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?><input type="hidden" name="filterTypeId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
        <?php echo smarty_function_html_select_date(array('start_year'=>2015,'month_format'=>"%b",'time'=>strtotime($_smarty_tpl->tpl_vars['dateStart']->value),'field_array'=>"newDateStart",'prefix'=>'','class'=>"form-control select"),$_smarty_tpl);?>
 &nbsp;-&nbsp;
        <?php echo smarty_function_html_select_date(array('start_year'=>2015,'month_format'=>"%b",'time'=>strtotime($_smarty_tpl->tpl_vars['dateEnd']->value),'field_array'=>"newDateEnd",'prefix'=>'','class'=>"form-control select"),$_smarty_tpl);?>

        <input class="btn btn-warning" type="submit" value="Показать" />
    </form>
</div>


<?php }
}
