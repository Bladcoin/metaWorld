<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-16 11:22:02
  from 'C:\xampp\htdocs\themes\dist\templates\modules\article-small.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd9dfca3760c4_49420913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f30176042a4d8c7d60ff305fd9d705e67e7379e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\article-small.tpl',
      1 => 1607583306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd9dfca3760c4_49420913 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="articles__content">
	<div class="articles__img-small image-articles-small<?php if ($_smarty_tpl->tpl_vars['right']->value) {?> m-swap<?php }?>" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
	<h3 class="articles__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
	<?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn articles__btn">Подробнее<span class="icon-arrow-short-right"></span></a>
</a><?php }
}
