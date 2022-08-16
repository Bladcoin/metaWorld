<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-25 12:15:58
  from 'C:\xampp\htdocs\admin\templates\generate-banner-code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe5c9ee979c46_76447431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628254135ab95efb8f5b1288709b8196ef660ad5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\generate-banner-code.tpl',
      1 => 1488056292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe5c9ee979c46_76447431 (Smarty_Internal_Template $_smarty_tpl) {
?><!--banners  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
 begin -->
<?php if ($_smarty_tpl->tpl_vars['banner']->value['bannerType'] == 13 || $_smarty_tpl->tpl_vars['banner']->value['bannerType'] == 4) {?><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerWidth'], ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerHeight'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
"><param name="movie" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['fileUrl'], ENT_QUOTES, 'UTF-8', true);?>
" /><param name="quality" value="high" /><embed src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['fileUrl'], ENT_QUOTES, 'UTF-8', true);?>
" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerWidth'], ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerHeight'], ENT_QUOTES, 'UTF-8', true);?>
"></embed></object><?php } else {
if ($_smarty_tpl->tpl_vars['banner']->value['bannerUrl']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['fileUrl'], ENT_QUOTES, 'UTF-8', true);?>
" border="0" width="100%" alt="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" /></a><?php } else { ?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['fileUrl'], ENT_QUOTES, 'UTF-8', true);?>
" width="100%" alt="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" /><?php }
}?>

<!--banners  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
 end --><?php }
}
