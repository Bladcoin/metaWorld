<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 10:40:01
  from 'C:\xampp\htdocs\themes\dist\templates\section-contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd884710bd033_67964763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577880fdf252bfc87b743369ada936368f98e7f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-contact.tpl',
      1 => 1608025159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-articles.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd884710bd033_67964763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.social.php','function'=>'smarty_function_social',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.maps.php','function'=>'smarty_function_maps',),));
$_smarty_tpl->_subTemplateRender("file:header-articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
    <div class="contacts ">
      <div class="container">
        <div class="contacts__wrapper">
          <h2 class="contacts__title">КОНТАКТЫ</h2>
          <div class="contacts__inner">
            <form action="#" id="form" class="contacts__form">
                <div class="contacts__form-content">
                  <h3 class="contacts__form-title">Оставьте заявку</h3>
                  <p>Наши менеджеры свяжутся с вами через 15 минут</p>
                  <label for="formName"><input data-validate-field="name"  id="formName"  class="contacts__input" placeholder="Имя" name="name" type="text"></label>
                  <label for="formPhone"><input data-validate-field="tel"  id="formPhone" class="contacts__input" placeholder="Номер телефона" name="phone" type="tel"></label>
                  <button value="отправить" type="submit">Отправить<span class="icon-arrow-short-right"></span></button>
                </div>
              </form>
              <div class="contacts-maps">
                <div id="map-canvas" class="maps-contacts"></div>
              </div>
              <div class="contacts__info">
                <div class="contacts__info-item">
                  <div class="contacts__info-nav"><span class="icon-location"></span></div>
                  <div class="contacts__info-adress"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
                <div class="contacts__info-item">
                  <div class="contacts__info-nav"><span class="icon-tel"></span></div>
                  <div class="contacts__info-cont">
                    <a class="contacts__info-tel" href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',''), ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <a class="contacts__info-tel" href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone_two'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone_two'],'(',''),')',''),'-',''), ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <a class="contacts__info-tel" href="tel:<?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone_three'],'(',''),')',''),'-',''),' ',''), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone_three'],'(',''),')',''),'-',''), ENT_QUOTES, 'UTF-8', true);?>
</a>
                  </div>
                </div>
                <div class="contacts__info-item">
                  <div class="contacts__info-nav"><span class="icon-email"></span></div>
                  <a class="contacts__info-email" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                </div>
                <div class="contacts__social">
                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_function_social(array(),$_smarty_tpl),'<li>',''),'</li>',''),'<a','<a class="contacts__social-link"');?>

              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
   
  </main>
  <?php echo smarty_function_maps(array('turl'=>$_smarty_tpl->tpl_vars['THEME_URL']->value,'icon'=>"/img/location.svg"),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
