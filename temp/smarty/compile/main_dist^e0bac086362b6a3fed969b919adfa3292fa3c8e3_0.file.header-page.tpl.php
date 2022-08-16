<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 10:31:47
  from 'C:\xampp\htdocs\themes\dist\templates\header-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd882836c5504_93747831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0bac086362b6a3fed969b919adfa3292fa3c8e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\header-page.tpl',
      1 => 1608016995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/meta.tpl' => 1,
  ),
),false)) {
function content_5fd882836c5504_93747831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.logo.php','function'=>'smarty_function_logo',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <?php $_smarty_tpl->_subTemplateRender("file:modules/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css"><link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/style_responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/shareButtons.css">
</head>

<body>
  <div class="wrapper">


    <!-- ?Подключение Header -->
    <header class="header bg-white">
    <div class="container">
        <div class="header__inner">
                 <?php echo smarty_modifier_replace(smarty_function_logo(array(),$_smarty_tpl),'<a','<a class="header__logo"');?>

             </a>
            <div class="menu">
                <div class="obloshka">
                    <ul class="menu__list">
                        <li class="search-mobile">
                            <div class="search-mobile-content">
                                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/search.php" class="form-box">
                                    <input required="required" name="query" type="text"  class="form-item mobile-theme">
                                    <button class="icon-item icon-search-item">
                                          <span class="icon-search" aria-hidden="true"></span>
                                    </button>
                                  </form>
                            </div>
                        </li>
                        <li class="lang">
                            <div class="lang-mobile">
                                <button class="header__language-eng">Рус</button>
                                <button class="header__language-eng">Uz</button>
                                <button class="header__language-eng">Eng</button>
                            </div>
                        </li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
                        <li class="menu__list-item">
                         <button  class="menu__list-link three-head-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</button><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="menu__list-link--none mobile"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <div class="menu__show">
                                <div class="container">
                                    <div class="menu__show-inner">
                                        <div class="menu__show-columns">
                                            <h2 class="menu__show-сolumns-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                            <?php echo $_smarty_tpl->tpl_vars['navItem1']->value['summary'];?>

                                            <a class="menu__show-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее<span class="icon-arrow-short-right"></span></a>
                                        </div>
                                        <div class="menu__show-columns">
                                            <a class="menu__show-link" href="#">Программа Assesment Center</a>
                                            <a class="menu__show-link" href="#">Эмоциональный интеллект лидера</a>
                                            <a class="menu__show-link" href="#">Повышение квалификации на производстве</a>                     
                                        </div>
                                        <div class="menu__show-columns">
                                            <a class="menu__show-link" href="#">Программа Assesment Center</a>
                                            <a class="menu__show-link" href="#">Эмоциональный интеллект лидера</a>
                                            <a class="menu__show-link" href="#">Повышение квалификации на производстве</a>                     
                                        </div>
                                    </div>
                                    <div class="menu__show-actual">
                                        <h3 class="title-actual">Актуальное</h3>
                                        <div class="menu__show-actual-inner">
                                            <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['navItem1']->value['sectionId'],'limit'=>3),$_smarty_tpl);?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                                            <a class="menu__show-content" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="menu__show-img bg-img "
                                                    style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
                                                </div>
                                                <h2 class="menu__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                            </a>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </ul>
                </div>
                
            </div>
            <div class="header__language">
                <button class="header__language-eng three-head-eng">Рус</button>
                <button class="header__language-eng three-head-eng">Uz</button>
                <button class="header__language-eng three-head-eng">Eng</button>
            </div>
            <div class="header__form">
                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/search.php" class="form-box three-head-search">
                  <input required="required" type="text"  name="query" class="form-item mobile-theme bg-wh">
                  <button class="icon-item icon-search-item three-head-btn">
                        <span class="icon-search" aria-hidden="true"></span>
                  </button>
                </form>
              </div>

           <div class="burger three-head-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>
</header>
<?php }
}
