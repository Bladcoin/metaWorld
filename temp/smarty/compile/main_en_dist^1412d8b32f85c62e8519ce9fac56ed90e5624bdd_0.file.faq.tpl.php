<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:44:08
  from 'C:\xampp\htdocs\themes\dist\templates\components\faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb66e8354c43_80378719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1412d8b32f85c62e8519ce9fac56ed90e5624bdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\faq.tpl',
      1 => 1660545444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb66e8354c43_80378719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),));
echo smarty_function_fetch_section(array('assign'=>'faq','section'=>1003),$_smarty_tpl);?>


<section class="section section-faq" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="faq-container">
                    <div class="h2 text-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['faq']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="faq">

                        <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['faq']->value['summary']),$_smarty_tpl);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <button class="btn btn-faq mb-3 collapsed" type="button" data-toggle="collapse"
                                data-target="#faq-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>


                            </button>
                            <div id="faq-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8', true);?>
" class="faq-answer collapse">
                                <div class="pt-3">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="images/slide-9.jpg" class="img-fluid mb-2" alt="">
                <img src="images/slide-8.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><?php }
}
