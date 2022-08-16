<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 15:01:58
  from 'C:\xampp\htdocs\themes\dist\templates\section-production.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b78146a0a8a6_96249853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69dd8d30218f90b95837e3c4d0410f470f4c3a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-production.tpl',
      1 => 1622637862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-two.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b78146a0a8a6_96249853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
$_smarty_tpl->_subTemplateRender("file:header-two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="main">
     <section class="product-inner">
         <div class="container">
             <div class="product__head-inner">
                 <h2 class="product__title title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
             </div>
             <div class="product__tabs-content tabs">
                 <div class="tabs__wrapper">
                    <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['summary']),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, NULL, 'breckets', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breckets']->value['iteration']++;
?>

                     <button class="tabs__btn" data-tabs="#tabs_<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breckets']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breckets']->value['iteration'] : null), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']), ENT_QUOTES, 'UTF-8', true);?>
</button>
                    
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                 </div>

                 <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId']),$_smarty_tpl);?>

                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sectionArticles']->value['index'];
?>
                     <div class="tabs__content-product active" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
                     
                        <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>


                     </div> 
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                         

                     
                     
                     
               
             </div>
         </div>
     </section>
  </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
