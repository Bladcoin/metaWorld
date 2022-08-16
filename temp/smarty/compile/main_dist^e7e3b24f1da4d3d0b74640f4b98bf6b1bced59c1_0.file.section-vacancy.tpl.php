<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-22 23:34:57
  from 'C:\xampp\htdocs\themes\dist\templates\section-vacancy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60591b91b34048_32024671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e3b24f1da4d3d0b74640f4b98bf6b1bced59c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-vacancy.tpl',
      1 => 1616414327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60591b91b34048_32024671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="container-2">
                <div class="vacancy-page other-pages">
                    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                    <div class="content">
                        <div class="all-vacancies">
                            <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['section']->value['content']),$_smarty_tpl);?>

                            <div class="items">
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <div class="item">
                                    <a href="javascript:;" data-fancybox data-src="#main-modal">
                                        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                                        <div class="icon-wrap">
                                            <i class="icon-arrow"></i>
                                        </div>
                                    </a>
                                </div>
                             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="desc-content">
                            <?php echo $_smarty_tpl->tpl_vars['section']->value['content_two'];?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
