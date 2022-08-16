<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-02 13:45:31
  from 'C:\xampp\htdocs\themes\dist\templates\section-contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b76f5b438028_46930041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd861407ef0cdfa4372d06997bcbc7a954e307089' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-contacts.tpl',
      1 => 1622634330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-two.tpl' => 1,
    'file:footer-maps.tpl' => 1,
  ),
),false)) {
function content_60b76f5b438028_46930041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.images_sections.php','function'=>'smarty_function_images_sections',),));
$_smarty_tpl->_subTemplateRender("file:header-two.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="main">
      <section class="contacts indent">
            <div class="container">
              <div class="contacts__wrapper">
                <div class="contacts__marker-row">
                  <div class="contacts__start">
                    <h2 class="contacts__title title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
                    <div class="contacts__link">
                      <a href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['images']['original']['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt="phone"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',' '), ENT_QUOTES, 'UTF-8', true);?>
</a>
                      <?php echo smarty_function_images_sections(array('assign'=>'sImages','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'orderBy'=>$_smarty_tpl->tpl_vars['sImages']->value['field'],'order'=>'DESC','getFrom'=>'gallery'),$_smarty_tpl);?>

                      <a href="mailto:atllc@gmail.com"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" alt="email"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                  </div>
                  <div class="contacts__end">
                      <div class="contacts__end-image">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/gallery/big-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sImages']->value[1]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" alt="gps">
                      </div>
                  </div>
                </div>
                <div class="maps__wrapper">
                  <div class="maps__wrapper-info">
                    <div class="maps__wrapper-item">
                      <p>Название</p>
                      <h3 class="maps__wrapper-item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['company_name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    </div>
                    <div class="maps__wrapper-item">
                     <p>Адрес</p>
                     <h3 class="maps__wrapper-item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    </div>
                    <div class="maps__wrapper-item">
                      <p>Время работы</p>
                      <h3 class="maps__wrapper-item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['operating_mode'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                    </div>
                  </div>
                  <div class="maps__wrapper-maps">
                    <div id="ymap_ctrl_display" style="display: none; width: 100%; height: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
                      <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 18px; line-height: 25px; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
                    </div>
                    <div id="YMapsID"></div>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer-maps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
