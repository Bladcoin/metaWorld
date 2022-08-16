<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-18 07:14:23
  from 'C:\xampp\htdocs\themes\dist\templates\section-vsemirnoenasledstvo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6005273fa5c444_30094630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1099c4780d84f7f6787219a0b1010e2316a357de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-vsemirnoenasledstvo.tpl',
      1 => 1610950462,
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
function content_6005273fa5c444_30094630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main>
            <div class="partners-wrapper">
                <div class="container-2">
                    
                    <div class="navsledstvo-content">
                        <h2 class="partners__content-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['section']->value['content'],'<h3','<h3 class="partners__content-subtitle"');?>

                        <div class="navsledstvo-content__inner">
                            <div class="navsledstvo-content__text">
                                <?php echo $_smarty_tpl->tpl_vars['section']->value['content_two'];?>

                            </div>
                            <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>999,'getFrom'=>'gallery'),$_smarty_tpl);?>

                            
                            <div class="navsledstvo-content__img">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sImages']->value, 'sImage');
$_smarty_tpl->tpl_vars['sImage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sImage']->value) {
$_smarty_tpl->tpl_vars['sImage']->do_else = false;
?>
                                <div class="navsledstvo-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImage']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
"></div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="contacts">
                    <div class="container-2">
                        <div class="contacts__inner">
                            <?php echo smarty_function_fetch_section(array('assign'=>'useful','section'=>876),$_smarty_tpl);?>

                            <div class="swiper-container contacts-container">
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
