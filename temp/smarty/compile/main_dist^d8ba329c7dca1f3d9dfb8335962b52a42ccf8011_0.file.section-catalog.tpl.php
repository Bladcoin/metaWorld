<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-31 12:06:42
  from 'C:\xampp\htdocs\themes\dist\templates\section-catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b4b532c6a363_61567876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ba329c7dca1f3d9dfb8335962b52a42ccf8011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-catalog.tpl',
      1 => 1622031625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b4b532c6a363_61567876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
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
			  	  <li class="active"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
			  	</ol>
				</div>
			</div>


			<div class="catalog">
				<div class="container">
					<div class="row">
						<?php echo smarty_function_fetch_section(array('assign'=>'carts','section'=>958),$_smarty_tpl);?>

						<?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['carts']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>

						<div class="col-md-6 p-h-15 m-v-30">

							<figure>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
									<div class="wrapper" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/'img/other/catalog-2-bg.jpg');">
										<div class="desc-content">
											<h1 class="h-style-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
											<?php echo $_smarty_tpl->tpl_vars['subcatalog']->value['summary'];?>

										</div>
										<div class="img-content">
											<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" > 
										</div>
									</div>
								</a>
							</figure>

						</div>
                        
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>
				</div>
			</div>


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
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>

            <figure>
              <div class="wrapper">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" data-fancybox>
                  <div class="img-content">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
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
                    <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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


			<br><br><br><br>
	        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId']),$_smarty_tpl);?>

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
