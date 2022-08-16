<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:52
  from 'C:\xampp\htdocs\themes\dist\templates\components\information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d6875bbd0_06548365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '188e26caf09f581188df2f4453e58e9512a8b116' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\information.tpl',
      1 => 1660547891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d6875bbd0_06548365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'secondWorld','section'=>998),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'slides','section'=>$_smarty_tpl->tpl_vars['secondWorld']->value['sectionId'],'status'=>'visible','type_content'=>"products"),$_smarty_tpl);?>



<section class="section section-features">
		<div class="accordion">
			<div class="row m-0 h-100">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <div class="accordion-item col">
					<div class="accordion-item-bg">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="">
					</div>
					<div class="accordion-next">
						Вперед
					</div>
					<div class="accordion-item-info">
						<div class="accordion-item-title">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

						</div>
						<div class="accordion-item-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['summary'];?>
</div>
					</div>
				</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				

															</div>
		</div>
	</section><?php }
}
