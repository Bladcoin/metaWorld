<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:53
  from 'C:\xampp\htdocs\themes\dist\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d69d24637_10170590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a1dde68bbbbbff76d9ab6dc9d732953e0e68e44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\header.tpl',
      1 => 1660642869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/doctype.tpl' => 1,
    'file:components/notifications.tpl' => 1,
  ),
),false)) {
function content_62fb6d69d24637_10170590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:components/doctype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
	<div class="wrapper">

		<header id="header">

			<?php $_smarty_tpl->_subTemplateRender("file:components/notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php if ($_smarty_tpl->tpl_vars['errors']->value['checkLogin']) {?>

				<?php echo '<script'; ?>
>
					$(function() {
						$('#toast2').toast("show")
					})
				<?php echo '</script'; ?>
>
			<?php } elseif ($_smarty_tpl->tpl_vars['messages']->value['success']) {?>
				<?php echo '<script'; ?>
>
					$(function() {
						$('#toast3').toast("show")
					})
				<?php echo '</script'; ?>
>

			<?php }?>



			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col">

					</div>
					<div class="col-auto">

						<ul class="nav">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
									<?php if (($_smarty_tpl->tpl_vars['navItem1']->value['top_submenu'] == '1' && $_SESSION['siteUser']) || $_smarty_tpl->tpl_vars['navItem1']->value['top_submenu'] == "0") {?>

										<li class="nav-item">
											<a class="nav-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
										</li>

									<?php }?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<li class="nav-item lang">
								<button type="button" class="btn btn-lang"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentLang']->value, ENT_QUOTES, 'UTF-8', true);?>
</button>

								<ul class="lang-list">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>

										<li>
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['codename'], ENT_QUOTES, 'UTF-8', true);?>
</a>
										</li>

									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>

							</li>
							<li class="nav-item ml-5">
								<?php if (!$_SESSION['siteUser']) {?>

									<button type="button" class="btn btn-primary btn-sm ml-4 px-5" data-toggle="modal"
										data-target="#loginModal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</button>
								<?php } else { ?>
									<form action="/public/sign-out.php" method="POST">
										<button
											class="btn btn-primary btn-sm ml-4 px-5"><?php if ($_smarty_tpl->tpl_vars['currentLang']->value == "ru") {?>Выйти<?php } else { ?>Logout<?php }?></button>
									</form>
								<?php }?>
							</li>
						</ul>
					</div>
				</div>
			</div>
</header><?php }
}
