<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 14:03:37
  from 'C:\xampp\htdocs\admin\templates\htaccess-ml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa3619c0a9d4_60430496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138e2fd76a91db9b181307cc4f35cc167b251e4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\htaccess-ml.tpl',
      1 => 1557130646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fa3619c0a9d4_60430496 (Smarty_Internal_Template $_smarty_tpl) {
?><IfModule mod_autoindex>
  Options -Indexes
</IfModule>
<?php if ($_smarty_tpl->tpl_vars['homePageId']->value) {?>
DirectoryIndex /public/section.php?sectionId=<?php echo $_smarty_tpl->tpl_vars['homePageId']->value;?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>

<?php }?>
RewriteEngine On
ErrorDocument 404 /public/error-404.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>


#RewriteRule ^rss.xml$ /public/rss.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
RewriteRule ^sitemap.xml$ /public/sitemap.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SECTIONS']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
if ($_smarty_tpl->tpl_vars['section']->value['type'] == "plain") {
if ($_smarty_tpl->tpl_vars['section']->value['fileName'] == "index") {?>
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ <?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/ [L,R=301]
<?php } else { ?>
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/section.php?sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SECTIONS']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
if ($_smarty_tpl->tpl_vars['section']->value['type'] == "tree") {?>
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
$ <?php echo $_smarty_tpl->tpl_vars['section']->value['path'];?>
/ [L,R=301]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/$ /public/section.php?%{QUERY_STRING}&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/page([0-9]+)\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/section.php?%{QUERY_STRING}&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&page=$1&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/([^/]+)\.(print|recommend).<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/article.php?%{QUERY_STRING}&fileName=$1&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&action=$2&nocache=true&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/([^/]+)\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/article.php?%{QUERY_STRING}&fileName=$1&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/rss\.xml$ /public/rss.php?sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [L]

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

RewriteRule ^(.+\.php)$ <?php echo $_smarty_tpl->tpl_vars['GLOBAL_URI']->value;?>
/$1?SITE_LANG=<?php echo $_smarty_tpl->tpl_vars['SITE_LANG']->value;?>
 [QSA]

<?php }
}
