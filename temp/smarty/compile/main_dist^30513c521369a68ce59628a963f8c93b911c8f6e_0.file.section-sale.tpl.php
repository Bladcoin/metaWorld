<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-25 11:52:53
  from 'C:\xampp\htdocs\themes\dist\templates\section-sale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe5c485dae9b0_78946365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30513c521369a68ce59628a963f8c93b911c8f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-sale.tpl',
      1 => 1608892970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/paginationButton.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fe5c485dae9b0_78946365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
    <div class="sale">
      <div class="container">
        <h2 class="sale__title title__heading">Актуальные акции</h2>
        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'isFeatured'=>1,'limit'=>1000000,'type_content'=>'news'),$_smarty_tpl);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration']++;
?>
        <div class="sale__inner animate-all animate__delay-<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration'] : null), ENT_QUOTES, 'UTF-8', true);?>
s">
          <div class="sale__image">
            <div class="sale__image-img image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
          </div>
           <div class="sale__content"> 
            <h4 class="sale__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
            <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

              <div class="sale__content-row">
                <div class="sale__date">
                  <div class="sale__date-icon">
                    <div class="icon__container">
                      <svg viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7669 4.80061L26.8817 15.9154C27.7305 16.7642 27.7305 18.1403 26.8817 18.989L19.1977 26.673C18.3489 27.5218 16.9728 27.5218 16.1241 26.673L5.00929 15.5582C4.49545 15.0444 4.27242 14.3078 4.41493 13.5952L5.83768 6.48146C5.92371 6.05129 6.25997 5.71503 6.69014 5.629L13.8039 4.20625C14.5164 4.06374 15.2531 4.28677 15.7669 4.80061Z" stroke="#E52529" stroke-width="1.81689"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.97672 11.305C10.4011 11.7293 11.0891 11.7293 11.5135 11.305C11.9379 10.8806 11.9379 10.1925 11.5135 9.76816C11.0891 9.34378 10.4011 9.34378 9.97672 9.76816C9.55234 10.1925 9.55234 10.8806 9.97672 11.305Z" fill="#E52529"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4584 13.9525C13.6199 13.114 13.6199 11.7546 14.4584 10.9161C15.2969 10.0777 16.6563 10.0777 17.4947 10.9161C18.3332 11.7546 18.3332 13.114 17.4947 13.9525C16.6563 14.7909 15.2969 14.7909 14.4584 13.9525ZM15.4705 18.001C14.632 18.8395 14.632 20.1989 15.4705 21.0374C16.309 21.8758 17.6684 21.8758 18.5069 21.0374C19.3453 20.1989 19.3453 18.8395 18.5069 18.001C17.6684 17.1625 16.309 17.1625 15.4705 18.001ZM17.4947 20.0251C17.2152 20.3046 16.7621 20.3046 16.4826 20.0251C16.2031 19.7456 16.2031 19.2925 16.4826 19.013C16.7621 18.7335 17.2152 18.7335 17.4947 19.013C17.7742 19.2925 17.7742 19.7456 17.4947 20.0251ZM16.4826 12.9406C16.2032 13.2201 15.75 13.2201 15.4705 12.9406C15.191 12.6611 15.191 12.208 15.4705 11.9285C15.75 11.649 16.2032 11.649 16.4826 11.9285C16.7621 12.208 16.7621 12.6611 16.4826 12.9406Z" fill="#E52529"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6035 15.0246L12.4944 18.061L11.3629 16.9294L20.4719 13.893L21.6035 15.0246V15.0246Z" fill="#E52529"/>
                        </svg>                        
                    </div>
                  </div>
                  <div class="sale__period">
                    <div class="sale__period-title">Срок акции:</div>
                    <div class="sale__period-reys"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<p>','<div class="sale__period-reys">'),'</p>','</div>');?>
</div>
                  </div>
                </div>
                <a class="sale__content-btn btn-more-secondary" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
              </div>
          </div> 
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <h2 class="sale__title title__heading">Завершенные акции</h2>
        
        <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'perPage'=>2,'assignPagination'=>'pagination','page'=>$_smarty_tpl->tpl_vars['page']->value,'path'=>$_smarty_tpl->tpl_vars['section']->value['path'],'seFriendly'=>true,'isFeatured'=>0),$_smarty_tpl);?>

        <div id="news">    
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['iteration']++;
?>
            <div class="sale__inner wow animate-all">
              <div class="sale__image">
                <div class="sale__image-img image-bg" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
);"></div>
              </div>
              <div class="sale__content">
                <h4 class="sale__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>

                  <div class="sale__content-row">
                    <div class="sale__date">
                      <div class="sale__date-icon">
                        <div class="icon__container">
                          <svg viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7669 4.80061L26.8817 15.9154C27.7305 16.7642 27.7305 18.1403 26.8817 18.989L19.1977 26.673C18.3489 27.5218 16.9728 27.5218 16.1241 26.673L5.00929 15.5582C4.49545 15.0444 4.27242 14.3078 4.41493 13.5952L5.83768 6.48146C5.92371 6.05129 6.25997 5.71503 6.69014 5.629L13.8039 4.20625C14.5164 4.06374 15.2531 4.28677 15.7669 4.80061Z" stroke="#E52529" stroke-width="1.81689"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.97672 11.305C10.4011 11.7293 11.0891 11.7293 11.5135 11.305C11.9379 10.8806 11.9379 10.1925 11.5135 9.76816C11.0891 9.34378 10.4011 9.34378 9.97672 9.76816C9.55234 10.1925 9.55234 10.8806 9.97672 11.305Z" fill="#E52529"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4584 13.9525C13.6199 13.114 13.6199 11.7546 14.4584 10.9161C15.2969 10.0777 16.6563 10.0777 17.4947 10.9161C18.3332 11.7546 18.3332 13.114 17.4947 13.9525C16.6563 14.7909 15.2969 14.7909 14.4584 13.9525ZM15.4705 18.001C14.632 18.8395 14.632 20.1989 15.4705 21.0374C16.309 21.8758 17.6684 21.8758 18.5069 21.0374C19.3453 20.1989 19.3453 18.8395 18.5069 18.001C17.6684 17.1625 16.309 17.1625 15.4705 18.001ZM17.4947 20.0251C17.2152 20.3046 16.7621 20.3046 16.4826 20.0251C16.2031 19.7456 16.2031 19.2925 16.4826 19.013C16.7621 18.7335 17.2152 18.7335 17.4947 19.013C17.7742 19.2925 17.7742 19.7456 17.4947 20.0251ZM16.4826 12.9406C16.2032 13.2201 15.75 13.2201 15.4705 12.9406C15.191 12.6611 15.191 12.208 15.4705 11.9285C15.75 11.649 16.2032 11.649 16.4826 11.9285C16.7621 12.208 16.7621 12.6611 16.4826 12.9406Z" fill="#E52529"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6035 15.0246L12.4944 18.061L11.3629 16.9294L20.4719 13.893L21.6035 15.0246V15.0246Z" fill="#E52529"/>
                            </svg>                        
                        </div>
                      </div>
                      <div class="sale__period">
                        <div class="sale__period-title">Срок акции:</div>
                        <div class="sale__period-reys"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<p>','<div class="sale__period-reys">'),'</p>','</div>');?>
</div>
                      </div>
                    </div>
                    <a class="sale__content-btn btn-more-secondary" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">Подробнее</a>
                  </div>
              </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div id="loader" style="width: 100%; text-align: center;margin-bottom: 20px;display: none;">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/oval.svg">
        </div>
        <div id="showNews" class="sale__btn-see">
          <?php $_smarty_tpl->_subTemplateRender("file:modules/paginationButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
       
      </div>
    </div>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
