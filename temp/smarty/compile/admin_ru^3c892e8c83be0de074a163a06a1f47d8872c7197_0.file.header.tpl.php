<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:41:57
  from 'C:\xampp\htdocs\admin\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6665540e38_94687592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c892e8c83be0de074a163a06a1f47d8872c7197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\header.tpl',
      1 => 1660311003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_62fb6665540e38_94687592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!DOCTYPE html>
<html lang="en">
  <head>        
    <title><?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
 - <?php }?>Life Style CMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['config']->value['charset'];?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link href="favicon/favicon.png" rel="icon" type="image/x-icon"/> 
    <link href="favicon/favicon.png" rel="shortcut icon">
    <link href="favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="favicon/icon-192x192.png" rel="icon" sizes="192x192"> 
    
    <link rel="stylesheet" type="text/css" href="css/admin-theme.min.css"/>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins-header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/superredactor/sredactor.min.js"><?php echo '</script'; ?>
>
    <link href="js/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <?php echo '<script'; ?>
 src="js/jquery-scrollbar/jquery.scrollbar.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      lang = new Array();
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsLang']->value, 'langVal', false, 'langKey');
$_smarty_tpl->tpl_vars['langVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['langKey']->value => $_smarty_tpl->tpl_vars['langVal']->value) {
$_smarty_tpl->tpl_vars['langVal']->do_else = false;
?>
        lang['<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['langKey']->value, ENT_QUOTES);?>
'] = '<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['langVal']->value, ENT_QUOTES);?>
';
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '</script'; ?>
>
   
  </head>
  
  <body class="">
    <div id="page_container" class="page-container page-navigation-top-fixed <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 1) {?> page-navigation-toggled page-container-wide<?php }?>">
      <div class="page-header">
         <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
          <li class="xn-logo pull-left"><a></a><a href="#" class="x-navigation-control"></a></li>
          <li class="xn-icon-button">
            <a href="#" id="mini" class="x-navigation-minimize" data-user="<?php echo $_smarty_tpl->tpl_vars['adminUser']->value['userId'];?>
" <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 1) {?>data-val="0"<?php } else { ?> data-val="1"<?php }?>><span class="fa fa-outdent"></span></a>
          </li>
          <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
              <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Выйти ?</div>
                <div class="mb-content"><p>Вы действительно хотите выйти?</p><p></p></div>
                <div class="mb-footer">
                  <div class="pull-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_URL']->value;?>
/admin/login.php?action[logout]=true" class="btn btn-success btn-lg close_yes">Да</a>
                    <button class="btn btn-default btn-lg mb-control-close close_no">Нет</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <li class="pull-right last">
            <a id="userbox" class="userbox">
              <figure class="profile-picture">
                <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['hasImage'] == '1') {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['adminUser']->value['images']['medium']['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adminUser']->value['fullName'];?>
" class="rounded-circle"/>
                <?php } else { ?>
                    <img src="avatar/no-image.jpg" class="rounded-circle"/>
                <?php }?>
              </figure>
              <div class="profile-info"><span class="name"><?php echo $_smarty_tpl->tpl_vars['adminUser']->value['fullName'];?>
</span><span class="role">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessLevels']->value, 'accessLevels_item', false, 'key');
$_smarty_tpl->tpl_vars['accessLevels_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['accessLevels_item']->value) {
$_smarty_tpl->tpl_vars['accessLevels_item']->do_else = false;
if ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == $_smarty_tpl->tpl_vars['key']->value) {?> <?php echo $_smarty_tpl->tpl_vars['accessLevels_item']->value;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></div>
              <i class="fa fa-angle-down"></i>
            </a>
  
            <div class="userbox_info animated zoomIn">
              <ul class="list-unstyled mb-2">
                <li class="divider"></li>
                <li><a href="users.php?action[edit]=true&user[userId]=<?php echo $_smarty_tpl->tpl_vars['adminUser']->value['userId'];?>
"><i class="fa fa-user"></i>Профиль</a></li>
                <li><a href="#" class="mb-control" data-box="#mb-signout"><i class="fa fa-power-off"></i> Выход</a></li>
              </ul>
            </div>
          </li>
  
          <li class="xn-icon-button pull-right">
            <a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/">
              <span class="fa fa-desktop" data-toggle="tooltip" data-placement="left" data-original-title="Перейти на сайт"></span>
            </a>
          </li>
          
          
          
  
          <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "administrator" || $_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "developer") {?>
          <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_comments'] == '1') {?>
          <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
          <li class="xn-icon-button pull-right">
            <a href="#"><span class="fa fa-comments"></span></a>
            <?php if ($_smarty_tpl->tpl_vars['totalPendingComments']->value > 0) {?><div class="informer informer-danger"><?php echo $_smarty_tpl->tpl_vars['totalPendingComments']->value;?>
</div><?php } else {
}?>
            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
              <div class="panel-heading">
                <h3 class="panel-title" style="line-height: 30px;"><span class="fa fa-comments"></span> Новые коментарии</h3>                                
                <div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['totalPendingComments']->value > 0) {?><span class="label label-danger"> <?php echo $_smarty_tpl->tpl_vars['totalPendingComments']->value;?>
</span><?php } else {
}?></div>
              </div>
              
              <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
              <?php if ($_smarty_tpl->tpl_vars['totalPendingComments']->value > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, NULL, 'comments', array (
));
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
if ($_smarty_tpl->tpl_vars['comment']->value['status'] == "pending") {?>
                <a href="comments.php?action[edit]=true&comment[commentId]=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commentId'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="list-group-item" >
                  <span class="fa fa-comments" <?php if ($_smarty_tpl->tpl_vars['comment']->value['status'] == "pending") {?>style="color: #a00;"<?php }?>></span>
                  <?php if (strlen($_smarty_tpl->tpl_vars['comment']->value['authorUrl']) > 10) {?><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['authorUrl'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['authorName'],20);?>
</a><?php } else {
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['authorName'],20);
}?>
                  <span class="contacts-title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['authorEmail'],20);?>
</span><p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES)),200);?>
</p>
                </a>
                <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                       
              <?php } else { ?>
                <a class="list-group-item"><h5 class="text-center">Новых комментарий нет</h5></a> 
              <?php }?>
              </div>     
              <div class="panel-footer text-center"><a href="comments.php">Все комментарии</a></div>                            
            </div>                        
          </li>

          <?php }?>
          <?php }?>

  
          <li class="xn-icon-button pull-right hidden-xs">
            <a href="#" style="width: 40px;" data-toggle="tooltip" data-placement="left" title data-original-title="<?php if ($_smarty_tpl->tpl_vars['config']->value['compress_js_css'] == '1') {?>Компрессия включена<?php } else { ?>Компрессия выключена<?php }?>">
              <span class="icon-markup">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                  <path d="M6.01 14.707l5.812-8c.16-.223.14-.668-.285-.668H9.234c-.27 0-.393-.2-.262-.448l2.046-3.875c.147-.24.143-.717-.3-.717H6.514c-.266 0-.552.213-.618.477L4.12 8.527c-.066.262.105.477.383.477h2.04c.283 0 .422.21.324.472 0 0-1.866 4.93-1.866 5.025 0 .276.224.5.5.5.144 0 .275-.06.366-.16.053-.03.102-.074.145-.133z" class="<?php if ($_smarty_tpl->tpl_vars['config']->value['compress_js_css'] == '1') {?>icon-color-green<?php } else { ?>icon-color-yellow<?php }?>"></path>
                </svg>
              </span>
            </a>                       
          </li>
  
  
          <?php if (count($_smarty_tpl->tpl_vars['LANGUAGES']->value) > 1) {?>
          <li class="xn-icon-button pull-right">
            <a href="#">
              <span class="flag fa fa-flag" style="font-size: 16px;"></span> 
              <div class="informer informer-warning"><?php echo strtolower((($tmp = @$_smarty_tpl->tpl_vars['SITE_LANG']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['DEFAULT_LANG']->value : $tmp));?>
</div>
            </a>
            <ul class="xn-drop-left animated zoomIn">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'navLang');
$_smarty_tpl->tpl_vars['navLang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navLang']->value) {
$_smarty_tpl->tpl_vars['navLang']->do_else = false;
?>
              <?php if (($_smarty_tpl->tpl_vars['SITE_LANG']->value == $_smarty_tpl->tpl_vars['navLang']->value['codename']) || (!$_smarty_tpl->tpl_vars['SITE_LANG']->value && $_smarty_tpl->tpl_vars['navLang']->value['isDefault'])) {?>
                <li class="active">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_URL']->value;?>
/admin/<?php if (!$_smarty_tpl->tpl_vars['navLang']->value['isDefault']) {
echo $_smarty_tpl->tpl_vars['navLang']->value['codename'];?>
/<?php }
echo $_smarty_tpl->tpl_vars['LOCATION']->value['FILE'];?>
">
                    <span class="flag flag-<?php echo $_smarty_tpl->tpl_vars['navLang']->value['codename'];?>
"></span> <?php echo htmlspecialchars_decode((($tmp = @$_smarty_tpl->tpl_vars['navLang']->value['languageTransName'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['navLang']->value['languageName'] : $tmp), ENT_QUOTES);?>

                  </a>
                </li>
              <?php } else { ?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_URL']->value;?>
/admin/<?php if (!$_smarty_tpl->tpl_vars['navLang']->value['isDefault']) {
echo $_smarty_tpl->tpl_vars['navLang']->value['codename'];?>
/<?php }
echo $_smarty_tpl->tpl_vars['LOCATION']->value['FILE'];?>
">
                    <span class="flag flag-<?php echo $_smarty_tpl->tpl_vars['navLang']->value['codename'];?>
"></span> <?php echo htmlspecialchars_decode((($tmp = @$_smarty_tpl->tpl_vars['navLang']->value['languageTransName'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['navLang']->value['languageName'] : $tmp), ENT_QUOTES);?>

                  </a>
                </li>
              <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>                        
          </li>
          <?php }?> 
         <?php }?>
       
      </ul>   
      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
     
      <div class="page-content">
       


<?php }
}
