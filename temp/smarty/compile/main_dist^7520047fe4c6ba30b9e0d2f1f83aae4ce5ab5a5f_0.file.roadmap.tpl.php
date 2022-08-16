<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:52
  from 'C:\xampp\htdocs\themes\dist\templates\components\roadmap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d687f5781_01595062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7520047fe4c6ba30b9e0d2f1f83aae4ce5ab5a5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\roadmap.tpl',
      1 => 1660547966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d687f5781_01595062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),));
echo smarty_function_fetch_section(array('assign'=>'roadmap','section'=>984),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'items','section'=>$_smarty_tpl->tpl_vars['roadmap']->value['sectionId'],'status'=>'visible','type_content'=>"products",'orderBy'=>"publishedOn ASC"),$_smarty_tpl);?>


<section class="section section-roadmap" id="roadmap">
	<div class="decor-left"></div>
	<div class="decor-right"></div>
	<div class="decor-bottom"></div>
	<div class="development-roadmap">
		<div class="container">
			<div class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roadmap']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
			<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roadmap']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</div>
	<div class="container">
		<div class="roadmap row">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'roadmapCycle', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

				<div class="roadmap-item col highlight">
					<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
						<div class="we-are-here">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

						</div>
					<?php }?>
					<div class="d-flex flex-column h-100">

						<div class="roadmap-item-info">
							<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['item']->value['summary']),$_smarty_tpl);?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<div class="roadmap-item-date">
									<div class="mt-n3 whitespace-pre-line">
										<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>

									</div>
									<div class="roadmap-item-date-year">
										<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

									</div>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							<div class="roadmap-item-phase">
								<span class="position-relative z-1">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>

								</span>
							</div>
						</div>

						<div class="roadmap-item-description">
							<ul>
								<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['item']->value['content']),$_smarty_tpl);?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									<li><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
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
