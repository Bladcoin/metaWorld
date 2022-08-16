<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:44:53
  from 'C:\xampp\htdocs\themes\dist_en\templates\components\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4af53b52f6_45768463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453c3c464898719cba78de60367b380ada8d58ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist_en\\templates\\components\\news.tpl',
      1 => 1660545487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb4af53b52f6_45768463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'newsSection','section'=>975),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'news','section'=>$_smarty_tpl->tpl_vars['newsSection']->value['sectionId'],'status'=>"visible",'type_content'=>"products",'orderBy'=>"publishedOn ASC"),$_smarty_tpl);?>


<section class="section section-news" id="news">
    <div class="container">
        <div class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsSection']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
        <div class="row">


            <div class="col-6 mb-4">
                <div class="news-item news-featured">
                    <div class="news-image">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsSection']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsSection']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-fluid"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsSection']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="news-excerpt"><?php echo $_smarty_tpl->tpl_vars['newsSection']->value['summary'];?>
</div>
                        <div class="news-date">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newsSection']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                        <div class="col-6 mb-4">
                            <div class="news-item">
                                <div class="news-image">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-title">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                    <div class="news-date">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['articul'], ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>


        </div>
        <div class="news-more">
            <a href="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newsSection']->value['content_two']);?>
">More</a>
        </div>
    </div>
</section><?php }
}
