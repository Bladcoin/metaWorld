<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-17 12:49:11
  from 'C:\xampp\htdocs\themes\dist\templates\subsection-sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6051ecb7bba4f2_92707012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8364a2c80e98ba8ebcc7ee0359d6419198ba7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\subsection-sort.tpl',
      1 => 1615976838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6051ecb7bba4f2_92707012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="container-2">
                <?php echo smarty_function_fetch_section(array('assign'=>'preporates','section'=>882),$_smarty_tpl);?>

                <div class="products-page other-pages">
                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preporates']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>886,'status'=>'visible'),$_smarty_tpl);?>

                <div class="letter-filter">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>
                    <button <?php if ($_smarty_tpl->tpl_vars['section']->value['sectionId'] == $_smarty_tpl->tpl_vars['subcatalog']->value['sectionId']) {?>class="active"<?php }?> onclick="document.location='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
'"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</button>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
          <div class="other-filters">
            <div class="search-filter">
              <input type="text" name="search" placeholder="Название препарата">
              <button>
                <i class="icon-search"></i>
              </button>
            </div>
            <?php echo smarty_function_fetch_sections(array('assign'=>'catalogSections','from'=>882,'status'=>'visible'),$_smarty_tpl);?>

            <div class="type-filter">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogSections']->value, 'subcatalog', false, NULL, 'catalogSections', array (
));
$_smarty_tpl->tpl_vars['subcatalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcatalog']->value) {
$_smarty_tpl->tpl_vars['subcatalog']->do_else = false;
?>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"class="active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="main-filter">
              <p>Сортировать</p>
              <select class="js-select">
                <option>Название (А - Я)</option>
                <option>Название (А - Я)</option>
              </select>
            </div>
          </div>
          <div class="main-content">
            <div class="items">

              <div class="item-wrapper">
                <div class="item">
                  <div class="img-content" style="background-image: url(img/prod1.jpg);"></div>
                  <div class="desc-content">
                    <h4>Alleva</h4>
                    <p>Сироп</p>
                    <p><b>Гастроэнтерология</b></p>
                  </div>
                  <div class="special-btn">
                    <a href="product-article.html">Подробнее</a>
                  </div>
                </div>
              </div>
        
            </div>
            <div class="page-numbers">
              <ul>
                <li><a href="" class="prev-btn"><i class="icon-arrow"></i></a></li>
                <li class="active"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="" class="next-btn"><i class="icon-arrow"></i></a></li>
              </ul>
            </div>
          </div>
                </div>
            </div>
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
