<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 15:01:58
  from 'C:\xampp\htdocs\themes\dist\templates\header-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b78146a256b7_54837773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b9720d0d1664488ebd9678d3d906faa3a6dc3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\header-two.tpl',
      1 => 1622627799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/meta.tpl' => 1,
  ),
),false)) {
function content_60b78146a256b7_54837773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php $_smarty_tpl->_subTemplateRender("file:modules/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <link rel="short icon" href="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/style.min.css">
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/additional.css">
</head>
<body>
  <div class="wrapper">
  
  <!-- ?Подключение Header -->
  <header class="header">
    <div class="container header-container">
        <div class="header__row">
            <div class="header__logo logo">
              <?php echo smarty_function_fetch_section(array('assign'=>'main','section'=>1),$_smarty_tpl);?>

                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            </div>
            <div class="header__wrapper">
                <div class="header__info">
                    <div class="header__tel"><a href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',' '), ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#" class="header__language header__language-secondary">Ру</a>
                </div>
                <nav class="menu">
                    <ul class="menu__list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
                      
                        <li class="menu__list-item menu__list-item-secondary"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="menu__list-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>

                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </nav>
               
            </div>
            <div class="burger burger__secondary">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header><?php }
}
