<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:52
  from 'C:\xampp\htdocs\themes\dist\templates\components\first-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d6863bae6_71042668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feffc3e1f9438edf46d336ca07210f802ef1fdd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\first-block.tpl',
      1 => 1660636044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d6863bae6_71042668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),));
echo smarty_function_fetch_section(array('assign'=>'firstBlock','section'=>996),$_smarty_tpl);?>


<section class="section section-home">
    <div class="container position-relative h-100">
        <div class="slogan">
            <div class="position-relative" style="z-index:1;white-space:pre-line;">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstBlock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstBlock']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
" class="watch-trailer">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['firstBlock']->value['section_icon'], ENT_QUOTES, 'UTF-8', true);?>

        </a>
    </div>
</section><?php }
}
