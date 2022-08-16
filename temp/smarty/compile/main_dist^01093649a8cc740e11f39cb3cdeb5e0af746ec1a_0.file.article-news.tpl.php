<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-23 12:35:28
  from 'C:\xampp\htdocs\themes\dist\templates\article-news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6059d28018e304_02657146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01093649a8cc740e11f39cb3cdeb5e0af746ec1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\article-news.tpl',
      1 => 1616499323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6059d28018e304_02657146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['article']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['article']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['article']->value['description']), 0, false);
?>
<main>
      <div class="container-2">
        <div class="news-article-page other-pages">
          <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
          <div class="novelty">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="desc-content">
              <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

            </div>
          </div>
          <h3>Читайте также</h3>
          <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>3,'orderBy'=>"RAND()",'skip'=>$_smarty_tpl->tpl_vars['article']->value['articleId'],'type_content'=>"news"),$_smarty_tpl);?>

          <div class="all-novelties">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
            <div class="item-wrapper">
              <div class="item">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                  <div class="img-content" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                  <div class="desc-content">
                    <h4 data-text-limit="46"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                  </div>
                </a>
              </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
      </div>
    </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
