<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-05 07:02:35
  from 'C:\xampp\htdocs\themes\dist\templates\section-crisps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff400fb850086_37032815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab5afada5f2ae2c9baf2f0954cb6352f1d827b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-crisps.tpl',
      1 => 1608892708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ff400fb850086_37032815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_articles.php','function'=>'smarty_function_images_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
    <div class="categories">
        <div class="container">
            <div class="categories__inner-page">
                <ul class="breadcrumbs__inner">
                    <li class="breadcrumbs__inner-item">
                        <?php echo smarty_function_fetch_section(array('assign'=>'products','section'=>852),$_smarty_tpl);?>

                        <a class="breadcrumbs__inner-link breadcrumbs__inner-link--underline" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['products']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </li>
                    <li class="breadcrumbs__inner-item">
                        <span class="breadcrumbs__inner-link breadcrumbs__inner-link--slash"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </li>
                </ul>
            </div>
            <!-- Previews -->
            <div class="categories__inner-content categories__inner-content-preview">
                <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'getFrom'=>'gallery'),$_smarty_tpl);?>

                <div class="categories__image categories__image-perview image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                <div class="categories__desription">
                    <h4 class="categories__title animate-all"><?php echo $_smarty_tpl->tpl_vars['section']->value['section_icon'];
echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['section']->value['sectionId'] == 855) {?><sup>®</sup><?php }?></h4>
                     <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['summary'],'<p','<p class="categories__text animate-all"'),'<em>','<sup>'),'</em>','</sup>');?>


                    <div class="categories__packing">
                        <div class="packet-items-inactive icon-240">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/packets-s-240.svg" alt="">
                        </div>
                        <div class="packet-items-inactive icon-225">
                           <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/packets-s-225.svg" alt="">
                        </div>
                        <div class="packet-items-inactive icon-150">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/packets-s-150.svg" alt="">
                        </div>
                        <div class="packet-items-inactive icon-80">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/packets-s-80.svg" alt="">
                        </div>
                        <div class="packet-items-inactive icon-40">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/packets-s-40.svg" alt="">
                        </div>
                    </div>
                    <div class="categories__info">- фасовка (в граммах)</div>
                </div>
            </div>

            <!-- Tabs content -->
            <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['products']->value['sectionId'],'type_content'=>'products','orderBy'=>'publishedOn ASC'),$_smarty_tpl);?>

               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?> 
            <div class="categories__inner-content  tabs__content">
                <?php echo smarty_function_images_articles(array('getFrom'=>'articles','assign'=>'articleImages','articleId'=>$_smarty_tpl->tpl_vars['article']->value['articleId']),$_smarty_tpl);?>

                
                <div class="categories__image categories__image-change image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                <div class="categories__description categories__description-change">
                    <h4 class="categories__title animate-all">Lay's<sup>®</sup>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
»</h4>
                    <p class="categories__subtitle animate-all"><span>Описание</span></p>
                    
                    <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<p','<p class="categories__text animate-all"'),'<em>','<sup>'),'</em>','</sup>');?>

                        <?php $_smarty_tpl->_assignInScope('tags', explode(",",$_smarty_tpl->tpl_vars['article']->value['tags']));?>

                    <div class="categories__packing">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'sectionTags', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionTags']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionTags']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionTags']->value['index'];
?>
                           
                        <div class="packet-items icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-id="222">
                            <svg class="icon-packets <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionTags']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionTags']->value['first'] : null)) {?>active<?php }?>">
                                <use xlink:href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/libs/iconsprite/sprite.svg#packet-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
"></use>
                            </svg>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                    <div class="categories__info">-фасовка (в граммах)</div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
                        <h2 class="categories__inner-title title__heading">Все вкусы</h2>
               
            



            <!-- Slider categories -->
            <div class="swiper-container categories__slider">
                <div class="swiper-wrapper">
                    
                    <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'type_content'=>'products','orderBy'=>'publishedOn ASC'),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?> 
                    <div class="swiper-slide categories__slide">
                        <div class="categories__cards categories__cards-slide">
                            <div class="cards__inner" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>
;">
                                <div class="categories__cards-image">
                                    <div class="cards__image-inner image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                                </div>
                                <div class="categories__cards-content categories__cards-mb">
                                    <h2 class="categories__cards-title">Lay's<sup>®</sup></h2>
                                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                    <div class="cards__btn btn-details">Подробнее</div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="swiper__position categories__controls">
                    <div class="swiper-button-prev categories__prev"> 
                        <svg width="5.1875rem" height="2.375rem" viewBox="0 0 83 38" xmlns="http://www.w3.org/2000/svg">
                        <path d="M82.2428 20.5056C83.2191 19.5292 83.2191 17.9463 82.2428 16.97L66.3329 1.06012C65.3566 0.0838053 63.7737 0.0838055 62.7974 1.06012C61.8211 2.03643 61.8211 3.61934 62.7974 4.59565L76.9395 18.7378L62.7974 32.8799C61.8211 33.8562 61.8211 35.4391 62.7974 36.4155C63.7737 37.3918 65.3566 37.3918 66.3329 36.4155L82.2428 20.5056ZM0.387696 21.2378L80.4751 21.2378L80.4751 16.2378L0.387695 16.2378L0.387696 21.2378Z"/>
                        </svg></div>
                    <div class="swiper-button-next categories__next">
                        <svg width="5.1875rem" height="2.375rem" viewBox="0 0 83 38" xmlns="http://www.w3.org/2000/svg">
                            <path d="M82.2428 20.5056C83.2191 19.5292 83.2191 17.9463 82.2428 16.97L66.3329 1.06012C65.3566 0.0838053 63.7737 0.0838055 62.7974 1.06012C61.8211 2.03643 61.8211 3.61934 62.7974 4.59565L76.9395 18.7378L62.7974 32.8799C61.8211 33.8562 61.8211 35.4391 62.7974 36.4155C63.7737 37.3918 65.3566 37.3918 66.3329 36.4155L82.2428 20.5056ZM0.387696 21.2378L80.4751 21.2378L80.4751 16.2378L0.387695 16.2378L0.387696 21.2378Z"/>
                            </svg>
                    </div>
                </div>
            </div>
            <!-- Slider for magazine -->
                    </div>
    </div>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
