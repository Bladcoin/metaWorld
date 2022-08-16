<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:52
  from 'C:\xampp\htdocs\themes\dist\templates\components\releasedJobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d68a1d294_17923817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf8658484651b579a2cdbdc40afad59fca1e72d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\releasedJobs.tpl',
      1 => 1660393795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d68a1d294_17923817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),));
echo smarty_function_fetch_section(array('assign'=>'releaseJobs','section'=>1001),$_smarty_tpl);?>

<?php echo smarty_function_fetch_articles(array('assign'=>'jobs','section'=>$_smarty_tpl->tpl_vars['releaseJobs']->value['sectionId'],'status'=>"visible",'type_content'=>"products",'orderBy'=>"publishedOn ASC"),$_smarty_tpl);?>


<section class="section section-works d-flex flex-column justify-content-center text-center">
    <div class="container">
        <div class="h2">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['releaseJobs']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
        <div class="slider-container">
            <div class="slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['job']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->do_else = false;
?>

                    <div class="slide">
                        <div class="slide-image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" width="1920" height="1080" alt="">
                        </div>
                        <div class="slide-title">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="slide-description"><?php echo $_smarty_tpl->tpl_vars['job']->value['summary'];?>
</div>
                    </div>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div>
</section><?php }
}
