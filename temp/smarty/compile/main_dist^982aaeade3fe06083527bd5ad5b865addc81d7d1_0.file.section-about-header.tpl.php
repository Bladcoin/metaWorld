<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-31 12:09:11
  from 'C:\xampp\htdocs\themes\dist\templates\section-about-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b4b5c721fbc5_54196982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '982aaeade3fe06083527bd5ad5b865addc81d7d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-about-header.tpl',
      1 => 1621850986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/meta.tpl' => 1,
  ),
),false)) {
function content_60b4b5c721fbc5_54196982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.logo.php','function'=>'smarty_function_logo',),));
?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<?php $_smarty_tpl->_subTemplateRender("file:modules/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<link rel="shortcut icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/favicon/favicon.png">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/fonts.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/plugins.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/main.css">
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/css/additional.css">

</head>

<body>
	<!-- Скрытые формы -->
	<div class="hide">

		<div id="form_def" class="form-def">
			<div class="form-wrapper">

				<!-- form-main -->
				<div class="form-main clearfix">
					<div class="entry-header text-center parag-gray m-b-15">
						<h1>Есть вопросы?</h1>
						<p>Обращайтесь по указанному телефону или заполните форму ниже и мы с Вами свяжемся</p>
					</div>
					<div class="form-content clearfix">
						<form action="" method="get" accept-charset="utf-8">
							<div class="input-content m-v-10">
								<input type="text" name="" class="form-control" required placeholder="*Ваше имя:">
							</div>
							<div class="input-content m-v-10">
								<input type="text" name="" class="form-control" required placeholder="* Телефон:">
							</div>
							<div class="input-content m-v-10">
								<input type="text" name="" class="form-control" required placeholder="Эл. почта:">
							</div>
							<div class="btn-content text-center">
								<span class="btn-def m-v-30">
									<button type="submit">Отправить</button>
								</span>
							</div>
						</form>
					</div>
				</div>

				<!-- SUCCESS -->
				<div class="form-success hide">
					<div class="icon-content m-v-30">
						<span class="fa fa-check"></span>
					</div>
					<div class="text-center">
						<h1 align="center">Ваша заявка отправлена!</h1>
					</div>
					<div class="m-v-30 text-center">
						<span class="btn-def">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;" data-fancybox-close>Хорошо</a>
						</span>
					</div>
				</div>

			</div>
		</div>
		<div id="search_modal" class="search-modal">
			<div class="container">
				<div class="entry-header text-center">
					<div class="h1">Поиск среди <span class="color-1">640+</span> товаров</div>
					<br>
					<div class="form-content">
						<div class="input-content">
							<input type="" name="" placeholder="Введите название товара">
						</div>
					</div>
				</div>
				<br><br>
				<div class="entry-content">
					<div class="type-item">
						<div class="cap-content">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;"><div class="h1">Мягкая мебель <i class="icm icm-arrow-pointing-to-right"></i></div></a>
						</div>
				  	<div class="products-items boxes-4 figure-m-v-20">
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  	</div>
			  	</div>
			  	<div class="type-item">
						<div class="cap-content">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;"><div class="h1">Спальные наборы <i class="icm icm-arrow-pointing-to-right"></i></div></a>
						</div>
				  	<div class="products-items boxes-4 figure-m-v-20">
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  		<figure>
				  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
					  			<div class="wrapper">
						  			<div class="img-content">
						  				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
						  			</div>
						  			<div class="desc-content">
						  				<h4>Пример названия</h4>
						  				<p data-text-limit="60">Не больное описание продукции, пара слов </p>
					  				</div>
				  				</div>
				  			</a>
				  		</figure>
				  	</div>
			  	</div>
			  	<div class="h1">Ничего не найдено</div>
				</div>
			</div>
		</div>

	</div>	

	<div id="page">
		<input type="checkbox" name="" id="basket_block" class="basket-checked-input hide" tabindex="-1">

		<!-- HEADER -->
		<div class="header-hidden header-pages" id="header-hidden"></div>
		<header id="header" class="header header-scroll header-pages" data-aos="fade">



			<!-- HEADER TOP -->
			<div class="header-top">
				<div class="container-fluid-page relative">

					<div class="row">

						<div class="header-top-content">
							<div class="header-logo p-h-15">
								<?php echo smarty_function_logo(array(),$_smarty_tpl);?>

							</div>
							<div class="align-center">
								<div class="menu p-h-15 menu-uni">
									<ul class="menu-list">
                

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TREE']->value, 'navItem1', false, NULL, 'navItems1', array (
));
$_smarty_tpl->tpl_vars['navItem1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navItem1']->value) {
$_smarty_tpl->tpl_vars['navItem1']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['navItem1']->value['status'] == 'visible' && $_smarty_tpl->tpl_vars['navItem1']->value['top_menu'] == '1') {?>
                    <?php if ($_smarty_tpl->tpl_vars['navItem1']->value['dop'] == 'catalog') {?>
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<i class="fa fa-angle-down subicon"></i></a>
                    <ul class="sub-menu-1">
                      <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;">Для дома</a>
                        <div class="subtabs">
                          <div class="wrapper">
                            <div class="tabs-content">
                              <ul class="tab-list" role="tablist">
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-1" data-toggle="tab"><i class="icm icm-armchair"></i>Мягкая мебель</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-2" data-toggle="tab"><i class="icm icm-single-bed"></i>Спальные наборы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-3" data-toggle="tab"><i class="icm icm-office-chair"></i>Офисная мебель</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-4" data-toggle="tab"><i class="icm icm-tv-table"></i>Гостинные наборы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-5" data-toggle="tab"><i class="icm icm-bunk-bed"></i>Детские комнаты</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-6" data-toggle="tab"><i class="icm icm-kitchen"></i>Кухонный гарнитур</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-7" data-toggle="tab"><i class="icm icm-dining-table"></i>Столы и стулья</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-8" data-toggle="tab"><i class="icm icm-door-lock"></i>Двери</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-9" data-toggle="tab"><i class="icm icm-wardrobe"></i>Шкафы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-1-10" data-toggle="tab"><i class="icm icm-storage"></i>Разное</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade in active" id="subtabs-1-1">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="subtabs-1-2">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="subtabs-1-3">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;">Для офиса</a>
                      <div class="subtabs">
                          <div class="wrapper">
                            <div class="tabs-content">
                              <ul class="tab-list" role="tablist">
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-1" data-toggle="tab"><i class="icm icm-armchair"></i>Мягкая мебель</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-2" data-toggle="tab"><i class="icm icm-single-bed"></i>Спальные наборы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-3" data-toggle="tab"><i class="icm icm-office-chair"></i>Офисная мебель</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-4" data-toggle="tab"><i class="icm icm-tv-table"></i>Гостинные наборы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-5" data-toggle="tab"><i class="icm icm-bunk-bed"></i>Детские комнаты</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-6" data-toggle="tab"><i class="icm icm-kitchen"></i>Кухонный гарнитур</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-7" data-toggle="tab"><i class="icm icm-dining-table"></i>Столы и стулья</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-8" data-toggle="tab"><i class="icm icm-door-lock"></i>Двери</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-9" data-toggle="tab"><i class="icm icm-wardrobe"></i>Шкафы</a></li>
                                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#subtabs-2-10" data-toggle="tab"><i class="icm icm-storage"></i>Разное</a></li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane fade in active" id="subtabs-2-1">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="subtabs-2-2">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="subtabs-2-3">
                                  <div class="pane-wrapper">
                                    <div class="products-items boxes-2">
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                      <figure>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                          <div class="wrapper">
                                            <div class="img-content">
                                              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-2.jpg">
                                            </div>
                                            <div class="desc-content">
                                              <h4>Пример названия</h4>
                                              <p data-text-limit="60">Не больное описание продукции, пара слов </p>
                                            </div>
                                          </div>
                                        </a>
                                      </figure>
                                    </div>
                                    <div class="link-style-1">
                                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">
                                        <i class="fa fa-angle-right"></i>
                                        Посмотреть все
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    </li>
                    <?php continue 1;?>
                    <?php }?>
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navItem1']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  

                </ul>
								</div>
								<div class="header-btns">
									<div class="pan-icons">
										<ul class="pan-icons-list">
											<li><a href="javascript:;" data-src="#search_modal" data-fancybox><i class="icm icm-magnifying-glass"></i></a></li>
											<li class="basket-btn">
												<div class="bg"></div>
												<label for="basket_block"><i class="icm icm-buy"><span class="cnt">2</span></i></label>
											</li>
										</ul>
									</div>
								</div>
								<div class="header-lang">
									<input type="checkbox" class="hide" id="langlist">
									<label for="langlist" role="button">
										<p><span>Рус</span></p>
									</label>
									<ul class="hide-list">
										<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Eng</a></li>
										<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Uzb</a></li>
									</ul>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>

			<div class="mbasket">
				<div class="wrapper">
					<div class="mbasket-items figure-m-v-5">
						<figure>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/" class="link-close"><i class="icm icm-close"></i></a>
							<div class="img-content">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
							</div>
							<div class="desc-content">
								<p data-text-limit="25">Пример названия</p>
								<p>1 x <b>750,000 сум</b></p>
							</div>
						</figure>
						<figure>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/" class="link-close"><i class="icm icm-close"></i></a>
							<div class="img-content">
								<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/other/products-item-1.jpg">
							</div>
							<div class="desc-content">
								<p data-text-limit="25">Пример названия</p>
								<p>1 x <b>750,000 сум</b></p>
							</div>
						</figure>
					</div>
					<div class="total-price m-v-20">
						<p class="justify-c-between align-center">
							<b>Общая: </b><b>1,750,000 сум</b>
						</p>
					</div>
					<div class="btn-content text-center">
						<span class="btn-def">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/basket.html">Оставить заявку</a>
						</span>
					</div>
				</div>
			</div>
		</header>
		<div id="min-menu" data-aos="fade">
			<ul>
				<div class="pan-icons">
					<ul class="pan-icons-list">
						<li>
							<div class="header-lang">
								<input type="checkbox" class="hide" id="langlist2">
								<label for="langlist2" role="button">
									<p><span>Рус</span></p>
								</label>
								<ul class="hide-list">
									<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Eng</a></li>
									<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Uzb</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/javascript:;" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#search_modal" data-fancybox><i class="icm icm-magnifying-glass"></i></a></li>
						<li class="basket-btn"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/basket.html"><i class="icm icm-buy"><span class="cnt">2</span></i></a></li>
					</ul>
				</div>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/index.html">Главная</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/about.html">О компании</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/catalogs.html">Каталог</a>
					<ul>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Для дома</a>
							<ul class="icontext">
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-armchair"></i>Мягкая мебель</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-single-bed"></i>Спальные наборы</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-office-chair"></i>Офисная мебель</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-tv-table"></i>Гостинные наборы</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-bunk-bed"></i>Детские комнаты</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-kitchen"></i>Кухонный гарнитур</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-dining-table"></i>Столы и стулья</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-door-lock"></i>Двери</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-wardrobe"></i>Шкафы</a></li>
								<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/"><i class="icm icm-storage"></i>Разное</a></li>
							</ul>
						</li>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/">Для офиса</a></li>
					</ul>
				</li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/clients.html">Клиенты</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/contacts.html">Контакты</a></li>
			</ul>
		</div>
		<!-- MIN MENU HEADER -->
		<div class="min-menu-header hidden-md hidden-lg">
			<div class="wrapper-bg"></div>
			<div class="col-xs-8">
				<div class="min-menu-logo">
					<div>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/index.html" title="">
							<div class="img" style="background-image: url('img/logo-blacktext.png');"></div>
						</a>
					</div>	
				</div>
			</div>
			<div class="col-xs-2 justify-c-center align-center p-h-5" style="height: 70px	;">
				<div>
				</div>
			</div>
			<div class="min-menu-bar col-xs-2">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/#min-menu">
					<div class="bar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
				</a>
			</div>
		</div><?php }
}
