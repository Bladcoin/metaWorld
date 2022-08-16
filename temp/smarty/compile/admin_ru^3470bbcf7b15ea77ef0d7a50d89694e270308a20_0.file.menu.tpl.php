<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:41:57
  from 'C:\xampp\htdocs\admin\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb666583afb1_12437486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3470bbcf7b15ea77ef0d7a50d89694e270308a20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\menu.tpl',
      1 => 1592205570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb666583afb1_12437486 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="page-sidebar page-sidebar-fixed" data-pages="sidebar">
  <div class="sidebar-menu">
    <div id="page_sidebar" class="page-sidebar <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 1) {?>mCS_disabled<?php }?>">
      <ul id="navigation_sidebar" class="menu-items x-navigation x-navigation-custom <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 1) {?>x-navigation-minimized<?php }?>">
        
        <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "administrator" || $_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "developer") {?>
    
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'overview' || $_smarty_tpl->tpl_vars['activeItem']->value == 'visitors' || $_smarty_tpl->tpl_vars['activeItem']->value == 'visitor' || $_smarty_tpl->tpl_vars['activeItem']->value == 'referers' || $_smarty_tpl->tpl_vars['activeItem']->value == 'bots' || $_smarty_tpl->tpl_vars['activeItem']->value == 'errors') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>"><a class="reports" href="javascript:;"><span class="fa fa-chart-area"></span> <span class="xn-text">Статистика</span></a>
            <ul class="sub-menu">
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'overview') {?>active<?php }?>"><a href="stats.overview.php"><span class="fa fa-signal"></span> Обзор</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'visitors' || $_smarty_tpl->tpl_vars['activeItem']->value == 'visitor') {?>active<?php }?>"><a href="stats.visitors.php"><span class="fa fa-male"></span> Посетители</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'referers') {?>active<?php }?>"><a href="stats.referers.php"><span class="fa fa-globe"></span> Источники</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'bots') {?>active<?php }?>"><a href="stats.bots.php"><span class="fab fa-android"></span> Боты</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'errors') {?>active<?php }?>"><a href="stats.errors.php"><span class="fa fa-exclamation-triangle"></span> Ошибки</a></li>
            </ul>
          </li>
          
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sections' || $_smarty_tpl->tpl_vars['activeItem']->value == 'footerMenu') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-layer-group"></span> <span class="xn-text"> Структура</span></a>
            <ul class="sub-menu"><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sections') {?>active<?php }?>"><a href="sections.php"><span class="fa fa-layer-group"></span> Структура сайта</a></li><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'footerMenu') {?>active<?php }?>"><a href="footerMenu.php"><span class="fa fa-bars"></span> Нижнее меню</a></li></ul>
          </li>
          
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sliders' || $_smarty_tpl->tpl_vars['activeItem']->value == 'products' || $_smarty_tpl->tpl_vars['activeItem']->value == 'news' || $_smarty_tpl->tpl_vars['activeItem']->value == 'articles' || $_smarty_tpl->tpl_vars['activeItem']->value == 'gallerys' || $_smarty_tpl->tpl_vars['activeItem']->value == 'blocks' || $_smarty_tpl->tpl_vars['activeItem']->value == 'rental' || $_smarty_tpl->tpl_vars['activeItem']->value == 'banners' || $_smarty_tpl->tpl_vars['activeItem']->value == 'files') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>"><a href="javascript:;"><span class="fa fa-file-contract"></span> <span class="xn-text"> Контент</span></a>
            <ul class="sub-menu">
              <?php if ($_smarty_tpl->tpl_vars['config']->value['slider'] == 1) {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sliders') {?>active<?php }?>"><a href="sliders.php"><span class="fa fa-file-contract"></span> Слайдер</a></li><?php }?>       
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeContents']->value, 'typeContent', false, 'key');
$_smarty_tpl->tpl_vars['typeContent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typeContent']->value) {
$_smarty_tpl->tpl_vars['typeContent']->do_else = false;
?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.php"><span class="fa fa-file-contract"></span><?php echo $_smarty_tpl->tpl_vars['typeContent']->value;?>
</a></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'files') {?>active<?php }?>"><a href="files.php"><span class="fa fa-file-download"></span> Загрузки</a></li>
              <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_banners'] == '1') {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'banners') {?>active<?php }?>"><a href="banners.php"><span class="fa fa-file-image"></span> Рекламные баннеры</a></li><?php }?>
            </ul>
          </li>
                  
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'settings' || $_smarty_tpl->tpl_vars['activeItem']->value == 'settings-social' || $_smarty_tpl->tpl_vars['activeItem']->value == 'settings-content' || $_smarty_tpl->tpl_vars['activeItem']->value == 'logo' || $_smarty_tpl->tpl_vars['activeItem']->value == 'languages' || $_smarty_tpl->tpl_vars['activeItem']->value == 'users' || $_smarty_tpl->tpl_vars['activeItem']->value == 'settings-maps') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-cog"></span> <span class="xn-text">Система</span></a>
            <ul class="sub-menu">
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'users') {?>active<?php }?>"><a href="users.php"><span class="fa fa-users"></span> Администраторы</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'logo') {?>active<?php }?>"><a href="logo.php"><span class="fab fa-r-project"></span> Логотип сайта</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'settings') {?>active<?php }?>"><a href="settings.php"><span class="fa fa-cogs"></span> Настройки</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'settings-social') {?>active<?php }?>"><a href="settings-social.php"><span class="fa fa-link"></span> Социальные сети</a></li>
              <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "developer") {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'settings-content') {?>active<?php }?>"><a href="settings-content.php"><span class="fa fa-wrench"></span> Настройка контента</a></li><?php }?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'settings-maps') {?>active<?php }?>"><a href="settings-maps.php"><span class="fa fa-map-marked-alt"></span> Настройки карты</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'languages') {?>active<?php }?>"><a href="languages.php"><span class="fa fa-flag"></span> Языки</a></li>
            </ul>
          </li>
    
          
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'templates' || $_smarty_tpl->tpl_vars['activeItem']->value == 'file-manager') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-desktop"></span> <span class="xn-text">Управление шаблоном </span></a>
            <ul class="sub-menu">
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'templates') {?>active<?php }?>"><a href="templates.php"><span class="fa fa-file-code"></span> Редактор шаблона</a></li>
              <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "developer") {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'file-manager') {?>active<?php }?>"><a href="file-manager.php"><span class="fa fa-file-code"></span> Файл менеджер</a></li><?php }?>
            </ul>
          </li>
    
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'about' || $_smarty_tpl->tpl_vars['activeItem']->value == 'documentation') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-info"></span> <span class="xn-text">Дополнительно</span></a>
            <ul class="sub-menu">
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'about') {?>active<?php }?>"><a href="about.php"><span class="fa fa-coffee" aria-hidden="true"></span> О проекте</a></li>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'documentation') {?>active<?php }?>"><a href="documentation.php"><span class="fa fa-info"></span> Документация</a></li>
            </ul>
          </li>
          
          <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_subscribe'] == '1') {?>
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'subscribe' || $_smarty_tpl->tpl_vars['activeItem']->value == 'comments') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-envelope"></span> <span class="xn-text"> Комментарии</span></a>
            <ul class="sub-menu">
              <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_comments'] == '1') {?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'comments') {?>active<?php }?>">
              <?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'comments') {?>
                <a href="comments.php"><span class="fa fa-comments"></span> Комментарии</a>
              <?php } elseif ($_smarty_tpl->tpl_vars['totalPendingComments']->value > 0) {?>
                <a href="comments.php?status=pending"><span class="fa fa-comments"></span> Комментарии</a><div class="informer informer-danger"> <?php echo $_smarty_tpl->tpl_vars['totalPendingComments']->value;?>
</div>
              <?php } else { ?>
                <a href="comments.php"><span class="fa fa-comments"></span> Комментарии</a>
              <?php }?>
              </li>
              <?php }?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'subscribe') {?> active<?php }?>"><a href="subscribe.php"><span class="glyphicon glyphicon-send"></span> Рассылка писем</a></li>
            </ul>
          </li>
          <?php }?>
    
        <?php } elseif ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "editor") {?>
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sliders' || $_smarty_tpl->tpl_vars['activeItem']->value == 'products' || $_smarty_tpl->tpl_vars['activeItem']->value == 'news' || $_smarty_tpl->tpl_vars['activeItem']->value == 'articles' || $_smarty_tpl->tpl_vars['activeItem']->value == 'gallerys' || $_smarty_tpl->tpl_vars['activeItem']->value == 'banners' || $_smarty_tpl->tpl_vars['activeItem']->value == 'comments') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-file"></span> <span class="xn-text"> Контент</span></a>
            <ul class="sub-menu">
              <?php if ($_smarty_tpl->tpl_vars['config']->value['slider'] == 1) {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'sliders') {?>active<?php }?>"><a href="sliders.php"><span class="fa fa-edit"></span> Слайдер</a></li><?php }?>
              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeContents']->value, 'typeContent', false, 'key');
$_smarty_tpl->tpl_vars['typeContent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typeContent']->value) {
$_smarty_tpl->tpl_vars['typeContent']->do_else = false;
?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.php"><span class="fa fa-edit"></span> <?php echo $_smarty_tpl->tpl_vars['typeContent']->value;?>
</a></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_comments'] == '1') {?>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['comments_editors_may_approve']) {?>
                  <?php if ($_smarty_tpl->tpl_vars['activeItem']->value == "comments") {?>
                    <li class="xn-openable <?php if ($_smarty_tpl->tpl_vars['activeItem']->value == "comments") {?>active<?php }?>"><a href="comments.php"><span class="fa fa-comments"></span> <span class="xn-text">Комментарии</span></a></li>
                  <?php } else { ?>
                    <li class="xn-openable <?php if ($_smarty_tpl->tpl_vars['activeItem']->value == "comments") {?>active<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['totalPendingComments']->value > 0) {?>
                      <a href="comments.php?status=pending"><span class="fa fa-comments"></span> Комментарии</a> <small>(<?php echo $_smarty_tpl->tpl_vars['totalPendingComments']->value;?>
 новых)</small>
                    <?php } else { ?>
                      <a href="comments.php"><span class="fa fa-comments"></span> Комментарии</a>
                    <?php }?>
                    </li>
                  <?php }?>
                <?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_banners'] == '1') {?><li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'banners') {?>active<?php }?>"><a href="banners.php"><span class="glyphicon glyphicon-picture"></span> Рекламные баннеры</a></li><?php }?>
            </ul>
          </li>
    
        <?php } elseif ($_smarty_tpl->tpl_vars['adminUser']->value['accessLevel'] == "writer") {?>
          <li class="xn-openable<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == 'products' || $_smarty_tpl->tpl_vars['activeItem']->value == 'news' || $_smarty_tpl->tpl_vars['activeItem']->value == 'articles' || $_smarty_tpl->tpl_vars['activeItem']->value == 'gallerys') {?> <?php if ($_smarty_tpl->tpl_vars['adminUser']->value['check_menu'] == 0) {?>active<?php }
}?>">
            <a href="javascript:;"><span class="fa fa-file"></span> <span class="xn-text"> Контент</span></a>
            <ul class="sub-menu">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeContents']->value, 'typeContent', false, 'key');
$_smarty_tpl->tpl_vars['typeContent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typeContent']->value) {
$_smarty_tpl->tpl_vars['typeContent']->do_else = false;
?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['activeItem']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.php"><span class="fa fa-edit"></span> <?php echo $_smarty_tpl->tpl_vars['typeContent']->value;?>
</a></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
