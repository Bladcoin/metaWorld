<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-31 12:08:52
  from 'C:\xampp\htdocs\themes\dist\templates\section-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b4b5b4b07bc5_54387024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7745749995370e63009a988c7e95c3f0bf9bded9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-product.tpl',
      1 => 1622445007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b4b5b4b07bc5_54387024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender('file:section-about-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<!-- MAIN -->
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
			  	  <li class="active"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>

			  	</ol>
				</div>
			</div>

			<div class="product">
				<div class="container p-v-md">
					<div class="row">
						<div class="carousel-article col-md-6 p-h-15 m-v-30">
						  <div class="carousel carousel-main">
						  	<?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'orderBy'=>$_smarty_tpl->tpl_vars['sImages']->value['field'],'order'=>'DESC','getFrom'=>'gallery'),$_smarty_tpl);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>

						    <div class="carousel-cell">

						      <div class="img-content">

						        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" data-fancybox="product">

						          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
						        
						        </a>
						      
						      </div>

						    </div>

						    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						    
						  </div>
						  <div class="carousel carousel-nav">

						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>

						    <div class="carousel-cell">
						      <div class="img-content">
						        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
						      </div>
						    </div>

						   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						    
						    
						  </div>
						</div>

						<div class="product-content parag-gray col-md-6 p-h-15 m-v-30">
							
							<form>
								<div class="info-content">
									<p>Категория: <b class="color-1">Двуспальные кровати</b></p>
									<div class="align-center">
										<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
										<span class="instock">В наличии</span>
									</div>
									<br>
									<p>Цвет товара: <b class="color-1">Белый</b></p>
					
									<div class="align-center m-v-30">
										<p>Количество:</p>
										<div class="products-cnt-form m-h-30" data-counter="1">
											<div class="flex">
	                	  	<button type="button" class="cnt-btn minus" data-counter-btn=""><i class="fa fa-angle-left"></i></button>
	                	  	<input class="cnt-input" name="" value="2" data-counter-input="data-counter-input">
	                	  	<button type="button" class="cnt-btn plus" data-counter-btn=""><i class="fa fa-angle-right"></i></button>
											</div>
	                	</div>
	                	<span class="btn-opacity">
	                		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/" class="poxuy">Добавить в корзинку <i class="icm icm-buy"></i></a>
	                	</span>
	                </div>
                    


                   


	                <div class="text-item m-v-30">
	                	<p><b>Примечание.</b> Обращаем Ваше внимание, что текстовая информация на сайте должна быть индивидуальной, не скопированной с других интернет-ресурсов, о чем указано в рекомендациях Яндекса: «Мы стараемся не индексировать или не ранжировать высоко сайты, копирующие информацию с других ресурсов и не создающие оригинального контента или сервиса».</p>
	                </div>

	                <hr>
	                <p class="inline-middle">
	                	<i class="icm icm-info color-1 p-r-20"></i><span>Матрас и постельное белье продаются отдельно.</span>
	                </p>
	                <hr>

									<div class="productions-accordion panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="item">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#prd-1" aria-expanded="false" class="collapsed"><i class="fa fa-minus"></i>Размеры</a>
								      </h4>
									    <div id="prd-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									      <div class="panel-body text-left p-v-10 text-item">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									      </div>
									    </div>
								    </div>
									</div>

								</div>
							</form>
						</div>
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
             
            <?php echo smarty_function_fetch_section(array('assign'=>'about','section'=>915),$_smarty_tpl);?>

			<?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['about']->value['sectionId']),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['article']->value['title'] == 'about-form') {?> 
			<div class="short-order">
				<div class="container p-v-md">
					<div class="row">
						<div class="col-md-6 p-h-15 m-v-30">
							<div class="img-content">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
">
							</div>
						</div>
						<div class="col-md-6 p-h-15 m-v-30">
							
							<div class="entry-header">
								
							<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<p',"<h2 class='h1'"),'</p>','</h2>'),'<strong>',"<span class='color-1'>"),"</strong>","</span>");?>

							
							</div>

							<div class="text-item">
								<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

							</div>
						
                           
							<div class="form-content box-md-7">
								<form>
									<div class="input-content m-v-10">
										<input type="" name="" class="form-control" placeholder="Ваше имя">
									</div>
									<div class="input-content m-v-10">
										<input type="" name="" class="form-control" placeholder="Номер телефона">
									</div>
									<div class="btn-def m-v-20">
										<button type="submit">Отправить</button>
									</div>
								</form>
							</div>

						</div>

					</div>
				</div>
			</div>
			<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			


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
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
              </div>
              <div class="desc-content">
                <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
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
		
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
