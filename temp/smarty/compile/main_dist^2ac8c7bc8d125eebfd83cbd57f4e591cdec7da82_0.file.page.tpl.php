<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 07:02:25
  from 'C:\xampp\htdocs\themes\dist\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbb50716b0f09_82742893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ac8c7bc8d125eebfd83cbd57f4e591cdec7da82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\page.tpl',
      1 => 1603790795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/you-are-here.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbb50716b0f09_82742893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
			<div class=" leadership-wrapper">
				<?php $_smarty_tpl->_subTemplateRender("file:modules/you-are-here.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<div class="container-2">
					<div class="row">
						<div class="page-main-content col-md-9">
							<?php 
							//<?
							$tmp = $_smarty_tpl->getTemplateVars('section');
							$i = 0;
							$regex = array();
							$new = preg_replace_callback("/<h2>(.*?)<\/h2>/", function($matches) use(&$i, &$regex)
							{
									$regex[] = $matches[1];
									$result = "
									<div class=\"main-entry-header\" id=\"first-part-$i\" style=\"margin-top:40px\">
										<h2>$matches[1]</h2>
									</div>
									";
									$i++;
							    return $result;
							}
							, $tmp['content']);

							$_smarty_tpl->assign('content',$new);
							$_smarty_tpl->assign('sections',$regex);
							?>

							<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

						</div>
						<div class="page-aside col-md-3">
							<div class="theiaStickySidebar">
								<div class="sidebar-links">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>	
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
#first-part-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-scroll><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
