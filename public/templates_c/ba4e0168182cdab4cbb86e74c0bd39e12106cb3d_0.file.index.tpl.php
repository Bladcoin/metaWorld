<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-28 14:32:51
  from 'C:\xampp\htdocs\themes\dist\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b0e2f3c18f40_33523564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4e0168182cdab4cbb86e74c0bd39e12106cb3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\index.tpl',
      1 => 1622118616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b0e2f3c18f40_33523564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.logo.php','function'=>'smarty_function_logo',),5=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
    <main data-aos="fade" data-aos-delay="0">

            <?php echo smarty_function_fetch_section(array('assign'=>'SliderOne','section'=>919),$_smarty_tpl);?>

      
      <div class="bnr-carousel">
        
        <div class="bnr-carousel-items owl-carousel owl-btn-3">
          
      <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['SliderOne']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index'];
?>
          <figure>
            <div class="container">
              <div class="desc-content">
                <div class="box-xs-10 box-lg-8 box-md-9">
                  <div class="wrapper">
                   <h1><?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['name'];?>
</h1> 
                   <?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['summary'];?>

                    <span class="btn-def m-v-30">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['dop'];?>
<i class="icm icm-arrow-pointing-to-right"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
                        <div class="img-content">
              <div class="bg-shadow"></div>
              <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['images']['original']['url'];?>
);"></div>
            </div>
          </figure>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
        
        <div class="link-video">
          <div class="cap-content">
            <div class="m-r-40">

              <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['summary']),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <h1><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']);?>
</h1>
              <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
                        <div>
              <a href="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<p>',''),"</p>",'');?>
" class="link-play"><i class="fa fa-play"></i></a>
            </div>

          </div>
        </div>
                <div class="link-down">
          <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_URL']->value;?>
/#short-about" data-scroll><i class="icm icm-scroll"></i></a>
        </div>
      </div>
      
      <div class="lines">
        <div class="container">
          <div class="wrapper"><span></span><span></span><span></span><span></span></div>
        </div>
      </div>

      <?php echo smarty_function_fetch_section(array('assign'=>'catalog','section'=>916),$_smarty_tpl);?>

            <div class="short-catalog" id="short-catalog">
        <span class="text-swing"><?php echo $_smarty_tpl->tpl_vars['catalog']->value['name'];?>
</span>
        <div class="container p-v-md">
          <div class="row">
            <div class="entry-header col-md-4 p-h-15 m-v-30">
              <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['catalog']->value['summary']),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <h2 class="h1"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['code'],"<p>",''),"</p>",'');?>
</h2>
              <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              <span class="btn-opacity btn-icon m-v-20">
              <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['catalog']->value['content']),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a href="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']);?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']);?>
<i class="fa fa-angle-right"></i></a>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </span>

            </div>
            <div class="carousel-content col-md-8 p-h-15 m-v-30">
                            <div class="short-catalog-items boxes-2 owl-carousel owl-btn-3">

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
              <a href="<?php echo $_smarty_tpl->tpl_vars['slides']->value['url'];?>
">
                <div class="wrapper">
                    <div class="img-content">
                      <div class="img" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['slides']->value['images']['original']['url'];?>
);"></div>
                    </div>
                    <div class="desc-content">
                      <h4><?php echo $_smarty_tpl->tpl_vars['slides']->value['name'];?>
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
        </div>        
      </div>

            <?php echo smarty_function_fetch_section(array('assign'=>'about','section'=>915),$_smarty_tpl);?>

      <div class="short-about" id="short-about">
        <div class="container p-v-30">
          <div class="block-img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['THEME_URL']->value;?>
/img/other/short-about.png">
          </div>
          <div class="info-items parag-gray boxes-3 p-b-30">
            <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['about']->value['summary']),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, NULL, 'breackets', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['total'];
?>
             <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breackets']->value['last'] : null)) {?> 
             <div class="cell">
              <div class="entry-header">
                <?php echo smarty_function_logo(array(),$_smarty_tpl);?>

                <h2 class="h1"><?php echo $_smarty_tpl->tpl_vars['about']->value['dop'];?>
</h2>
              </div>
              <h4><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['code'],'<p>',''),'</p>',''),'<strong>',"<span class=color-1>"),'</strong>','</span>');?>
</h4>
              <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

             </div>
             <?php continue 1;?>
             <?php }?>
            <div class="cell">
              <h4><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['code'],'<p>',''),'</p>',''),'<strong>',"<span class=color-1>"),'</strong>','</span>');?>
</h4>
              <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
          </div>
        </div>
      </div>
      

      <div class="short-assort">
        <div class="container p-v-md">
          <div class="entry-header m-v-30">
            <div class="flex">
              <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['catalog']->value['content_two']),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

              <h2 class="h1"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['code'],'<p>',''),'</p>','');?>
</h2>
              
                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<strong>','<span class="h1 active assort-home">'),'</strong>','</span>'),"<em>",'<a href="javascript:;" toggle-assort-btn><i class="fa fa-exchange" icon="exchange"></i></a><span class="h1 assort-office">'),"</em>",'</span>'),'<p>','<div class="toggle-assort">'),'</p>','</div>');?>

              

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['catalog']->value['section_icon'];?>
</p>
          </div>
                    <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['catalog']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index'];
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['first'] : null)) {?>
          <div class="tabs-content assort-<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['dop'];?>
 active">
          <?php } else { ?>
          <div class="tabs-content assort-<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['dop'];?>
">
          <?php }?>
            <div class="assort-catalog">
              <div class="h1"><?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['section_icon'];?>
</div>
              <ul class="assort-list" role="tablist">
              
                <?php echo smarty_function_fetch_sections(array('assign'=>'catalogLink','from'=>$_smarty_tpl->tpl_vars['subcatalog']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogLink']->value, 'link', false, NULL, 'catalogLink', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['index'];
?>

                <li><a href="#assort-<?php echo $_smarty_tpl->tpl_vars['link']->value['dop'];?>
" data-toggle="tab"><i class="<?php echo $_smarty_tpl->tpl_vars['link']->value['section_icon'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['link']->value['name'];?>
</a></li>
       
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              </ul>
            </div>
            
          

             
            <div class="tab-content">
            <?php echo smarty_function_fetch_sections(array('assign'=>'catalogLink','from'=>$_smarty_tpl->tpl_vars['subcatalog']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogLink']->value, 'link', false, NULL, 'catalogLink', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['index'];
?>


              <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_catalogLink']->value['first'] : null)) {?>
              <div class="tab-pane fade in active" id="assort-<?php echo $_smarty_tpl->tpl_vars['link']->value['dop'];?>
">
              <?php } else { ?>
              <div class="tab-pane fade in " id="assort-<?php echo $_smarty_tpl->tpl_vars['link']->value['dop'];?>
">
              <?php }?>

                <div class="pane-wrapper">

                  <div class="products-items owl-carousel owl-btn-2 boxes-3 m-v-30">
                    <?php echo smarty_function_fetch_sections(array('assign'=>'sliderSlide','from'=>$_smarty_tpl->tpl_vars['link']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliderSlide']->value, 'slide', false, NULL, 'sliderSlide', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>

                    <figure>

                      <a href="">
                        <div class="wrapper">
                          <div class="img-content">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['images']['original']['url'];?>
">
                          </div>
                          <div class="desc-content">
                            <h4><?php echo $_smarty_tpl->tpl_vars['slide']->value['name'];?>
</h4>

                            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['summary'],'<p>','<p data-text-limit="60">');?>

                          
                          </div>
                        </div>
                      </a>

                    </figure>
                    
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>

                </div>
              </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

             
          </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </div>
      </div>
      
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
                
                <a href="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['content2']);?>
" download><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary2'],"<p>",''),'</p>','<i class="icm icm-arrow-pointing-to-right"></i>'),'<em>','<thin>'),'</em>','</thin>');?>
</a>

              </span>
            </div>
            <div class="img-content col-md-7">
              <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['images']['original']['url'];?>
">
            </div>
          </div>
        </div>
      </div>
      <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            <?php echo smarty_function_fetch_section(array('assign'=>'sliderTwo','section'=>950),$_smarty_tpl);?>

      <div class="newproducts">
        <div class="container p-v-md">
          <div class="entry-header m-v-30">

            <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['sliderTwo']->value['summary'],"<strong>",'<span class="color-1">'),'</strong>','</span>'),'<p>','<h2 class="h1">'),'</p>','</h2>');?>


          </div>
          <div class="products-items boxes-4 m-v-30 owl-dots-1 owl-carousel">

            <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['sliderTwo']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_catalogSections']->value['index'];
?>

            <figure>
              <div class="wrapper">
                <a href="<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['url'];?>
" data-fancybox>
                  <div class="img-content">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['images']['original']['url'];?>
">
                    <div class="zoomfake">
                      <div class="border-square">
                        <i class="icm icm-prew"></i>
                        <i class="icm icm-prew"></i>
                        <i class="icm icm-prew"></i>
                        <i class="icm icm-prew"></i>
                      </div>
                      <i class="icm icm-zoom-in"></i>
                    </div>
                  </div>
                </a>
                <div class="desc-content">
                  <a href="">
                    <h4><?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['name'];?>
</h4>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['subcatalog']->value['summary'],"<p>",'<p data-text-limit="60">');?>

                  </a>
                </div>
              </div>
            </figure>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </div>
        </div>
      </div>
    
            <?php echo smarty_function_fetch_section(array('assign'=>'about','section'=>956),$_smarty_tpl);?>

      <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['about']->value['sectionId']),$_smarty_tpl);?>

      
      <div class="short-advantages">
        <div class="container p-v30">
          <div class="short-advantages-items boxes-4 serried m-v-30">
            
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>

            <figure>
              <div class="img-content">
                <i class="<?php echo $_smarty_tpl->tpl_vars['article']->value['alias'];?>
"></i>
              </div>
              <div class="desc-content">
                <h4><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h4>
                <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<p>',''),"</p>",'');?>

              </div>
            </figure>

          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
      <br><br><br><br>

    </main>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
