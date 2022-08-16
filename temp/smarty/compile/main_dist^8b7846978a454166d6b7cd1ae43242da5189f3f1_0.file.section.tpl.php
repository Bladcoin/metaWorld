<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:00:52
  from 'C:\xampp\htdocs\themes\dist\templates\section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb40a4992cb1_31591180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b7846978a454166d6b7cd1ae43242da5189f3f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section.tpl',
      1 => 1603732914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/you-are-here.tpl' => 1,
    'file:modules/pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb40a4992cb1_31591180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="page-color-2 press-release-wrapper">
                <?php $_smarty_tpl->_subTemplateRender("file:modules/you-are-here.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="container-2">
                    <div class="entry-header spec-entry-header-2">
                        <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                        <div class="search-place">
                            <?php $_smarty_tpl->_assignInScope('query', $_REQUEST['query']);?>
                            <form>
                                <input type="text" name="query" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Поиск">
                                <button type="submit">
                                    <i class="icon-5"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="news">
                        <div class="row">
                            <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
                            <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'perPage'=>6,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true,'query'=>$_smarty_tpl->tpl_vars['query']->value),$_smarty_tpl);?>

                            <?php } else { ?>
                            <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'perPage'=>6,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true),$_smarty_tpl);?>

                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                            <div class="col-md-4 item-wrapper">
                                <div class="item">
                                    <div class="img-content" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
);">
                                        <div class="date">
                                            <p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['publishedOn'],'%d %B %Y'), ENT_QUOTES, 'UTF-8', true);?>
</p>
                                        </div>
                                    </div>
                                    <div class="desc-content">
                                        <h3 data-text-limit="55"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                                        <p data-text-limit="190"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['summary']);?>
</p>
                                        <span class="btn-def-3">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Читать далее</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender("file:modules/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
