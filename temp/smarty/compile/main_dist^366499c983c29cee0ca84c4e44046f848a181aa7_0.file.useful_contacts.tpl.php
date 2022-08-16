<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-18 08:29:11
  from 'C:\xampp\htdocs\themes\dist\templates\modules\useful_contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600538c796b1b7_65244296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366499c983c29cee0ca84c4e44046f848a181aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\modules\\useful_contacts.tpl',
      1 => 1610949093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600538c796b1b7_65244296 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="swiper-slide contacts-slide">
<div class="contacts__item">
    <div class="contacts__item-img">
       <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
    </div>
    <div class="contacts__content">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['sImage']->value['link']) {?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
        <?php }?>
    </div>
</div>
</div><?php }
}
