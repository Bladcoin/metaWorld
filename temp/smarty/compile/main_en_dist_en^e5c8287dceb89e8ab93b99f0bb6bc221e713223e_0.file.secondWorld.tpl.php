<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:53
  from 'C:\xampp\htdocs\themes\dist_en\templates\components\secondWorld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af5022c72_76260412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c8287dceb89e8ab93b99f0bb6bc221e713223e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\components\\secondWorld.tpl',
      1 => 1660288681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af5022c72_76260412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'secondWorld','section'=>989),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'slides','section'=>$_smarty_tpl->tpl_vars['secondWorld']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>


<section class="section section-about" id="about">
	<div class="decor-left"></div>
	<div class="decor-right"></div>
	<div class="container">
		<div class="slogan">
			<?php echo $_smarty_tpl->tpl_vars['secondWorld']->value['summary'];?>

		</div>
		<div class="about-content">
			<div class="row">
				<div class="col-6">
					<div class="position-relative pb-5 h-100">
						<div class="about-features-slider">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide', false, 'key', 's', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
								<div class="slide">
									<div class="subtitle">
										<span class="text-muted">0<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8', true);?>
 /</span>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

									</div>
									<div class="h3">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>

									</div>
									<?php echo $_smarty_tpl->tpl_vars['slide']->value['summary'];?>


								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div class="about-features-slider-arrows"></div>
					</div>
				</div>
				<div class="col-6">
					<div class="about-previews-slider">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide', false, 'key', 's', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
						<div class="slide">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" width="332" height="453" alt="">
						</div>
					<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars($_prefixVariable1, ENT_QUOTES, 'UTF-8', true);?>

						<div class="slide"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php }
}
