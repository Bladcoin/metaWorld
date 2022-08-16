<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-26 13:28:06
  from 'C:\xampp\htdocs\themes\dist\templates\section-world-hereticinuzb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60100ad691c6f1_53553562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc0fa6e8abc7d84bdcbe8064827f6e36f2ffef3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-world-hereticinuzb.tpl',
      1 => 1611662322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60100ad691c6f1_53553562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="partners-wrapper">
                <div class="objectuzb">
                    <div class="container-2">
                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<h2','<h2 class="partners__content-title"'),'<h3','<h3 class="partners__content-subtitle"');?>

                    </div>
                    <div class="objectuzb__inner">
                            <div class="objectuzb__left">
                                <div class="info-content">
                                    <div class="entry-header entry-wrapp">
                                        <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                    </div>
                                    <div class="map-points"></div>
                                </div>
                        </div>
                        <div class="objectuzb-right">
                            <div class="map-wrapper">
                                <div class="dealers-map">
                                    <div id="ymap_ctrl_display" style="display: none; width: 100%; height: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
                                        <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 1.8em; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
                                    </div>
                                    <div id="map" class="maps">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="section subject">
                        <div class="container-2">
                            <h2 class="subject__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                            <div class="subject__inner">
                                <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'orderBy'=>'publishedOn ASC'),$_smarty_tpl);?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                                <div class="subject__body">
                                    <div class="subject__body-img" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/objectuzb/objectuzb_img_1.jpg);">
                                                                                <div id="reg">
                                            <a id="button" href="javascript:;"><b>About the image</b></a>
                                            <div id="informer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        </div>
                                    </div>
                                    <h4 class="subject__body-subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                                    <h3 class="subject__body-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                                    <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

                                    <a class="subject__body-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
                                </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                     
                       
                    </div>
              
               
              
            </div>
           
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
