<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 11:51:52
  from 'C:\xampp\htdocs\themes\dist\templates\section-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6064463834c713_64616050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24399f05f3624df74d1201e394fa99271df519d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-products.tpl',
      1 => 1616502563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6064463834c713_64616050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_sections.php','function'=>'smarty_function_fetch_sections',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
if ($_GET['letter']) {?>
    <?php $_smarty_tpl->_assignInScope('letter', $_GET['letter']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('letter', 'А');
}?>

<?php 
//<?
if ($_GET['order']) {
    $order = 'title '.$_GET['order'];
} else {
    $order = 'title ASC';
}
$_smarty_tpl->assign('order',$order);
?>

<main>
        <form id="formProds">
            <div class="container-2">
                <div class="products-page other-pages">
                    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                        <div class="letter-filter">
                            <input type="hidden" name="letter" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['letter']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                             <button value="А" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'А') {?> active<?php }?>">А</button>
                             <button value="Б" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Б') {?> active<?php }?>">Б</button>
                             <button value="В" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'В') {?> active<?php }?>">В</button>
                             <button value="Г" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Г') {?> active<?php }?>">Г</button>
                             <button value="Д" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Д') {?> active<?php }?>">Д</button>
                             <button value="Е" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Е') {?> active<?php }?>">Е</button>
                             <button value="Ё" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ё') {?> active<?php }?>">Ё</button>
                             <button value="Ж" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ж') {?> active<?php }?>">Ж</button>
                             <button value="З" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'З') {?> active<?php }?>">З</button>
                             <button value="И" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'И') {?> active<?php }?>">И</button>
                             <button value="Й" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Й') {?> active<?php }?>">Й</button>
                             <button value="К" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'К') {?> active<?php }?>">К</button>
                             <button value="Л" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Л') {?> active<?php }?>">Л</button>
                             <button value="М" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'М') {?> active<?php }?>">М</button>
                             <button value="Н" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Н') {?> active<?php }?>">Н</button>
                             <button value="О" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'О') {?> active<?php }?>">О</button>
                             <button value="П" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'П') {?> active<?php }?>">П</button>
                             <button value="Р" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Р') {?> active<?php }?>">Р</button>
                             <button value="С" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'С') {?> active<?php }?>">С</button>
                             <button value="Т" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Т') {?> active<?php }?>">Т</button>
                             <button value="У" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'У') {?> active<?php }?>">У</button>
                             <button value="Ф" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ф') {?> active<?php }?>">Ф</button>
                             <button value="Х" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Х') {?> active<?php }?>">Х</button>
                             <button value="Ц" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ц') {?> active<?php }?>">Ц</button>
                             <button value="Ч" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ч') {?> active<?php }?>">Ч</button>
                             <button value="Ш" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ш') {?> active<?php }?>">Ш</button>
                             <button value="Э" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Э') {?> active<?php }?>">Э</button>
                             <button value="Ю" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Ю') {?> active<?php }?>">Ю</button>
                             <button value="Я" class="letterChoice<?php if ($_smarty_tpl->tpl_vars['letter']->value == 'Я') {?> active<?php }?>">Я</button>
                      </div>

          <div class="other-filters">
            <div class="search-filter">
              <input type="text" name="search" value="<?php echo htmlspecialchars($_GET['search'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Название препарата">
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
" <?php if ($_smarty_tpl->tpl_vars['section']->value['sectionId'] == $_smarty_tpl->tpl_vars['subcatalog']->value['sectionId']) {?> class="active" <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcatalog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="main-filter">
              <p>Сортировать</p>
              <select name="order" class="js-select">
                <option value="ASC"<?php if ($_smarty_tpl->tpl_vars['order']->value == 'title ASC') {?> selected="true"<?php }?>>Название (А - Я)</option>
                <option value="DESC"<?php if ($_smarty_tpl->tpl_vars['order']->value == 'title DESC') {?> selected="true"<?php }?>>Название (Я - А)</option>
              </select>
            </div>
          </div>
          </form>

          <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','query'=>$_GET['search'],'section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'perPage'=>16,'orderBy'=>$_smarty_tpl->tpl_vars['order']->value,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true,'letter'=>$_smarty_tpl->tpl_vars['letter']->value),$_smarty_tpl);?>

          <div class="main-content">
            <div class="items">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['article']->value['avail'] == true) {?>
                  <div class="item-wrapper">
                    <div class="item">
                      <div class="img-content" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                      <div class="desc-content">
                        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                        <p><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['tags'], ENT_QUOTES, 'UTF-8', true);?>
</b></p>
                      </div>
                      <div class="special-btn">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
                      </div>
                    </div>
                  </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
             <?php $_smarty_tpl->_subTemplateRender("file:modules/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
                </div>
            </div>
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
