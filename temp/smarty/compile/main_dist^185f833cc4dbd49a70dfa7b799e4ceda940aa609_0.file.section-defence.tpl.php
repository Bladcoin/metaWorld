<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-18 08:29:11
  from 'C:\xampp\htdocs\themes\dist\templates\section-defence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600538c7878d16_53500980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185f833cc4dbd49a70dfa7b799e4ceda940aa609' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-defence.tpl',
      1 => 1610954869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:modules/useful_contacts.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_600538c7878d16_53500980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="main-bnr-wrapper">
                <div class="container-2">
                    <div class="defence">
                        <div class="defence__content">
                            <h2 class="defence__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<h3','<h3 class="defence__content-subtitle"');?>


                            <?php echo smarty_function_fetch_section(array('assign'=>'guidance','section'=>877),$_smarty_tpl);?>

                            <div class="defence__content-inner">
                                <div class="defence__body">
                                    <h2 class="defence__body-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guidance']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                    <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['guidance']->value['summary'],'<h4','<h4 class="defence__body-subtitle"'),'<ul','<ul class="defence__body-list"'),'<li','<li class="defence__body-list-item"'),'<a','<a class="defence__body-list-link"'),'<strong>','<span>'),'</strong>','</span>');?>

                                </div>

                                <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['guidance']->value['sectionId'],'limit'=>999,'getFrom'=>'gallery'),$_smarty_tpl);?>

                                <div class="defence__img">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                        
                        <?php echo smarty_function_fetch_section(array('assign'=>'monitoring','section'=>878),$_smarty_tpl);?>

                        <div class="defence__content">
                            <h2 class="defence__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['monitoring']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                            <?php echo $_smarty_tpl->tpl_vars['monitoring']->value['summary'];?>

                            <div class="defence__content-inner">
                                <div class="defence__body">
                                    <div class="defence__body-desc">
                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['monitoring']->value['content'],'<h4','<h4 class="defence__body-desc-title"');?>

                                    </div>
                                    <div class="defence__body-desc">
                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['monitoring']->value['content_two'],'<h4','<h4 class="defence__body-desc-title"');?>

                                    </div>
                                </div>
                                <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['monitoring']->value['sectionId'],'limit'=>999,'getFrom'=>'gallery'),$_smarty_tpl);?>

                                <div class="defence__img">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__inner">
                            <?php echo smarty_function_fetch_section(array('assign'=>'useful','section'=>876),$_smarty_tpl);?>

                            <div class="swiper-container defence-container">
                                        <h3 class="contacts__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['useful']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                                        <!-- Additional required wrapper -->
                                        <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['useful']->value['sectionId'],'limit'=>99999,'getFrom'=>'gallery'),$_smarty_tpl);?>

                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:modules/useful_contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <!-- If we need navigation buttons -->
                                        <div class="slider-button">
                                            <div class="swiper-button-prev contacts-prev">
                                                <i class="icon-left"></i>
                                            </div>
                                            <div class="swiper-button-next contacts-next">
                                                <i class="icon-right"></i>
                                            </div>
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
