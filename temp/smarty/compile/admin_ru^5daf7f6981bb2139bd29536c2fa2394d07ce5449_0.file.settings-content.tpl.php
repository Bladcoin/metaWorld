<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-21 15:26:20
  from 'C:\xampp\htdocs\admin\templates\settings-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608027fc7d5ab7_65154370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5daf7f6981bb2139bd29536c2fa2394d07ce5449' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\settings-content.tpl',
      1 => 1555960314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_608027fc7d5ab7_65154370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"settings-content",'title'=>"Настройка контента"), 0, false);
?>
<div class="page-content-wrap">
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick="noty({text: 'Настройки сохранены', layout: 'topRight', type: 'success'});"></span><?php }?>
    <?php echo '<script'; ?>
>$(document).ready(function() {<?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?>$('#savedMessage').click(); <?php }?> }); <?php echo '</script'; ?>
>
    <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="col-md-12"><h2>Настройка контента</h2></div></div></div>
    <div class="col-md-12">
        <form action="settings-content.php" method="post" id="settings">
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#tabsections" data-toggle="tab" aria-expanded="true">Страницы</a></li>
                    <li class=""><a href="#tabsliders" data-toggle="tab" aria-expanded="false">Слайдер</a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeContents']->value, 'typeContent', false, 'key');
$_smarty_tpl->tpl_vars['typeContent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['typeContent']->value) {
$_smarty_tpl->tpl_vars['typeContent']->do_else = false;
?>
                    <li class=""><a href="#tab<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="tab" aria-expanded="false"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['typeContent']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <li class=""><a href="#tabmenu" data-toggle="tab" aria-expanded="false">Настройка меню</a></li>
                </ul>

                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="tabsections">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Имя, Имя файла, Алиас, Родительский раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_name" name="fieldcontent[section_name]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_name']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя</label>
                                        <div class="col-md-8 info_block_box">Название раздела</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_fileName" name="fieldcontent[section_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждого раздела, не должно быть одинаковых значений. <br /> <span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_alias" name="fieldcontent[section_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_alias']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Алиас</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок используется для отображения в главном меню.<br /> <span class="text-danger">Если раздел не отбражается в меню - то не обязательно к заполнению</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_parent" name="fieldcontent[section_parent]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_parent']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Родительский раздел</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится подраздел или контент</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="section_images" name="fieldcontent[section_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_images']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять изображение к разделу</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="section_icon" name="fieldcontent[section_icon]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_icon']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Иконка раздела</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять иконку к разделу</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabSection -->

                    <!-- tabSlider -->
                    <div class="tab-pane" id="tabsliders">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Заголовок, Имя файла, Раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_title" name="fieldcontent[slider_title]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_title']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Заголовок</label>
                                        <div class="col-md-8 info_block_box">Заголовок слайда</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_fileName" name="fieldcontent[slider_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждого слайда, не должно быть одинаковых значений. <br /><span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_section" name="fieldcontent[slider_section]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_section']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Разделы</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится слайд.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_alias" name="fieldcontent[slider_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_alias']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подзаголовак</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок слайда.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_text" name="fieldcontent[slider_text]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_text']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Текст</label>
                                        <div class="col-md-8 info_block_box">Дополнительное поле для текста на слайде</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_link" name="fieldcontent[slider_link]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_link']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Ссылка</label>
                                        <div class="col-md-8 info_block_box">Ссылка для перехода со слайда</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_icon" name="fieldcontent[slider_icon]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_icon']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Иконка</label>
                                        <div class="col-md-8 info_block_box">Иконка слайда</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_images" name="fieldcontent[slider_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_images']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Добавлять изображение слайда</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_summary" name="fieldcontent[slider_summary]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_summary']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Анонс</label>
                                        <div class="col-md-8 info_block_box">Небольшое описание на слайде</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabSlider -->

                    <!-- tabArticle -->
                    <div class="tab-pane" id="tabarticles">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Заголовок, Имя файла, Раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_title" name="fieldcontent[article_title]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_title']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Заголовок</label>
                                        <div class="col-md-8 info_block_box">Заголовок контента</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_fileName" name="fieldcontent[article_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждого контента, не должно быть одинаковых значений. <br /><span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_section" name="fieldcontent[article_section]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_section']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Разделы</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится контент.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_alias" name="fieldcontent[article_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_alias']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подзаголовак</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок контента.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_images" name="fieldcontent[article_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_images']) {?>checked<?php }?>  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять изображение к контенту</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_summary" name="fieldcontent[article_summary]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_summary']) {?>checked<?php }?>  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Анонс</label>
                                        <div class="col-md-8 info_block_box">Небольшое описание контента</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_content" name="fieldcontent[article_content]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_content']) {?>checked<?php }?>  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подробнее</label>
                                        <div class="col-md-8 info_block_box">Полное описание контента</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_gallery" name="fieldcontent[article_gallery]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_gallery']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Галерея</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять галерею к контенту</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_featured" name="fieldcontent[article_featured]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_featured']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Избранное</label>
                                        <div class="col-md-8 info_block_box">Выделеный контент</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_comments" name="fieldcontent[article_comments]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['article_comments']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Комментарии</label>
                                        <div class="col-md-8 info_block_box">Комментарии к контенту</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ tabArticle -->

                    <!-- tabTiding -->
                    <div class="tab-pane" id="tabnews">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Заголовок, Имя файла, Раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_title" name="fieldcontent[tiding_title]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_title']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Заголовок</label>
                                        <div class="col-md-8 info_block_box">Заголовок новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_fileName" name="fieldcontent[tiding_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждой новости, не должно быть одинаковых значений. <br /><span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_section" name="fieldcontent[tiding_section]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_section']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Разделы</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится новость.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_alias" name="fieldcontent[tiding_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_alias']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подзаголовак</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок новости.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_images" name="fieldcontent[tiding_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_images']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять изображение к новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_summary" name="fieldcontent[tiding_summary]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_summary']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Анонс</label>
                                        <div class="col-md-8 info_block_box">Небольшое описание новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_content" name="fieldcontent[tiding_content]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_content']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подробнее</label>
                                        <div class="col-md-8 info_block_box">Полное описание новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_gallery" name="fieldcontent[tiding_gallery]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_gallery']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Галерея</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять галерею к новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_featured" name="fieldcontent[tiding_featured]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_featured']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Избранное</label>
                                        <div class="col-md-8 info_block_box">Выделение новости</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_comments" name="fieldcontent[tiding_comments]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['tiding_comments']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Комментарии</label>
                                        <div class="col-md-8 info_block_box">Комментарии к новости</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabTiding -->

                    <!-- tabGallery -->
                    <div class="tab-pane" id="tabgallerys">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Заголовок, Имя файла, Раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_title" name="fieldcontent[gallery_title]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_title']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Заголовок</label>
                                        <div class="col-md-8 info_block_box">Заголовок галереи</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_fileName" name="fieldcontent[gallery_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждой новости, не должно быть одинаковых значений. <br /><span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_section" name="fieldcontent[gallery_section]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_section']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Разделы</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится галерея.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_alias" name="fieldcontent[gallery_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_alias']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подзаголовак</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок галереи.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_images" name="fieldcontent[gallery_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_images']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять изображение к галереи</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_gallery" name="fieldcontent[gallery_gallery]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_gallery']) {?>checked<?php }?>  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Галерея</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять галерею к галереи</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_summary" name="fieldcontent[gallery_summary]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_summary']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Анонс</label>
                                        <div class="col-md-8 info_block_box">Небольшое описание галереи</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_content" name="fieldcontent[gallery_content]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_content']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подробнее</label>
                                        <div class="col-md-8 info_block_box">Полное описание галереи</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_featured" name="fieldcontent[gallery_featured]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_featured']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Избранное</label>
                                        <div class="col-md-8 info_block_box">Выделение галереи</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_comments" name="fieldcontent[gallery_comments]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['gallery_comments']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Комментарии</label>
                                        <div class="col-md-8 info_block_box">Комментарии к галереи</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabGallery -->

                    <!-- tabGallery -->
                    <div class="tab-pane" id="tabproducts">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Доступные поля для заполнения<br> <small>Обязательные поля: Заголовок, Имя файла, Раздел.</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_title" name="fieldcontent[product_title]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_title']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Заголовок</label>
                                        <div class="col-md-8 info_block_box">Заголовок продукта</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_fileName" name="fieldcontent[product_fileName]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_fileName']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Имя файла</label>
                                        <div class="col-md-8 info_block_box">Имя файла. Имя файла должено быть уникальным для каждого продукта, не должно быть одинаковых значений. <br /> <span class="text-danger">Проще говоря, Имя файла - это url адрес для контента, именно на основе псевдонима строится url адрес.</span></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_section" name="fieldcontent[product_section]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_section']) {?>checked<?php }?> disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Разделы</label>
                                        <div class="col-md-8 info_block_box">Раздел, к которому относится продукт.</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_alias" name="fieldcontent[product_alias]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_alias']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Подзаголовак</label>
                                        <div class="col-md-8 info_block_box">Подзаголовок продукта.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_articul" name="fieldcontent[product_articul]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_articul']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Артикул</label>
                                        <div class="col-md-8 info_block_box">Артикул продукта</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_price" name="fieldcontent[product_price]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_price']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Цена</label>
                                        <div class="col-md-8 info_block_box">Цена продукта.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_sale" name="fieldcontent[product_sale]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_sale']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Скидка</label>
                                        <div class="col-md-8 info_block_box">Скидка продукта</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_orderBy" name="fieldcontent[product_orderBy]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_orderBy']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Сортировка</label>
                                        <div class="col-md-8 info_block_box">Сортировка продукта.</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_images" name="fieldcontent[product_images]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_images']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Основная картинка</label>
                                        <div class="col-md-8 info_block_box">Появится возможность добавлять изображений к товару</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_tags" name="fieldcontent[product_tags]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_tags']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Теги продукта</label>
                                        <div class="col-md-8 info_block_box">Теги продукта</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_featured" name="fieldcontent[product_featured]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_featured']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Избранное</label>
                                        <div class="col-md-8 info_block_box">Выделение продукта</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_comments" name="fieldcontent[product_comments]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['product_comments']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Комментарии</label>
                                        <div class="col-md-8 info_block_box">Комментарии к продукту</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabGallery -->

                    <!-- tabMenu -->
                    <div class="tab-pane" id="tabmenu">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">Настройка отображения дополнительных пуктов меню</h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_comments" name="fieldcontent[menu_subscribe]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_subscribe']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Рассылка</label>
                                        <div class="col-md-8 info_block_box">Отображать управление рассылками в меню</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_comments" name="fieldcontent[menu_comments]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_comments']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Управление комментариями</label>
                                        <div class="col-md-8 info_block_box">Отображать управление комментариями в меню</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_banners" name="fieldcontent[menu_banners]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_banners']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Управление банерами</label>
                                        <div class="col-md-8 info_block_box">Отображать управление банерами в меню</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_currency" name="fieldcontent[menu_currency]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_currency']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Управление валютами</label>
                                        <div class="col-md-8 info_block_box">Отображать управление валютами в меню</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_site_users" name="fieldcontent[menu_site_users]" value="1" <?php if ($_smarty_tpl->tpl_vars['conf']->value['menu_site_users']) {?>checked<?php }?>><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">Управление пользователями</label>
                                        <div class="col-md-8 info_block_box">Отображать управление пользователями в меню</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ tabMenu -->
                    </div>
                </div>
                <!-- panel -->
            </div>
            <div align="center" class="col-md-12 main main_buttons"><input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" /></div>
        </form>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
