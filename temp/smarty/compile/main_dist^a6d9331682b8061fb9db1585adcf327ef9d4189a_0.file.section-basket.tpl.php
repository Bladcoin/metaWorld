<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 12:34:29
  from 'C:\xampp\htdocs\themes\dist\templates\section-basket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60af75b53e8f57_99761946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d9331682b8061fb9db1585adcf327ef9d4189a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-basket.tpl',
      1 => 1622028756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:section-about-header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60af75b53e8f57_99761946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
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

			<div class="basket">
				<div class="container p-b-40">
					<div class="row">
						<div class="form-content col-md-6 p-h-15 m-v-30">
							<div class="entry-header parag-gray">
								<?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['summary']),$_smarty_tpl);?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<h1><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
</h1>
								<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							<form>
								<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h4>

								<div class="row">
									<div class="input-content col-md-12 p-h-15 m-v-10">
										<input type="text" name="" class="form-control" placeholder="*Ваше имя" required>
									</div>
									<div class="input-content col-md-6 p-h-15 m-v-10">
										<input type="text" name="" class="form-control" placeholder="*Телефон:" required>
									</div>
									<div class="input-content col-md-6 p-h-15 m-v-10">
										<input type="email" name="" class="form-control" placeholder="Эл. почта:">
									</div>
									<div class="input-content col-md-12 p-h-15 m-v-10">
										<input type="text" name="" class="form-control" placeholder="*Адрес доставки:" required>
									</div>
								</div>
								
								<br>
								<span class="btn-def">
									<button type="submit">Отправить</button>
								</span>

							
							</form>
						</div>

						<div class="items-content col-md-5 col-md-offset-1 p-h-15 m-v-30">
							<h4>Ваш заказ:</h4>
							<br>
							<div class="mbasket-items figure-m-v-5 m-v-30">
                              								<figure>
									<a href="" class="link-close"><i class="icm icm-close"></i></a>
									<div class="img-content">
										<img src="img/other/products-item-1.jpg">
									</div>
									<div class="desc-content">
										<p data-text-limit="25">Пример названия</p>
										<p>1 x <b>750,000 сум</b></p>
									</div>
								</figure>

							</div>
						</div>
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
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
              </div>
              <div class="desc-content">
                <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

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
