<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 10:30:00
  from 'C:\xampp\htdocs\themes\dist\templates\section-razvitie-seminar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd882186f1634_20156418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93475200a7fb64b40d3a72ab001c8c1364c76ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-razvitie-seminar.tpl',
      1 => 1608021223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-page.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd882186f1634_20156418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
      <!-- Intro block -->
      <div class="intro-block padd">
        <div class="container">
          <div class="intro-block__center bg-img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
            <h2 class="intro-block__text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
          </div>
        </div>
      </div>
      <!-- INFO -->
      <div class="page-info padd-sect">
        <div class="container">
          <div class="page-info__inner">
            <div class="page-info__content">
              <div class="page-info__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['section']->value['publishedOn'],'%d.%m.%Y'), ENT_QUOTES, 'UTF-8', true);?>
</div>
              <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<h3','<h3 class="page-info__title"'),'<ul','<ul class="page-info__list"'),'<li','<li class="page-info__item"');?>

            </div>
            <div class="tags">
              <div class="tags__content">
                
                                <div class="tags__social">
                  <div class="btn_wrap__social">
                    <span class="__social">Share</span>
                    <div class="container__social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>                        
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Видео Блок -->

        <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'getFrom'=>'gallery'),$_smarty_tpl);?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'item', false, 'key', 'articleImg', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
           
            <?php if ($_smarty_tpl->tpl_vars['item']->value['description'] == 'video') {?>
           
              <div class="info-video padd">
                <div class="container">

                    
                    <div class="info-video__center bg-img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);">
                    
                    <a data-fancybox href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                      <button class="info-video__btn"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/youtube.svg" alt=""></button>
                   </a>
                  </div>
                </div>
              </div>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="text__block">
          <div class="container">
              <div class="text__block-content">
                 <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content_two'],'<h2','<h2 class="page-info__title"');?>

              </div>
           
          </div>
         
      </div>
      <section class="preview padd-secondary">
        <div class="container">
          <div class="preview__inner">
            <div class="preview__content">
              <?php echo smarty_function_fetch_section(array('assign'=>'akfaGroup','section'=>836),$_smarty_tpl);?>

                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['akfaGroup']->value['summary'],'<h2','<h2 class="preview__content-title"');?>

            </div>
          </div>
        </div>
      </section>

      <!-- aritcles-->
      <div class="info-arcticles info-arcticles__padd">
        <div class="container">
          <div class="info-arcticles__wrapper">
            <h2 class="info-arcticles__nav">Рекомендуемые статьи</h2>
            <div class="info-arcticles__inner">
               <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>3,'noSubsections'=>true),$_smarty_tpl);?>

                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="info-arcticles__body">
                    <div class="info-arcticles__body-image">
                      <div class="info-arcticles__body-img">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="">
                      </div>
                    </div>
                    <h3 class="info-arcticles__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

                     <button class="info-arcticles__btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее<span class="icon-arrow-short-right"></span></button>
                  </a>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
