<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 10:28:11
  from 'C:\xampp\htdocs\themes\dist\templates\section-razvitie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd881abf2bea5_64575295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74de07a38fdba1de52d6a5d5f51a5061f3d89037' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-razvitie.tpl',
      1 => 1608020871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/article-small.tpl' => 3,
    'file:modules/article-big.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd881abf2bea5_64575295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
<?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'getFrom'=>'gallery'),$_smarty_tpl);?>

   <div class="intro bg-img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);">
    <div class="container">
      <div class="intro__inner">
        <div class="desc">
          <div class="intro__content-main padd">
            <h2 class="intro__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
            <?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>

          </div>
        </div>
      </div>
    
    </div>
   </div>
<?php echo smarty_function_fetch_section(array('assign'=>'razvitie','section'=>832),$_smarty_tpl);?>

   <section class="articles padd-sect">
     <div class="container">
       <h2 class="title__nav">Актуальное</h2>
      <div class="articles__inner">
        <div class="articles__content-small">
        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['razvitie']->value['sectionId'],'limit'=>3),$_smarty_tpl);?>


          <?php if ($_smarty_tpl->tpl_vars['sectionArticles']->value[1]) {?>
             <?php $_smarty_tpl->_subTemplateRender("file:modules/article-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['sectionArticles']->value[1]), 0, false);
?>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['sectionArticles']->value[2]) {?>
             <?php $_smarty_tpl->_subTemplateRender("file:modules/article-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['sectionArticles']->value[2]), 0, true);
?>
          <?php }?>
          
        </div>
        <div class="articles__content-big">
          <?php $_smarty_tpl->_subTemplateRender("file:modules/article-big.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['sectionArticles']->value[0]), 0, false);
?>
        </div>
      </div>
     </div>
   </section>

   <?php echo smarty_function_fetch_section(array('assign'=>'seminar','section'=>842),$_smarty_tpl);?>

   <section class="info bg-img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seminar']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
    <div class="container">
      <div class="info__inner">
        <div class="info__content">
          <h3 class="info__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seminar']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
          <h2 class="info__subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seminar']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
          <?php echo $_smarty_tpl->tpl_vars['seminar']->value['summary'];?>

          <?php echo smarty_function_fetch_section(array('assign'=>'seminar','section'=>842),$_smarty_tpl);?>

          <a class="info__btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seminar']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Узнайте подробности направления<span class="icon-arrow-short-right"></span></a>
        </div>
      </div>
    </div>
   </section>


   <section class="articles-swap padd-sect">
    <div class="container">
     <div class="articles__inner">
      <div class="articles__content-big">
        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['seminar']->value['sectionId'],'limit'=>3),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['sectionArticles']->value[0]) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:modules/article-big.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['sectionArticles']->value[0]), 0, true);
?>
        <?php }?>
      </div>
       <div class="articles__content-small">
         <?php if ($_smarty_tpl->tpl_vars['sectionArticles']->value[1]) {?>
             <?php $_smarty_tpl->_subTemplateRender("file:modules/article-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['sectionArticles']->value[1],'right'=>true), 0, true);
?>
         <?php }?>
       </div>
     </div>
    </div>
    </section>
    
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
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
