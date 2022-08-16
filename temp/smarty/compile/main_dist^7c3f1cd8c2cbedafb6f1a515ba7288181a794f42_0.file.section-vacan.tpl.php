<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 10:40:05
  from 'C:\xampp\htdocs\themes\dist\templates\section-vacan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd88475ed1f72_71594187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3f1cd8c2cbedafb6f1a515ba7288181a794f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-vacan.tpl',
      1 => 1608024860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-articles.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fd88475ed1f72_71594187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_articles.php','function'=>'smarty_function_fetch_articles',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("file:header-articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['section']->value['meta_title'],'keywords'=>$_smarty_tpl->tpl_vars['section']->value['keywords'],'description'=>$_smarty_tpl->tpl_vars['section']->value['description']), 0, false);
?>
<main class="main">
   <section class="vacancies padd-sect">
       <div class="container">
        <div class="vacancies__wrapper">
            <div class="vacancies__inner">
                <h2 class="vacancies__nav">ВАКАНСИИ</h2>
                <div class="vacancies__actual">Актуальные вакансии</div>
                <?php echo smarty_function_fetch_articles(array('assign'=>'sectionArticles','section'=>$_smarty_tpl->tpl_vars['section']->value['sectionId'],'limit'=>999),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionArticles']->value, 'article', false, NULL, 'sectionArticles', array (
));
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                <div class="test_block">
                    <button class="accordion"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<span class="icon-arrow-up"></span></button>
                    <div class="panel ">
                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value['summary'],'<h3','<h3 class="vacancies__title"'),'<ul','<ul class="vacancies__list"');?>

                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <form class="vacancies-form" action="">
                    <div class="vacancies-form__body">
                        <div class="vacancies-form__inner">
                            <input required class="input-vacancies" placeholder="* Имя" name="name" type="text">
                            <input required class="input-vacancies" placeholder="* Номер телефона" name="phone" type="text">
                        </div>
                        <div class="vacancies-form__inner">
                            <input required class="input-vacancies" placeholder="* Должность" name="name" type="text">
                            <input required class="input-vacancies" placeholder="* Email" name="email" type="text">
                        </div>
                        <textarea class="vacancies-form__area" placeholder="* Расскажите о себе" name="" id="" cols="30" rows="10">

                        </textarea>
                        <div class="vacancies-form__inner">
                            <div class="example-2">
                                <div class="form-group">
                                  <input type="file" name="file" id="file" class="input-file">
                                  <label for="file" class="btn btn-tertiary js-labelFile">
                                    <span class="js-fileName">Прикрепите файл</span>
                                  </label>
                                </div>
                               </div>
                            <button type="submit" class="vacancies-form__btn">Отправить<span class="icon-arrow-short-right"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div>
   </section>
  </main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
