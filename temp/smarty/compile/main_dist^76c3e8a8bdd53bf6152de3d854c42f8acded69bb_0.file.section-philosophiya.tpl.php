<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-05 05:34:13
  from 'C:\xampp\htdocs\themes\dist\templates\section-philosophiya.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff3ec4582f6c6_10988758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c3e8a8bdd53bf6152de3d854c42f8acded69bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-philosophiya.tpl',
      1 => 1608549320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ff3ec4582f6c6_10988758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),4=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
      <div class="wrap-main">
        <div class="info">
            <div class="container">
                <!-- Первый блок info -->
                <div class="philosophiya">
                    <h2 class="title__heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                    <div class="philosophiya__inner">
                        <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'getFrom'=>'gallery'),$_smarty_tpl);?>

                        <div class="philosophiya__image image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
)"></div>
                        <div class="philosophiya__content">
                             <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<h4','<h4 class="philosophiya__title"'),'<p','<p class="philosophiya__text"'),'<em>','<sup>'),'</em>','</sup>');?>

                        </div>
                    </div>
                </div>
            </div>
        </div>   

        <!-- Блок с карточками -->

        <?php echo smarty_function_fetch_section(array('assign'=>'aboutInfo','section'=>859),$_smarty_tpl);?>

        <div class="progress">
            <div class="container">
                <h2 class="title__heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aboutInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                    <div class="slider-container" data-mobile="false">
                        <div class="swiper-wrapper card-wrappers">
                            <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['aboutInfo']->value['summary'],'strip_tags'=>true),$_smarty_tpl);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <div class="card">
                                <div class="card__body">
                                    <div class="card__body-img">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            
                            
                            
                        </div>
                        <!-- If we need pagination -->
                        <div class="progress__controls">
                            <div class="swiper-pagination progress__pagination"></div>
                            <div class="swiper-button-prev progress__prev">
                                <svg width="63" height="38" viewBox="0 0 63 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.72063 16.9363C0.74432 17.9126 0.744324 19.4956 1.72063 20.4719L17.6305 36.3818C18.6068 37.3581 20.1898 37.3581 21.1661 36.3818C22.1424 35.4055 22.1424 33.8225 21.1661 32.8462L7.02393 18.7041L21.1661 4.56196C22.1424 3.58565 22.1424 2.00274 21.1661 1.02643C20.1898 0.0501213 18.6068 0.0501213 17.6305 1.02643L1.72063 16.9363ZM62.6411 16.2041L3.4884 16.2041V21.2041L62.6411 21.2041L62.6411 16.2041Z" fill="#F9EC13"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next progress__next">
                                <svg width="62" height="38" viewBox="0 0 62 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M61.2491 20.4719C62.2254 19.4956 62.2254 17.9127 61.2491 16.9363L45.3392 1.02644C44.3629 0.050129 42.78 0.0501287 41.8037 1.02644C40.8273 2.00275 40.8273 3.58566 41.8037 4.56197L55.9458 18.7041L41.8037 32.8462C40.8273 33.8226 40.8273 35.4055 41.8037 36.3818C42.78 37.3581 44.3629 37.3581 45.3392 36.3818L61.2491 20.4719ZM0.328613 21.2041L59.4813 21.2041L59.4813 16.2041L0.328614 16.2041L0.328613 21.2041Z" fill="#F9EC13">
                                </svg>
                            </div>
                        </div> 
                    </div>
            </div>
        </div>



        <!-- Замудренный блок я сам не понимаю что в нём происходит-->
        <?php echo smarty_function_fetch_section(array('assign'=>'historyLays','section'=>860),$_smarty_tpl);?>

        <div class="about__inner">
            <div class="container">
                <h2 class="title__heading"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['historyLays']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                <div class="history__list">
                    <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['historyLays']->value['sectionId'],'limit'=>99999,'orderBy'=>"title ASC"),$_smarty_tpl);?>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, 'key', 'sectionArticles', array (
  'first' => true,
  'index' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['total'];
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] : null)) {?>
                                                <div class="history__list-item history__list-item-reverse">
                            <div class="history__list-date history__list-item-path">
                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                <div class="history__list-indicator history__list-indicator-right history__list-indicator-first">
                                </div>
                                <div class="history__list-decoration history__list-decoration-right history__list-decoration-first">
                                </div>
                                <div class="history__list-dots history__list-dots-right history__list-dots-first">
                                </div>
                            </div>
                            <div class="history__list-image history__list-image-reverse">
                                <div class="history__list-image-history " style='background-image: url("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
");'></div>
                            </div>
                            <div class="history__list-chips"></div>
                        </div>
                        <?php continue 1;?>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'] : null)%2) {?>
                                        <div class="history__list-item">
                        <div class="history__list-date history__list-item-path history__list-date-reverse">
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                            <div class="history__list-indicator history__list-indicator-left"></div>
                            <div class="history__list-decoration history__list-decoration-left"></div>
                            <div class="history__list-dots history__list-dots-left"></div>
                        </div>
                        <div class="history__list-content history__list-item-path history__list-content-reverse">
                            <span><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['sectionArticles']->value[$_smarty_tpl->tpl_vars['key']->value-1]['summary'],'<em>','<sup>'),'</em>','</sup>');?>
</span>
                        </div>
                        <div class="history__list-image">
                            <div class="history__list-image-history"style='background-image: url("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
");'></div>
                        </div>
                        <div class="history__list-chips"></div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['last'] : null)) {?>
                                                <div class="history__list-item history__list-item-reverse">
                            <div class="history__list-date history__list-item-path last-date"><p>---</p>
                                <div class="history__list-indicator history__list-indicator-right"></div>
                                <div class="history__list-decoration history__list-decoration-right"></div>
                                <div class="history__list-dots history__list-dots-right"></div>
                            </div>
                            <div class="history__list-content history__list-item-path"
                               ><span><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['sectionArticles']->value[$_smarty_tpl->tpl_vars['key']->value]['summary'],'<em>','<sup>'),'</em>','</sup>');?>
</span></div>
                            <div class="history__list-image history__list-image-reverse last-image" >
                                <div class="history__list-image-history" style='background-image: url("---");'></div>
                            </div>
                            <div class="history__list-chips last-chips" ></div>
                        </div>
                    <?php }?>
                    <?php } else { ?>
                                        <div class="history__list-item history__list-item-reverse">
                        <div class="history__list-date history__list-item-path">
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                            <div class="history__list-indicator history__list-indicator-right"></div>
                            <div class="history__list-decoration history__list-decoration-right"></div>
                            <div class="history__list-dots history__list-dots-right"></div>
                        </div>
                        <div class="history__list-content history__list-item-path"><span><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['sectionArticles']->value[$_smarty_tpl->tpl_vars['key']->value-1]['summary'],'<em>','<sup>'),'</em>','</sup>');?>
</span></div>
                        <div class="history__list-image history__list-image-reverse">
                            <div class="history__list-image-history" style='background-image: url("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
");'></div>
                        </div>
                        <div class="history__list-chips" ></div>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['last'] : null)) {?>
                                                <div class="history__list-item">
                            <div class="history__list-date history__list-item-path history__list-date-reverse last-date"><p>---</p>
                                <div class="history__list-indicator history__list-indicator-left"></div>
                                <div class="history__list-decoration history__list-decoration-left"></div>
                                <div class="history__list-dots history__list-dots-left"></div>
                            </div>
                            <div class="history__list-content history__list-item-path history__list-content-reverse"
                               ><span><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['sectionArticles']->value[$_smarty_tpl->tpl_vars['key']->value]['summary'],'<em>','<sup>'),'</em>','</sup>');?>
</span></div>
                            <div class="history__list-image last-image" >
                                <div class="history__list-image-history" style='background-image: url("---");'></div>
                            </div>
                            <div class="history__list-chips last-chips" ></div>
                        </div>
                    <?php }?>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                                <div class="history__mobile">
                    <div class="history__mobile-inner">
                        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>9999,'orderBy'=>'title ASC'),$_smarty_tpl);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                        <div class="history__mobile-item">
                            <div class="history__mobile-img">
                                <div class="history__mobile-img-history" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
                            </div>
                            <div class="history__mobile-content">
                                <div class="history__mobile-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<em>','<sup>'),'</em>','</sup>');?>

                            </div>
                            
                            <div class="history__mobile-point">
                                <div class="history__mobile-point-list">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/philosophiya/youknow/mobile-arrow-down.svg" alt="">
                                </div>
                                <div class="history__mobile-point-list">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/philosophiya/youknow/mobile-arrow-down.svg" alt="">
                                </div>
                                <div class="history__mobile-point-list">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/philosophiya/youknow/mobile-arrow-down.svg" alt="">
                                </div>
                            </div>
                            
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
