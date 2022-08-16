<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 16:35:36
  from 'C:\xampp\htdocs\admin\templates\htaccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa6bec854c843_36067429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00b138574dbcf6fefeacaec5dc7a8c169a9078ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\htaccess.tpl',
      1 => 1571899178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa6bec854c843_36067429 (Smarty_Internal_Template $_smarty_tpl) {
?><IfModule mod_autoindex>
  Options -Indexes
</IfModule>
<?php if ($_smarty_tpl->tpl_vars['homePageId']->value) {?>
DirectoryIndex /public/section.php?sectionId=<?php echo $_smarty_tpl->tpl_vars['homePageId']->value;?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>

<?php }?>
RewriteEngine On
RewriteRule ^index/page([^/]*)\.htm$ /public/section.php?sectionId=1&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
&page=$1 [L]
<?php if (IS_HTTPS) {?>

RewriteCond %{HTTPS} =off 
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [QSA,L]


<?php }?>
ErrorDocument 404 /public/error-404.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>


<?php if ($_smarty_tpl->tpl_vars['config']->value['compress_js_css']) {?>
RewriteCond %{REQUEST_FILENAME} -f
RewriteRule ^(.+\.(css|js))$ /compress.php?path=$1&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
 [L]
<?php }?>

#RewriteRule ^rss.xml$ /public/rss.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
 [L]
RewriteRule ^sitemap.xml$ /public/sitemap.php?rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
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
 [L]
<?php }?>

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
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
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/page([0-9]+)\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/section.php?%{QUERY_STRING}&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&page=$1&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
 [L]
RewriteRule ^<?php echo preg_quote($_smarty_tpl->tpl_vars['section']->value['dir']);?>
/([^/]+)\.<?php echo $_smarty_tpl->tpl_vars['config']->value['file_extension'];?>
$ /public/article.php?%{QUERY_STRING}&fileName=$1&sectionId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
&rewrite=<?php echo $_smarty_tpl->tpl_vars['rewrite']->value;?>
 [L]

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
