<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-31 12:08:48
  from 'C:\xampp\htdocs\themes\dist\templates\section-cart-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b4b5b0c66923_61654756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d6e1af54279a88d105dbc464cccc797bcada94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-cart-one.tpl',
      1 => 1622114217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b4b5b0c66923_61654756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:section-about-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main data-aos="fade" data-aos-delay="0">


      <!-- Хлебные крошки -->
      <div class="breadcrumb-container">
        <div class="container">
          <ol class="breadcrumb">
           <?php echo smarty_function_fetch_section(array('assign'=>'main','section'=>1),$_smarty_tpl);?>

            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php echo smarty_function_fetch_section(array('assign'=>'catalog','section'=>916),$_smarty_tpl);?>

            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <li class="active"><a href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
          </ol>
        </div>
      </div>


      <div class="catalog-article">
        <div class="container ">
          <div class="entry-header text-center m-v-30">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['catalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="link-back"><i class="icm icm-prew"></i></a>
            
            <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['content']),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <h1><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['code'],"<strong>","<span class='color-1'>"),"</strong>","</span>");?>
</h1>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
          </div>
          <br>
          <div class="short-catalog-items boxes-4 figure-m-v-15 m-v-30">

            <?php echo smarty_function_fetch_sections(array('assign'=>'categories','from'=>$_smarty_tpl->tpl_vars['catalog']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie', false, NULL, 'categories', array (
));
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
             <?php if ($_smarty_tpl->tpl_vars['categorie']->value['content'] == '<p>slider</p>') {?>
             <?php echo smarty_function_fetch_sections(array('assign'=>'linkInSlide','from'=>$_smarty_tpl->tpl_vars['categorie']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkInSlide']->value, 'slides', false, NULL, 'linkInSlide', array (
));
$_smarty_tpl->tpl_vars['slides']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slides']->value) {
$_smarty_tpl->tpl_vars['slides']->do_else = false;
?>

            <figure>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slides']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="wrapper">
                    <div class="img-content">
                      <div class="img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slides']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                    </div>
                    <div class="desc-content">
                      <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slides']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                    </div>
                </div>
              </a>
            </figure>
            
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

             <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>


      <br><br><br><br>
      <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['catalog']->value['sectionId']),$_smarty_tpl);?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['article']->value['alias'] == 'download') {?>
      <div class="short-catalogdown">
        <div class="container">
          <div class="align-center">
            <div class="entry-header col-md-5">
              <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<strong>','<span class="color-1">'),'</strong>','</span>'),'<p>','<h2 class="h1">'),"</p>","</h2>");?>

                            <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['content'],'<strong>','<span class="color-1">'),'</strong>','</span>'),'<p>','<h4>'),"</p>","</h4>");?>


              <span class="btn-def m-v-30">
                
                <a href="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['content2']), ENT_QUOTES, 'UTF-8', true);?>
" download><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary2'],"<p>",''),'</p>','<i class="icm icm-arrow-pointing-to-right"></i>'),'<em>','<thin>'),'</em>','</thin>');?>
</a>

              </span>
            </div>
            <div class="img-content col-md-7">
              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
">
            </div>
          </div>
        </div>
      </div>
      <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      

    </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
