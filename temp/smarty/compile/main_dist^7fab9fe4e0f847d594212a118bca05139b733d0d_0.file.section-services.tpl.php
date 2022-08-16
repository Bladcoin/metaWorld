<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-08 06:50:00
  from 'C:\xampp\htdocs\themes\dist\templates\section-services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa7870818afb8_66947536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fab9fe4e0f847d594212a118bca05139b733d0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-services.tpl',
      1 => 1604774629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa7870818afb8_66947536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
        <div class="breadcrumb-container">
            <div class="container">
              <ol class="breadcrumb font-w-6">
                <li  class="active"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
">Главная</a></li>
                <li ><a href="services.html">Услуги</a></li>
              </ol>
            </div>
        </div>  
        <section class="team_top services_top">
                <div class="container ">
                    <h2>Что мы предлагаем</h2>
                    <span>Предоставление высококачественной юридической помощи, а также постоянная поддержка высоких стандартов при оказании услуг и работе над каждым проектом</span>
                </div>
        </section>
        <div class="services_bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/offers_bg.png);">
            <section class="services_main">
                <div class="container">
                    <div class="row">
                        <div class="services_items col-md-3">
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmcredit-card"></span>  
                                      <h3>Банкротство</h3>
                                      <p>Юридическое сопровождение процедуры банкротства юридического лица</p>
                                </div>
                            </a>
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmbrokerage"></span>  
                                      <h3>Антимонопольное право</h3>
                                      <p>В этом блоке мы рекомендуем разместить информацию</p>
                                </div>
                            </a>
                        </div>
                        <div class="services_items col-md-3">
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmtax"></span>  
                                      <h3>Корпоративное право</h3>
                                      <p>Разрешение споров в области корпоративных отношений</p>
                                </div>
                            </a>
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icmboxes"></span>  
                                      <h3>Таможенное право и внешняя торговля</h3>
                                      <p>В этом блоке мы рекомендуем разместить информацию</p>
                                </div>
                            </a>
                        </div>
                        <div class="services_items col-md-3">
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmhouse"></span>  
                                      <h3>Недвижимость</h3>
                                      <p>Консультации и представительство в судах частных клиентов в области жилищного законодательства.</p>
                                </div>
                            </a>
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmcontract"></span>  
                                      <h3>Трудовое право</h3>
                                      <p>В этом блоке мы рекомендуем разместить информацию</p>
                                </div>
                            </a>
                        </div>
                        <div class="services_items col-md-3">
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmanalysis"></span>  
                                      <h3>Банковское и финансовое право </h3>
                                      <p>Абонентское юридическое обслуживание юридических лиц</p>
                                </div>
                            </a>
                            <a href="services-article.html">
                                <div class="services_item">
                                      <span class="icm icmlaw"></span>  
                                      <h3>Судопроизводство</h3>
                                      <p>В этом блоке мы рекомендуем разместить информацию</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
