<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-16 11:05:21
  from 'C:\xampp\htdocs\themes\dist\templates\header-main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb24ee14abc00_50675061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50559a0f9e4a4db8e5d97f6939a7fd6164f782ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\header-main.tpl',
      1 => 1604900367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/meta.tpl' => 1,
  ),
),false)) {
function content_5fb24ee14abc00_50675061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.logocss.php','function'=>'smarty_function_logocss',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->

<head>
	<?php $_smarty_tpl->_subTemplateRender("file:modules/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<!-- favicons -->
	<link rel="shortcut icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/plugins.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/main.css">
	<!--owl-carousel-->
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/owl.theme.default.min.css">
	<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="media/js/html5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="media/js/respond.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>

<body>
	<div class="header-hidden"></div>
	<header>
	<div class="mob_menu_button_wrapper hidden-md hidden-lg">
			<div class="container">
				<div class="header-top-content">
					<div class="mob_logo col-md-4">
						<?php echo smarty_function_logocss(array(),$_smarty_tpl);?>

					</div>
					<div class="menu_button col-md-8">
						<div class="header_info">
							<a href=""><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/ru.png"><span>Рус</span></a>
							<a href=""><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/eng.png"><span>Eng</span></a>

							

							<a href="mailto:info@legesadvokat.com"><span>info@<b>legesadvokat.com</b></span></a>
						</div>
						<input type="checkbox" id="menu_checkbox" class="menu_input">
						<label for="menu_checkbox" class="menu_label">
							<span></span>
							<span></span>
							<span></span>
						</label>
						<div class="mob_menu ">
							<div class="mob_menu_bg clearfix">
								<div class="mob_menu_top" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/header-bg.jpg);">
									<label for="menu_checkbox" class="close_mob_menu">
										<span class="fa fa-times"></span>
									</label>
								</div>
								<div class="mob_menu_main">
									<ul class="mob_menu_desc">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
												<?php if ($_smarty_tpl->tpl_vars['navItem1']->value['subsections'] && $_smarty_tpl->tpl_vars['navItem1']->value['top_submenu'] == '0') {?>
													<li>
														<input type="checkbox" id="mob_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
" class="mob_menu_input">
														<a href="javascript:;"><label for="mob_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</label></a>
														<ul class="sub-menu-1">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navItem1']->value['subsections'], 'navItem2', false, NULL, 'navItems2', array (
));
$_smarty_tpl->tpl_vars['navItem2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem2']->value) {
$_smarty_tpl->tpl_vars['navItem2']->do_else = false;
?>
																<?php if ($_smarty_tpl->tpl_vars['navItem2']->value['status'] == 'visible') {?>
																	<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem2']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem2']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
																<?php }?>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</ul>
													</li>
												<?php } else { ?>
													<li>
														<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a>
													</li>
												<?php }?>
											<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
									<div class="mob_menu_footer">
										<h2>Телефон:</h2>

	
										<p><a href='tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
'><?php echo substr($_smarty_tpl->tpl_vars['config']->value['phone'],0,9);?>
 <b><?php echo substr($_smarty_tpl->tpl_vars['config']->value['phone'],9);?>
</b></a></p>
										<h2>Адрес:</h2>
										<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="header_wrapper col-xs-hidden col-sm-hidden">
		<div class="hidden-xs hidden-sm">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/woman.png" class="woman">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/figure.png" class="figure">
		</div>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="logo col-md-4 " style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/header-bg.jpg');">
					   
					</div>
					<div class="special col-md-2" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/special.png');">
						
					</div>
					<div class="header_contacts col-md-5 col-md-offset-1">
						<div class="lang">
							<a href="">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/ru.png">
								<p>Рус</p>
							</a>
							<a href="">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/eng.png">
								<p>Eng</p>
							</a>
						</div>
						<div class="phone">
							<a href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
">
								<span class="icm icmtelephone"></span>
								<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<div class="header_menu_wrapper col-md-4">
					  <ul class="header_menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
								<li>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a>
								</li>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  </ul>  
					</div>
					<div class="header_main_desc col-md-8">
					   <h2><?php echo $_smarty_tpl->tpl_vars['section']->value['summary'];?>
</h2>

					 					   
					
					   <?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>



					   
					   

				   		
					</div>
				</div>
			</div>
		</div>
	</div> 
		  
	</header><?php }
}
