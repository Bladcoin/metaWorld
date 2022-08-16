<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 05:35:49
  from 'C:\xampp\htdocs\themes\dist\templates\section-forms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff53e25c3e054_54763947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3de81cffed282e0492082c9d2fd894a27a1e9ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-forms.tpl',
      1 => 1608617636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ff53e25c3e054_54763947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
      <div class="form__main image-bg">
          <div class="container">
            <h1 class="form__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
            <div class="form">
                <h2 class="form__inner-title">Свяжитесь с нами</h2>
                <form action="#" id="form" class="form__body">
                    <div class="form__inner">
                        <div class="form__item form__item--w100 sm-mar">
                           <input required class="form__input _req" placeholder="Имя*" id="name" name="name" type="text">
                        </div>
                        <div class="form__item form__item--w100">
                           <input required class="form__input _req" placeholder="Email*" id="email" name="email" type="text" >
                     </div>
                    </div>
                 <div class="form__item">
                   <select class="select" name="age">
                       <option value="от 18 до 25" selected>Тема сообщения</option>
                       <option value="от 25 до 45">Старый</option>
                       <option value="от 45">Супер стар</option>
                </select>
                </div>
                 <div class="form__item">
                     <textarea placeholder="Текст сообщения..." class="form__input" name="message" id="formMessage"></textarea>
                 </div>
                 <div class="form__inner">
                    <div class="form__item form__item-reverse">
                        <div class="checkbox">
                            <input class="checkbox__input _req" data-validate required id="Agreement" type="checkbox" name="agreement">
                            <label class="checkbox__label" for="Agreement">Я согласен на обработку персональных данных</label>
                        </div>
                    </div>
                    <div class="form__item">
                        <div class="file">
                            <div class="file__item">
                            <div class="example-2">
                                <div class="form-group">
                                     <input type="file" name="file" id="file" class="input-file">
                                    <label for="file" class="btn btn-tertiary js-labelFile">
                                    <div class="file__button"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/form/paperclip@2x.png" alt=""></div>
                                    <span class="js-fileName">Прикрепите файл</span>
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
                 <div class="form__inner last__inner">
                     <div class="form__kapcha">тут капча</div>
                     <button id="forms__popup-send" type="submit" class="form__button open-popup">Отправить</button>
                 </div>
                </form>
               </div>
          </div>
    </div>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
