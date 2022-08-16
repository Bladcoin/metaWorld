<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-31 11:52:00
  from 'C:\xampp\htdocs\themes\dist\templates\section-news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_606446406ee0f7_96925469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1a2035007db92881c359e4995d510b44f20df2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-news.tpl',
      1 => 1616412059,
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
function content_606446406ee0f7_96925469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="container-2">
                <div class="news-page other-pages">
                    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                    <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'perPage'=>8,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true,'type_content'=>'news'),$_smarty_tpl);?>

                    <div class="main-novelties">
                        <?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sectionArticles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_start = min(0, $__section_index_0_loop);
$__section_index_0_total = min(($__section_index_0_loop - $__section_index_0_start), 2);
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = $__section_index_0_start; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                            <div class="item-wrapper">
                                <div class="item">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <div class="img-content" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                                        <div class="desc-content">
                                            <h4 data-text-limit="65"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
}
}
?>
                    </div>
                     
                    <div class="all-novelties">
                        <?php
$__section_index_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sectionArticles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_1_start = min(2, $__section_index_1_loop);
$__section_index_1_total = min(($__section_index_1_loop - $__section_index_1_start), $__section_index_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_1_total !== 0) {
for ($__section_index_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = $__section_index_1_start; $__section_index_1_iteration <= $__section_index_1_total; $__section_index_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                            <div class="item-wrapper">
                                <div class="item">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <div class="img-content" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                                        <div class="desc-content">
                                            <h4 data-text-limit="46"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sectionArticles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
}
}
?>
                    </div>
                        <?php $_smarty_tpl->_subTemplateRender("file:modules/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
