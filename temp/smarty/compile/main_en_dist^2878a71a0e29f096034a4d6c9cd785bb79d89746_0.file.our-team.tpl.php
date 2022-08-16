<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:44:08
  from 'C:\xampp\htdocs\themes\dist\templates\components\our-team.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb66e82d3f52_11014794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2878a71a0e29f096034a4d6c9cd785bb79d89746' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\our-team.tpl',
      1 => 1660544815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb66e82d3f52_11014794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'ourTeam','section'=>1003),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'items','section'=>$_smarty_tpl->tpl_vars['ourTeam']->value['sectionId'],'status'=>'visible','type_content'=>"products",'orderBy'=>"publishedOn ASC"),$_smarty_tpl);?>


<section class="section section-team">
	<div class="container">
		<div class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ourTeam']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
		<div class="row pt-5">

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

				<div class="col team-color-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>
">
					<div class="team-photo">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-fluid" alt="">
					</div>
					<div class="h4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
					<div class="team-description"><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>

					</div>
				</div>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		</div>
	</div>
</section><?php }
}
