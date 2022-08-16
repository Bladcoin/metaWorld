<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 14:26:43
  from 'C:\xampp\htdocs\themes\dist\templates\section-clients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60af900307ddb9_60714285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce51311f201836daab609c4823c24d83ebd6c960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-clients.tpl',
      1 => 1621861659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60af900307ddb9_60714285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_articles.php','function'=>'smarty_function_images_articles',),));
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

			<div class="clients">
				<div class="container">
					<div class="clients-items text-item figure-m-v-45">

					<?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>
                    
                     <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['subcatalog']->value['sectionId']),$_smarty_tpl);?>

                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>

						<figure>
							<div class="wrapper">
								<div class="img-content">
									<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
">
								</div>
								<div class="desc-content">
									<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
									<?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

								</div>
							</div>
							<div class="productions-accordion panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="item">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#prd-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" aria-expanded="false" class="collapsed"><i class="fa fa-minus"></i>Фотоотчёт</a>
						      </h4>
							    <div id="prd-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="panel-collapse collapse" aria-expanded="false" >
							      <div class="panel-body p-v-10">
											<div class="gallery-items boxes-4">

												<?php echo smarty_function_images_articles(array('getFrom'=>'articles','assign'=>'articleImages','articleId'=>$_smarty_tpl->tpl_vars['article']->value['articleId']),$_smarty_tpl);?>

												
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleImages']->value, 'articleImage');
$_smarty_tpl->tpl_vars['articleImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['articleImage']->value) {
$_smarty_tpl->tpl_vars['articleImage']->do_else = false;
?>

												<div class="cell">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" data-fancybox="prd-1">
														<div class="img" style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['articleImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
');"></div>
													</a>
												</div>
												
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												
											</div>	
							      </div>
							    </div>
						    </div>
							</div>
						</figure>
						
					   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					
						
						
					</div>
					<div class="pagination-div p-b-40 text-center">
					  <ul class="pagination">
					    <li><a href=""><i class="fa fa-angle-left"></i></a></li>
					    <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'status'=>'visible'),$_smarty_tpl);?>

					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>
					    <li><a href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					    <li><a href=""><i class="fa fa-angle-right"></i></a></li>
					  </ul>
					</div>
					<br>
				</div>
			</div>
          
		</main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
