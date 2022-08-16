<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-31 12:09:11
  from 'C:\xampp\htdocs\themes\dist\templates\section-range.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b4b5c71f3d58_11825556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3db9babc2b826f2711977c4473f0754c9bf1734' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-range.tpl',
      1 => 1622455748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b4b5c71f3d58_11825556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:section-about-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<main data-aos="fade" data-aos-delay="0">


			<!-- Хлебные крошки -->
			<div class="breadcrumb-container">
				<div class="container">
			  	<ol class="breadcrumb">
			  	 <?php echo smarty_function_fetch_section(array('assign'=>'main','section'=>1),$_smarty_tpl);?>

			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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


<?php echo smarty_function_fetch_sections(array('assign'=>'slides','from'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>


			<div class="type">
				<div class="container">
					<div class="entry-header">
						<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
					</div>
					<div class="entry-content m-v-30">
						<div class="sortpanel">

							
							<?php echo smarty_function_fetch_section(array('assign'=>'range','section'=>973),$_smarty_tpl);?>

                            <p><span class='color-1'><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['slides']->value), ENT_QUOTES, 'UTF-8', true);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</p>

							<div class="flex-adaptive">
								<div class="input-content">

									<p>Сортировать по:</p>
									<select class="js-select">
										<option>6</option>
										<option>12</option>
										<option>18</option>
									</select>
								
								</div>

								<div class="input-content">
									<?php echo $_smarty_tpl->tpl_vars['range']->value['section_icon'];?>

									<select class="js-select">

                                        <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['range']->value['content_two']),$_smarty_tpl);?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
 
										<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<p>','<option>'),"</p>","</option>");?>


										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									</select>
								</div>

							</div>

						</div>

				    
						<div class="type-content">
							<div class="row">
								<div class="left-block col-md-3 p-h-15 m-v-30">
									<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['range']->value['summary']),$_smarty_tpl);?>

                                    
									<select class="js-select bg-color-gray">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									 	<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],'<p>','<option>'),'</p>','</option>');?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									
									<br><br>

									<div class="filter-color">
										<h4>Цвет:</h4>
										<br>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-1">
											<label for="filter-color-1" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle">Белый <span class="color-1">(5)</span></span>
											</label>
										</div>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-2">
											<label for="filter-color-2" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle dicolor">Коричневый <span class="color-1">(0)</span></span>
											</label>
										</div>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-3">
											<label for="filter-color-3" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle">Желтый <span class="color-1">(12)</span></span>
											</label>
										</div>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-4">
											<label for="filter-color-4" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle">Черный <span class="color-1">(22)</span></span>
											</label>
										</div>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-5">
											<label for="filter-color-5" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle">Синий <span class="color-1">(4)</span></span>
											</label>
										</div>
										<div class="input-content m-v-5">
											<input type="checkbox" name="" value="" class="hide" id="filter-color-6">
											<label for="filter-color-6" role="button">
												<span class="va-middle checkbox-style-1"></span>
												<span class="m-l-10 va-middle">Серый <span class="color-1">(9)</span></span>
											</label>
										</div>
										<div class="btn-def m-v-30">
											<button type="submit">Показать</button>
										</div>
									</div>

								</div>

								
								<div class="newproducts col-md-9 p-h-15 m-v-20">
							  	<div class="products-items boxes-3 figure-m-v-10">

                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide', false, NULL, 'slides', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                                
                                 
							  		<figure>
							  			<div class="wrapper">
						  					<a href="zzz" data-fancybox>
									  			<div class="img-content">
									  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
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
								  				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
								  					<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
								  					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['summary'],"<p>","<p data-text-limit='60'>");?>

								  				</a>
							  				</div>
						  				</div>
							  		</figure>
 
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



							  	</div>
									<div class="pagination-div m-v-30 text-center">
									  <ul class="pagination">
									    <li><a href=""><i class="fa fa-angle-left"></i></a></li>
									    <li><a href="">1</a></li>
									    <li class="active"><a href="">2</a></li>
									    <li><a href="">3</a></li>
									    <li><a href=""><i class="fa fa-angle-right"></i></a></li>
									  </ul>
									</div>
								</div>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>


			<div class="newproducts">
				<div class="container p-v-md">
					<div class="entry-header m-v-30">
						<h2 class="h1">Новинки</h2>
					</div>
			  	<div class="products-items boxes-4 m-v-30 owl-dots-1 owl-carousel">
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>
			  		<figure>
			  			<div class="wrapper">
		  					<a href="img/other/products-item-1.jpg" data-fancybox>
					  			<div class="img-content">
					  				<img src="img/other/products-item-1.jpg">
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
				  					<h4>Пример названия</h4>
				  					<p data-text-limit="60">Не больное описание продукции, пара слов </p>
				  				</a>
			  				</div>
		  				</div>
			  		</figure>

			  	</div>
				</div>
			</div>

		</main>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
