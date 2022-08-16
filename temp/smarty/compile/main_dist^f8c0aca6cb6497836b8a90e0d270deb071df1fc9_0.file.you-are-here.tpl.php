<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:00:52
  from 'C:\xampp\htdocs\themes\dist\templates\modules\you-are-here.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb40a4c8e197_28578308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c0aca6cb6497836b8a90e0d270deb071df1fc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\you-are-here.tpl',
      1 => 1598706664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb40a4c8e197_28578308 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb-container">
	<div class="container-2">
	  <ol class="breadcrumb">
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
">Главная</a></li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionParents']->value, 'navItem', false, NULL, 'navItems', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['navItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem']->value) {
$_smarty_tpl->tpl_vars['navItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['total'];
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_navItems']->value['last'] : null)) {?>
						<?php if ($_smarty_tpl->tpl_vars['boldLastItem']->value) {?>
							<li ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
						<?php } elseif ($_smarty_tpl->tpl_vars['noLastLink']->value) {?>
							<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
							<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<li class="active"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<?php } else { ?>
							<li class="active"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<?php }?>
						<?php }?>
					<?php } else { ?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	</div>
</div><?php }
}
