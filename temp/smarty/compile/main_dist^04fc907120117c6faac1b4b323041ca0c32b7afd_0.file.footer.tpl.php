<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:54
  from 'C:\xampp\htdocs\themes\dist\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d6a300249_70263589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fc907120117c6faac1b4b323041ca0c32b7afd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\footer.tpl',
      1 => 1660642029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/loginModal.tpl' => 1,
    'file:components/forgotPassword.tpl' => 1,
    'file:components/registrationModal.tpl' => 1,
  ),
),false)) {
function content_62fb6d6a300249_70263589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),));
?>
<footer id="footer">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-auto">
				<div class="d-flex align-items-center">

					<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['summary']),$_smarty_tpl);?>

					<span class="mt-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</span>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<a href="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="ml-3"><img
								src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
" width="16" height="17" alt=""></a>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="col-auto">
				<div class="row">
					<div class="col-auto px-4">
						<div class="d-flex align-items-center">
							<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['content']),$_smarty_tpl);?>

							<span class="text-muted mr-2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['section_icon'], ENT_QUOTES, 'UTF-8', true);?>
</span>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>


								<a href="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="mx-2"><img
										src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
" width="20" height="21" alt=""></a>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['content_two']),$_smarty_tpl);?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>

							<div class="col-auto border-left px-4">
							<?php } elseif ($_smarty_tpl->tpl_vars['key']->value%2 == 0 && $_smarty_tpl->tpl_vars['key']->value != 0) {?>
							</div>
							<div class="col-auto border-left px-4">

							<?php }?>


							<a href="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="mx-2"><img
									src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
" width="20" height="21" alt=""></a>


						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>
				</div>
			</div>
		</div>
</footer>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:components/loginModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/forgotPassword.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:components/registrationModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="curzr" hidden></div>
</body>

</html><?php }
}
