<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-16 11:22:02
  from 'C:\xampp\htdocs\themes\dist\templates\modules\article-big.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd9dfca57f0e0_28620597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a3f5e51b457c66bb058c17d6a6107e5f86b587' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\article-big.tpl',
      1 => 1607595245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd9dfca57f0e0_28620597 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="articles__content <?php if ($_smarty_tpl->tpl_vars['left']->value) {?>acritcles__content-reverse<?php }?>"> 
	  <?php if (!$_smarty_tpl->tpl_vars['left']->value) {?>
	  <div class="articles__img-big image-articles-big" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
	  <?php }?>
	  <h3 class="articles__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
	  <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

	  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn articles__btn acritcles__btn-reverse">Подробнее<span class="icon-arrow-short-right"></span></a>
	  <?php if ($_smarty_tpl->tpl_vars['left']->value) {?>
	  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="articles__img-big image-articles-big acritcles__img-reverse" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></a>
	 <?php }?>
 </a><?php }
}
