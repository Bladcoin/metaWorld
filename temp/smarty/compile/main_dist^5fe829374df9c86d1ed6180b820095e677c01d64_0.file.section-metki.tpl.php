<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 08:16:49
  from 'C:\xampp\htdocs\themes\dist\templates\section-metki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd862e1e78cb6_38095992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fe829374df9c86d1ed6180b820095e677c01d64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-metki.tpl',
      1 => 1608016385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-articles.tpl' => 1,
    'file:modules/pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd862e1e78cb6_38095992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
//<?
$query     = getRequestVar('query');

if (!$query) {
    header('Location: /');
}
$_smarty_tpl->_subTemplateRender("file:header-articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
    <section class="metki padd-sect ">
      <div class="container">
        <div class="metki__wrapper">
          <h2 class="metki__nav-title">Все статьи с меткой <b>«<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8', true);?>
»:</b></h2>
          <div class="metki__inner">
            <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','perPage'=>6,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true,'tag'=>$_GET['query']),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="metki__body">
              <div class="metki__body-image">
                <div class="metki__body-img">
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>
              </div>
              <h3 class="metki__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
              <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

               <button class="metki__btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее<span class="icon-arrow-short-right"></span></button>
            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
          </div>
          <?php $_smarty_tpl->_subTemplateRender("file:modules/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>
      
      
    </section>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
