<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 10:53:22
  from 'C:\xampp\htdocs\themes\dist\templates\section-landing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb64092b1e9a2_40727689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c881a4570e86ffe84f4fd37f9a044df8501e4e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-landing.tpl',
      1 => 1605779598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/meta.tpl' => 1,
  ),
),false)) {
function content_5fb64092b1e9a2_40727689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sliders.php','function'=>'smarty_function_fetch_sliders',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.social.php','function'=>'smarty_function_social',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),5=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),6=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),7=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.maps.php','function'=>'smarty_function_maps',),));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php $_smarty_tpl->_subTemplateRender("file:modules/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/style.min.css">
</head>
<body>
  <div class="wrapper">

  
  <!-- ?Подключение Header -->
  <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a href=""><picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/header__logo.webp" type="image/webp"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/header__logo.png" alt=""></picture></a>
            </div>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__list-item"><a class="menu__list-link" href="#history">О нас</a></li>
                    <li class="menu__list-item"><a class="menu__list-link" href="#linewine">Красное вино</a></li>
                    <li class="menu__list-item"><a class="menu__list-link" href="#linewine">Белое вино</a></li>
                    <li class="menu__list-item"><a class="menu__list-link" href="#products">О продукции</a></li>
                    <li class="menu__list-item"><a class="menu__list-link" href="#contacts">Контакты</a></li>
                </ul>                           
            </nav>
            <div class="header__phone">
                <a href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo substr($_smarty_tpl->tpl_vars['config']->value['phone'],0,9);?>
 <span><?php echo substr($_smarty_tpl->tpl_vars['config']->value['phone'],9);?>
</span></a>

            </div>
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

  <!-- ?Основной контент -->
  <main class="main">
      <section class="intro">
        <div class="container">
          <div class="swiper-container swiper-container--intro">
            <div class="swiper-wrapper">
                <?php echo smarty_function_fetch_sliders(array('assign'=>'sectionSliders','section'=>'slider','limit'=>10,'orderBy'=>'orderBy'),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionSliders']->value, 'slider', false, NULL, 'sectionSliders', array (
));
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
?>
                  <div class="swiper-slide swiper-slide--intro"> 
                    <div class="intro__inner">
                    <div class="intro__content">
                      <div class="intro__content-img">
                        <picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/intro/MARO-intro.webp" type="image/webp"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/intro/MARO-intro.png" alt=""></picture>
                      </div>
                      <div class="intro__content-text">
                        <?php echo $_smarty_tpl->tpl_vars['slider']->value['summary'];?>

                      </div>
                      <?php if ($_smarty_tpl->tpl_vars['slider']->value['links']) {?>
                      <div class="intro__content-btn">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['links'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
                      </div>    
                      <?php }?>
                      
                        <ul class="intro__social">
                            <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_function_social(array(),$_smarty_tpl),'<li','<li class="intro__social-item"'),'<span','<span style="color:#403e3e;"');?>


                        </ul>
                    </div>
                    <div class="intro__image">
                      <div class="intro__image-img">
                        <picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/intro/maro-intro-img.webp" type="image/webp"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/intro/maro-intro-img.jpg" alt=""></picture>
                        <div class="intro__bottle img-bg-contain" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        </div>
          <div class="swiper-button--intro">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <div class="swiper-scrollbar swiper-scrollbar--intro">
          </div>
        </div>
         
        </div>
      </section>
      
      <section id="history" class="history p-all">
        <div class="container">

            <?php echo smarty_function_fetch_section(array('assign'=>'history','section'=>822),$_smarty_tpl);?>

          <h2 class="history__title title-w title-fontS">
            <?php if (preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['history']->value['name'], $tmp) != 1) {?>
                <?php echo htmlspecialchars(strstr($_smarty_tpl->tpl_vars['history']->value['name'],' ',true), ENT_QUOTES, 'UTF-8', true);?>

                <b><?php echo htmlspecialchars(trim(strpbrk($_smarty_tpl->tpl_vars['history']->value['name'],' ,;!')), ENT_QUOTES, 'UTF-8', true);?>
</b>
            <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['history']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
      </h2>
          <div class="history__inner">
            <div class="history__content">
              <?php echo $_smarty_tpl->tpl_vars['history']->value['summary'];?>

            </div>
            <div class="history__slider">
                  <div class="swiper-container swiper-container--history">
                    <div class="swiper-wrapper">
                    <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['history']->value['sectionId'],'getFrom'=>"gallery"),$_smarty_tpl);?>

                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>
                      <div class="swiper-slide swiper-slide--history" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                  </div>
            </div>
          </div>  
        </div>
      </section>

      <section id="linewine" class="linewine p-all">
        <div class="container">
            <?php echo smarty_function_fetch_section(array('assign'=>'lineWine','section'=>820),$_smarty_tpl);?>

          <h2 class="linewine__title title-b title-fontS"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lineWine']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
          <div class="linewine__inner">
            <div class="linewine__image">
              <div class="linewine-bg">
                <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['lineWine']->value['sectionId'],'limit'=>9999,'type_content'=>'products'),$_smarty_tpl);?>

                <div class="linewine__number">Вино 1</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'];
?>
                <div class="linewine__tabs-img<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] : null)) {?> active<?php }?>">
                  <picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
" type="image/webp"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""></picture>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                <div class="linewine__tabs">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'];
?>
                  <button class="linewine__tabs-item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] : null)) {?> active<?php }?>">Вино <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'] : null)+1, ENT_QUOTES, 'UTF-8', true);?>
</button>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div> 
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'];
?>
            <div class="linewine__content<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] : null)) {?> active <?php }?>">
                <div class="linewine__content-img">
                  <picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/linewine/baka-bang-linewine.webp" type="image/webp"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/linewine/baka-bang-linewine.png" alt=""></picture>
                </div>
                <h4 class="linewine__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['content'],'<ul','<ul class="linewine__list"'),'<li','<li class="linewine__list-item"'),'<strong','<span'),'</strong>','</span>');?>

                      
                  <div class="linewine__btn">
                    <a href="">Узнать больше</a>
                  </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         
          </div>
        </div>
      </section>

      <section id="products" class="products p-all">
        <div class="container">
          <?php echo smarty_function_fetch_section(array('assign'=>'aboutProduct','section'=>824),$_smarty_tpl);?>

          <h2 class="products__title title-w">
            <?php if (preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['aboutProduct']->value['name'], $tmp) != 1) {?>
              <?php $_smarty_tpl->_assignInScope('words', explode(" ",$_smarty_tpl->tpl_vars['aboutProduct']->value['name']));?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['words']->value, 'word', false, NULL, 'words', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['word']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['word']->value) {
$_smarty_tpl->tpl_vars['word']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['total'];
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_words']->value['last'] : null)) {?>
                  <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['word']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['word']->value, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aboutProduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
          </h2>
          <div class="products__inner">
           <div class="products__image img-bg-cover" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aboutProduct']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
)">
           </div>
           <div class="products__content">
            <div class="products__text">
              <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['aboutProduct']->value['summary'],'<h3','<h3 class="products__text-title"'),'<p','<p style="max-width: 409px; margin-bottom: 30px;"');?>

            </div>

             <div class="products__info">
              <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['aboutProduct']->value['content'],'strip_tags'=>true),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
               <div class="products__info-description">
                <div class="products__info-img">
                 <picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/products/krug.webp" type="image/webp"><img  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/products/krug.png" alt=""></picture>
                 <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"></span>
                </div>
                <p class="products__info-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
               </div>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
             </div>
           </div>
          </div>
        </div>
      </section>

      <section id="contacts" class="contacts p-all">
        <div class="container">
          <?php echo smarty_function_fetch_section(array('assign'=>'contacts','section'=>825),$_smarty_tpl);?>

          <h2 class="contacts__title title-b title-fontS"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contacts']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
          <div class="contacts__form-inner">
            <form id="mainForm" class="contacts__form">
              <div class="contacts__form-left">
                <h3 class="contacts__form-title">Оставьте заявку</h3>
                <p>Наши менеджеры свяжутся с вами через 15 минут</p>
                <input id="formName" required class="contacts__input" placeholder="Имя" name="name" type="text">
                <input id="formPhone" required class="contacts__input" placeholder="Номер телефона" name="phone" type="tel">
                <button value="отправить" type="submit">отправить</button>
              </div>
              <div class="contacts__form-right">
                <p><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''), ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</p>
              </div>
              </form>
              <section class="contacts-maps">
                <div id="map-canvas" class="maps-contacts"></div>
                </section>
          </div>
      </section>
  </main>

  <!-- ?Подключение Footer -->
  <footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__root p-t">© 2001-2020 Все права защищены</div>
            <div class="footer__life p-t">
                <p>Создание сайтов <a target="_blank" href="https://www.life-style.uz">LifeStyle</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/swiper/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVUinUZqQAIM1NfbavWbOKtsc3l-XE_ag"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/js/scripts.js"><?php echo '</script'; ?>
>
<?php echo smarty_function_maps(array(),$_smarty_tpl);?>

</body>
</html><?php }
}
