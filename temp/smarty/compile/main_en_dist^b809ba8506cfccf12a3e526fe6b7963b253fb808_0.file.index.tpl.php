<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:51:19
  from 'C:\xampp\htdocs\themes\dist\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb689745ce23_45003332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b809ba8506cfccf12a3e526fe6b7963b253fb808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\index.tpl',
      1 => 1660642441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:components/first-block.tpl' => 1,
    'file:components/secondWorld.tpl' => 1,
    'file:components/information.tpl' => 1,
    'file:components/roadmap.tpl' => 1,
    'file:components/tokenomics.tpl' => 1,
    'file:components/chart.tpl' => 1,
    'file:components/releasedJobs.tpl' => 1,
    'file:components/news.tpl' => 1,
    'file:components/our-team.tpl' => 1,
    'file:components/faq.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb689745ce23_45003332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main id="main">

	<?php $_smarty_tpl->_subTemplateRender("file:components/first-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/secondWorld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/roadmap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/tokenomics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:components/releasedJobs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if ($_SESSION['siteUser']) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:components/news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("file:components/our-team.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("file:components/faq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

	<div class="scroll-down"></div>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
