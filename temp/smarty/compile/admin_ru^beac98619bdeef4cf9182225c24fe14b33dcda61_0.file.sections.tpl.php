<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 11:41:56
  from 'C:\xampp\htdocs\admin\templates\sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6664da8c80_54114281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beac98619bdeef4cf9182225c24fe14b33dcda61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\sections.tpl',
      1 => 1660634239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb6664da8c80_54114281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"sections",'title'=>"Разделы"), 0, false);
?>
<div class="page-content-wrap">
    
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Раздел «<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
» сохранен.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?><span id="deletedMessage" onclick = "noty({text: 'Раздел «<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
» удален.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['sorted']) {?><span id="sortedMessage" onclick = "noty({text: 'Разделы отсортированы.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: 'Раздел «<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
» НЕ сохранен.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['section_not_found']) {?><span id="sectionNotFoundError" onclick = "noty({text: 'Раздел не найден.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?><span id="nameError" onclick = "noty({text: 'Введите название раздела.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?><span id="fileNameError" onclick = "noty({text: 'Введите URL раздела.', layout: 'topCenter', type: 'error'});"></span><?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?><span id="fileNameExistsError" onclick = "noty({text: 'Раздел с таким URL уже существует.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?><span id="htaccessError" onclick = "noty({text: 'Невозможно сохранить файл .htaccess.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?><span id="serializationsError" onclick = "noty({text: 'Невозможно сохранить сериальный файл.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?><span id="fileNameProhibitedError" onclick = "noty({text: 'Такое URL запрещен.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?><span id="fileNameCharactersError" onclick = "noty({text: 'URL может состоять только из следующих символов: A-Z a-z 0-9 . , - _', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['sectionType']) {?><span id="sectionTypeError" onclick = "noty({text: 'Невозможно поменять тип. За разделом закреплены подразделы или контент.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type_content']) {?><span id="errorParentTypeContent" onclick = "noty({text: 'Тип контента не соответствует основному разделу.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type']) {?><span id="errorParentType" onclick = "noty({text: 'Раздел не может быть страницой!.', layout: 'topCenter', type: 'error'});"></span><?php }?>
    <?php echo '<script'; ?>
>
    
        $(document).ready(function () {
            
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?> $('#notSavedError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['section_not_found']) {?> $('#sectionNotFoundError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?> $('#nameError').click(); <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?> $('#fileNameError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?> $('#fileNameExistsError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?> $('#htaccessError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?> $('#serializationsError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?> $('#fileNameProhibitedError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?> $('#fileNameCharactersError').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_type_content']) {?> $('#errorTypeContent').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type_content']) {?> $('#errorParentTypeContent').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type']) {?> $('#errorParentType').click();<?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?> $('#deletedMessage').click();<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['messages']->value['sorted']) {?> $('#sortedMessage').click();<?php }?>
            
        });
        function deleteImageError(){noty({text: 'Картинка не удалена.',layout: 'topCenter',type: 'error'})}
        function deleteImageMessage(){noty({text: 'Картинка удалена.',layout: 'topCenter',type: 'success'})}
        function successImageMessage(){noty({text: 'Картинка успешно загружена',layout: 'topCenter',type: 'success'})}
        function moveUpMessage(){noty({text: 'Раздел перемещен вверх.',layout: 'topCenter',type: 'warning'})}
        function moveDownMessage(){noty({text: 'Раздел перемещен вниз.',layout: 'topCenter',type: 'warning'})}
        function topMenuMessage(){noty({text: 'Раздел добавлен в главное меню.',layout: 'topCenter',type: 'warning'})}
        function downMenuMessage(){noty({text: 'Раздел удален из главного меню.',layout: 'topCenter',type: 'warning'})}
        
        function sectionVisibleMessage(){noty({text: 'Раздел виден.',layout: 'topCenter',type: 'warning'})}
        function sectionHiddenMessage(){noty({text: 'Раздел скрыт.',layout: 'topCenter',type: 'warning'})}
        
               
    <?php echo '</script'; ?>
>
    <div class="modal" id="edit_image">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                    <h4 class="modal-title" id="defModalHead">Добавить описание к картинке</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group"><label class="field_name">Описание к картинке</label><input class="form-control" autocomplete="off" id="image_description" type="text" name="image_description" value=""/>
                    </div>
                    <div class="form-group"><label class="field_name">Переход(ссылка) с картинки</label><input class="form-control" id="image_url" type="text" name="image_url" value="" /> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary save_edit_image" type="submit" value="" data-dismiss="modal"> Сохранить </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['action']->value['edit']) {?>
        <div class="content-frame" style="margin-bottom:10px;">
            <div class="content-frame-top"> 
                <div class="col-md-3 nopadding_left"><h2>Разделы</h2></div>
                <div class="col-md-6 content-frame-body-left">
                    <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
                    <div class="upload-image alert message" role="alert"></div>
                </div>                          
            </div>
        </div>

        <div class="col-md-12">
            <?php echo '<script'; ?>
>$(function () {function e() {alias_touched || $("#alias").val(a()), meta_title_touched || $("#meta_title").val(m()), keywords_touched || $("#keywords").val(i()), description_touched || $("#description").val(t()), fileName_touched || $("#fileName").val(n())}function a() {return name = $("#name").val()}function m() {return name = $("#name").val()}  function i() {return name = $("#name").val()}function t() {return name = $("#name").val()}function n() {return fileName = $("#name").val(), fileName = fileName.replace(/[\s]+/gi, "<?php echo $_smarty_tpl->tpl_vars['config']->value['filename_word_separator'];?>
"), fileName = l(fileName), fileName = fileName.replace(/[^0-9a-z_\-]+/gi, "").toLowerCase()}function l(e) {for (var a = "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я".split("-"), i = "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya".split("-"), t = "", n = 0, l = e.length; l > n; n++) {var o = e.charAt(n),c = a.indexOf(o);t += c >= 0 ? i[c] : o}return t}alias_touched = !0, meta_title_touched = !0, keywords_touched = !0, description_touched = !0, fileName_touched = !0, ($("#alias").val() == a() || "" == $("#alias").val()) && (alias_touched = !1), ($("#meta_title").val() == i() || "" == $("#meta_title").val()) && (meta_title_touched = !1), ($("#keywords").val() == i() || "" == $("#keywords").val()) && (keywords_touched = !1),  ($("#description").val() == t() || "" == $("#description").val()) && (description_touched = !1), ($("#fileName").val() == n() || "" == $("#fileName").val()) && (fileName_touched = !1), $("#alias").change(function () {alias_touched = !0}), $("#meta_title").change(function () {meta_title_touched = !0}),$("#keywords").change(function () {keywords_touched = !0}), $("#description").change(function () {description_touched = !0}), $("#fileName").change(function () {fileName_touched = !0}), $("#name").keyup(function () {e()})});<?php echo '</script'; ?>
>

            <form action="sections.php" method="post" id="section" enctype="multipart/form-data">
                <input type="hidden" name="section[sectionId]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" />
                <input type="hidden" name="parentId" value="<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
" />
                <input type="hidden" name="action[save]" value="1" />
                <div class="panel panel-default tabs">                   
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">Основное</a></li>
                        <li class=""><a href="#summary" data-toggle="tab" aria-expanded="false">Анонс</a></li>
                        <li class=""><a href="#content" data-toggle="tab" aria-expanded="false">Подробнее</a></li>
                        <li class=""><a href="#content_two" data-toggle="tab" aria-expanded="false">Доп. контент</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['section']->value['photo_gallery'] == '1') {?><li class=""><a href="#gallery" data-toggle="tab" aria-expanded="false">Фотогалерея</a></li><?php }?>
                        <li class=""><a href="#advanced" data-toggle="tab" aria-expanded="false">Дополнительно</a></li>
                        <li class=""><a href="#misc" data-toggle="tab" aria-expanded="false">Seo</a></li>
                    </ul>                  
                    
                    <div class="panel-body tab-content nopadding">
                        <div class="tab-pane active" id="general">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <div class="col-md-6 col-xs-12 nopadding_left">
                                        <div class="col-md-6 col-xs-12 nopadding_left">
                                            <div class="form-group">
                                                <label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type']) {?>fError<?php }?>">Тип</label>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value,'id'=>"type",'name'=>'section[type]','selected'=>$_smarty_tpl->tpl_vars['section']->value['type'],'class'=>"form-control select"),$_smarty_tpl);?>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 nopadding_right">
                                            <div class="form-group">
                                                <label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['error_parent_type_content'] || $_smarty_tpl->tpl_vars['errors']->value['error_type_content']) {?>fError<?php }?>">Тип контента</label>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['typeContents']->value,'id'=>"type_content",'name'=>'section[type_content]','selected'=>$_smarty_tpl->tpl_vars['section']->value['type_content'],'class'=>"form-control select"),$_smarty_tpl);?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="field_name">Статус</label>
                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuses']->value,'name'=>'section[status]','id'=>'status','selected'=>$_smarty_tpl->tpl_vars['section']->value['status'],'class'=>"form-control select"),$_smarty_tpl);?>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 nopadding_right">
                                        <div class="col-md-12 col-xs-12 nopadding"><label class="field_name">Настройки раздела</label></div>
                                        <div class="col-md-6 col-xs-12 nopadding_left">
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="top_menu" name="section[top_menu]" value="1" <?php if ($_smarty_tpl->tpl_vars['section']->value['top_menu'] || !$_smarty_tpl->tpl_vars['section']->value) {?>checked<?php }?>/>
                                                    <label for="top_menu"><span class="chk-span"></span><i>Отображать в главном меню сайта</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="footer_menu" name="section[footer_menu]" value="1" <?php if ($_smarty_tpl->tpl_vars['section']->value['footer_menu']) {?>checked<?php }?>/>
                                                    <label for="footer_menu"><span class="chk-span"></span><i>Отображать в нижнем меню сайта</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="toMain" name="section[toMain]" value="1" <?php if ($_smarty_tpl->tpl_vars['section']->value['toMain']) {?>checked<?php }?>/>
                                                    <label for="toMain"><span class="chk-span"></span><i>Отображать на самом верху</i></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-xs-12 nopadding_right">
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="top_submenu" name="section[top_submenu]" value="1" <?php if ($_smarty_tpl->tpl_vars['section']->value['top_submenu']) {?>checked<?php }?>/>
                                                    <label for="top_submenu"><span class="chk-span"></span><i>Скрыть подразделы в главном меню для неавторизованных пользователей</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="photo_gallery" name="section[photo_gallery]" value="1" <?php if ($_smarty_tpl->tpl_vars['section']->value['photo_gallery']) {?>checked<?php }?>/>
                                                    <label for="photo_gallery"><span class="chk-span"></span><i>Фотогалерея в этом разделе</i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-xs-12 nopadding_left"> 
                                        <div class="form-group">
                                            <label class="field_name">Родительский раздел</label>                                                                                         
                                            <?php if ($_smarty_tpl->tpl_vars['parents']->value) {?>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['parents']->value,'name'=>'section[parentId]','id'=>'parentId','selected'=>(($tmp = @$_smarty_tpl->tpl_vars['section']->value['parentId'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['parentId']->value : $tmp),'class'=>"form-control select"),$_smarty_tpl);?>

                                            <?php } else { ?>
                                                <label class="field_name">Н/Д</label><input type="hidden" name="section[parentId]" value="0"/>
                                            <?php }?>
                                        </div>              
                                        <?php echo smarty_function_fetch_section(array('assign'=>'parent','section'=>$_smarty_tpl->tpl_vars['section']->value['parentId']),$_smarty_tpl);?>

                                                                                <div class="form-group">
                                            <label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?>fError<?php }?>">Имя</label>                                         
                                            <input class="form-control" autocomplete="off" id="name" type="text" name="section[name]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameExists'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?>fError<?php }?>">URL</label>
                                            <input class="form-control" id="fileName" type="text" name="section[fileName]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['fileName'];?>
" /> 
                                        </div>
                                        <div class="form-group">
                                            <label class="field_name">Альтернативное имя</label>
                                            <input class="form-control" autocomplete="off" id="alias" type="text" name="section[alias]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['alias'];?>
"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="field_name">Доп. поле</label>
                                            <input class="form-control" autocomplete="off" id="dop" type="text" name="section[dop]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['dop'];?>
"/>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_icon'] == '1') {?>
                                        <div class="form-group">
                                            <label class="field_name">Иконка раздела</label>
                                            <input class="form-control" autocomplete="off" id="section_icon" type="text" name="section[section_icon]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['section_icon'];?>
"/>
                                        </div>
                                        <?php }?>
                                    </div>

                                    <div class="col-md-4 nopadding_right"> 
                                        <?php if ($_smarty_tpl->tpl_vars['conf']->value['section_images'] == '1') {?>
                                        <div class="form-group">
                                            <div class="col-md-12 col-xs-12 nopadding">
                                                <label class="field_name">Основная картинка</label>
                                                <?php if ($_smarty_tpl->tpl_vars['section']->value['hasImage'] == '1') {?>   
                                                <div class="file-previewzo-obzor" id="imageOptions">
                                                    <div class="close fileinput-remove text-right" onclick="return deleteSectionImage(<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
)" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                                                    <div class="file-preview-thumbnails">
                                                        <div class="file-preview-frame" id="imageOptions">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['section']->value['images']['original']['url'];?>
" class="file-preview-image" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
">
                                                        </div>
                                                        <div id="ajaxStatus"></div>
                                                        <span id="deletingStatus"></span>
                                                        <span id="errorBlock"></span>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <div><input type="file" name="image" id="file-simple" data-preview-file-type="any"></div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="summary"><textarea name="section[summary]" class="description"><?php echo $_smarty_tpl->tpl_vars['section']->value['summary'];?>
</textarea></div>
                        <div class="tab-pane" id="content"><textarea name="section[content]" class="description"><?php echo $_smarty_tpl->tpl_vars['section']->value['content'];?>
</textarea></div> 
                        <div class="tab-pane" id="content_two"><textarea name="section[content_two]" class="description"><?php echo $_smarty_tpl->tpl_vars['section']->value['content_two'];?>
</textarea></div> 

                        <?php if ($_smarty_tpl->tpl_vars['section']->value['photo_gallery'] == '1') {?>
                        <div class="tab-pane" id="gallery">
                            <div class="panel-body">  
                                <div class="col-md-8 col-xs-12 nopadding">
                                    <div id="fileList">
                                        <div class="body-gallery">
                                            <div class="pull-left push-up-10 col-md-12 col-xs-12"><label class="field_name">Загруженные картинки</label></div>
                                            <div class="gallery" id="links">
                                            <?php if ($_smarty_tpl->tpl_vars['fileList']->value) {?>
                                                <?php $_smarty_tpl->_assignInScope('a', 1);?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fileList']->value, 'file', false, NULL, 'fileList', array (
));
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                                <div class="gallery-item item-<?php echo $_smarty_tpl->tpl_vars['file']->value['imageId'];?>
">
                                                    <div class="image" id="image-<?php echo $_smarty_tpl->tpl_vars['file']->value['imageId'];?>
">                              
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/uploads/gallery/medium-<?php echo $_smarty_tpl->tpl_vars['file']->value['fileName'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value['alt'];?>
"/>                                        
                                                        <ul class="gallery-item-controls">
                                                            <li><span class="edit_image" data-id="<?php echo $_smarty_tpl->tpl_vars['file']->value['imageId'];?>
" data-desc="<?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['file']->value['link'];?>
" data-toggle="modal" data-target="#edit_image"><i class="fa fa-pen"></i></span></li>
                                                            <li><span class="remove_image" data-id="<?php echo $_smarty_tpl->tpl_vars['file']->value['imageId'];?>
"><i class="fa fa-times"></i></span></li>
                                                        </ul>                                                                     
                                                    </div>
                                                    <div class="meta">
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['file']->value['fileName'];?>
</strong>
                                                        <span class="im_desc"><?php echo $_smarty_tpl->tpl_vars['file']->value['description'];?>
</span>
                                                        <span class="im_link"><?php echo $_smarty_tpl->tpl_vars['file']->value['link'];?>
</span>
                                                    </div>                                
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value == 4) {?>
                                                <?php $_smarty_tpl->_assignInScope('a', 0);?>
                                                <div class="clearfix"></div>
                                                <?php }?>
                                                <?php $_smarty_tpl->_assignInScope('a', $_smarty_tpl->tpl_vars['a']->value+1);?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <div class="col-md-12 col-xs-12 nopadding"><label class=" push-up-10  push-down-10 control-label"><label class="field_name">Добавьте картинки</label></label></div>
                                    <div class="col-md-12 col-xs-12 nopadding"><div id="dZUpload" class="dropzone dropzone-mini"><div class="dz-default dz-message"></div></div></div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                            
                        <div class="tab-pane" id="advanced">
                            <?php if ($_smarty_tpl->tpl_vars['section']->value['modifiedOn']) {?>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Статус</h5></div>
                            <div class="clearfix">
                                <label class="col-md-3 col-xs-12 control-label control_text_right"><label class="field_name">Изменено</label></label>
                                <div class="col-md-6 col-xs-12" style="padding-top:5px;">
                                    <i><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['modifiedOn'], ENT_QUOTES);?>
 (<?php echo htmlspecialchars_decode((($tmp = @$_smarty_tpl->tpl_vars['section']->value['modifiedBy']['loginName'])===null||$tmp==='' ? "unknown user" : $tmp), ENT_QUOTES);?>
)</i>
                                </div>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['section']->value['addedOn']) {?>
                            <div class="clearfix">
                                <label class="col-md-3 col-xs-12 control-label control_text_right"><label class="field_name">Создано</label></label>
                                <div class="col-md-6 col-xs-12" style="padding-top:7px;">
                                    <i><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['addedOn'], ENT_QUOTES);?>
 (<?php echo htmlspecialchars_decode((($tmp = @$_smarty_tpl->tpl_vars['section']->value['addedBy']['loginName'])===null||$tmp==='' ? "unknown user" : $tmp), ENT_QUOTES);?>
)</i>
                                </div>
                            </div>
                            <?php }?>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Раздел</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Шаблон</label>
                                <div class="col-md-3 col-xs-12">
                                    <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['templates']->value,'values'=>$_smarty_tpl->tpl_vars['templates']->value,'selected'=>$_smarty_tpl->tpl_vars['section']->value['templateName'],'name'=>"section[templateName]",'class'=>"form-control select"),$_smarty_tpl);?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Кэширование</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="0" id="isCachedDefault" <?php if ($_smarty_tpl->tpl_vars['section']->value['isCached'] == 0) {?>checked<?php }?>><i>Настройки по-умолчанию</i></label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="-1" id="isCachedDisabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['isCached'] == -1) {?>checked<?php }?>><i>Отключить кэширование</i></label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="1" id="isCachedEnabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['isCached'] == 1) {?>checked<?php }?>><i>Включить кэширование на</i></label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingTimeOptions']->value,'name'=>"section[cacheTime]",'selected'=>$_smarty_tpl->tpl_vars['section']->value['cacheTime'],'class'=>"form-control select"),$_smarty_tpl);?>

                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingPeriodOptions']->value,'name'=>"section[cachePeriod]",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['section']->value['cachePeriod'])===null||$tmp==='' ? 86400 : $tmp),'class'=>"form-control select"),$_smarty_tpl);?>
 
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Комментарии</label>
                                <div class="col-md-6 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="0" id="commentsEnabledDefault" <?php if ($_smarty_tpl->tpl_vars['section']->value['commentsEnabled'] == 0) {?>checked<?php }?>><i>Настройки по-умолчанию</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="-1" id="commentsEnabledDisabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['commentsEnabled'] == -1) {?>checked<?php }?>><i>Отключить комментарии</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="1" id="commentsEnabledEnabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['commentsEnabled'] == 1) {?>checked<?php }?>><i>Включить комментарии </i>
                                        </label>
                                    </div>			
                                </div>
                            </div>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Subsections</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Шаблон</label>
                                <div class="col-md-3 col-xs-12">
                                    <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['templates']->value,'values'=>$_smarty_tpl->tpl_vars['templates']->value,'selected'=>$_smarty_tpl->tpl_vars['section']->value['subTemplateName'],'name'=>"section[subTemplateName]",'class'=>"form-control select"),$_smarty_tpl);?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Кэширование</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subIsCached]" value="0" id="subIsCachedDefault" <?php if ($_smarty_tpl->tpl_vars['section']->value['subIsCached'] == 0) {?>checked<?php }?>><i>Настройки по-умолчанию</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subIsCached]" value="-1" id="subIsCachedDisabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['subIsCached'] == -1) {?>checked<?php }?>><i>Отключить кэширование</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[subIsCached]" value="1" id="subIsCachedEnabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['subIsCached'] == 1) {?>checked<?php }?>><i>Включить кэширование на</i></label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingTimeOptions']->value,'name'=>"section[subCacheTime]",'selected'=>$_smarty_tpl->tpl_vars['section']->value['subCacheTime'],'class'=>"form-control select"),$_smarty_tpl);?>

                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingPeriodOptions']->value,'name'=>"section[subCachePeriod]",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['section']->value['subCachePeriod'])===null||$tmp==='' ? 86400 : $tmp),'class'=>"form-control select"),$_smarty_tpl);?>
 
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Комментарии</label>
                                <div class="col-md-6 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="0" id="subCommentsEnabledDefault" <?php if ($_smarty_tpl->tpl_vars['section']->value['subCommentsEnabled'] == 0) {?>checked<?php }?>>
                                            <i>Настройки по-умолчанию</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="-1" id="subCommentsEnabledDisabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['subCommentsEnabled'] == -1) {?>checked<?php }?>>
                                            <i>Отключить комментарии</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="1" id="subCommentsEnabledEnabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['subCommentsEnabled'] == 1) {?>checked<?php }?>>
                                            <i>Включить комментарии</i>
                                        </label>
                                    </div>			
                                </div>
                            </div>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Articles</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Шаблон</label>
                                <div class="col-md-3 col-xs-12">
                                    <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['templates']->value,'values'=>$_smarty_tpl->tpl_vars['templates']->value,'selected'=>$_smarty_tpl->tpl_vars['section']->value['artTemplateName'],'name'=>"section[artTemplateName]",'class'=>"form-control select"),$_smarty_tpl);?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">Кэширование</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="0" id="artIsCachedDefault" <?php if ($_smarty_tpl->tpl_vars['section']->value['artIsCached'] == 0) {?>checked<?php }?>><i>Настройки по-умолчанию</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="-1" id="artIsCachedDisabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['artIsCached'] == -1) {?>checked<?php }?>><i>Отключить кэширование</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="1" id="artIsCachedEnabled" <?php if ($_smarty_tpl->tpl_vars['section']->value['artIsCached'] == 1) {?>checked<?php }?>><i>Включить кэширование на</i>
                                        </label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingTimeOptions']->value,'name'=>"section[artCacheTime]",'selected'=>$_smarty_tpl->tpl_vars['section']->value['artCacheTime'],'class'=>"form-control select"),$_smarty_tpl);?>

                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cachingPeriodOptions']->value,'name'=>"section[artCachePeriod]",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['section']->value['artCachePeriod'])===null||$tmp==='' ? 86400 : $tmp),'class'=>"form-control select"),$_smarty_tpl);?>

                                    </div> 
                                </div>
                            </div>
                            <div class="clear" style="margin-bottom: 10px;"></div>
                        </div>   
                        <div class="tab-pane" id="misc">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <div class="form-group">
                                        <label class="field_name">Заголовок (Meta title)</label>
                                        <input class="form-control" autocomplete="off" id="meta_title" type="text" name="section[meta_title]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['meta_title'];?>
"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">Ключевые слова (Meta keywords)</label>
                                        <textarea name="section[keywords]" id="keywords" class="form-control" rows="4"><?php echo $_smarty_tpl->tpl_vars['section']->value['keywords'];?>
</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">Описание (Meta description)</label>
                                        <textarea name="section[description]" id="description" class="form-control" rows="4"><?php echo $_smarty_tpl->tpl_vars['section']->value['description'];?>
</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div align="center" class="col-md-12 main main_buttons">
                    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" /> &nbsp;
                    <a class="btn btn-primary" href="sections.php<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>?parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>">Отменить</a>
                </div>
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value['confirmDelete']) {?>

        <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="page-title"><h2>Разделы</h2></div></div></div>
        <div class="col-md-12">
            <form action="sections.php" method="post" id="confirmDelete">
                <input type="hidden" name="section[sectionId]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" />
                <input type="hidden" name="parentId" value="<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
" />
                <div class=" panel panel-colorful">
                    <div class="panel-heading" id="templateNav">Удаляется &laquo<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
&raquo;</div>
                    <div class="panel-body">
                    <?php if ($_smarty_tpl->tpl_vars['section']->value['hasSubsections'] || $_smarty_tpl->tpl_vars['section']->value['hasArticles']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['section']->value['hasArticles']) {?>
                        <div class="form-group">
                            <label class="field_name">Контент</label>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['articleOptions']->value,'name'=>'action[moveArticlesTo]','class'=>"form-control select"),$_smarty_tpl);?>

                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['section']->value['hasSubsections']) {?>
                        <div class="form-group">
                            <label class="field_name">Подразделы и их статьи</label> 
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['subsectionOptions']->value,'name'=>'action[moveSubsectionsTo]','class'=>"form-control select"),$_smarty_tpl);?>

                        </div>
                        <?php }?>
                    <?php }?>

                    Вы уверены, что хотите удалить раздел<?php if ($_smarty_tpl->tpl_vars['section']->value['hasSubsections'] || $_smarty_tpl->tpl_vars['section']->value['hasArticles']) {?> и выполнить выбранные действия<?php }?>? 
                    </div>
                    <div class="panel-footer">
                        <input class="btn btn-danger" type="submit" name="action[deleteConfirmed]" value="&nbsp; Да &nbsp;" /> &nbsp;
                        <a class="btn btn-primary pull-right" href="sections.php<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>?parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>">Отменить</a>
                    </div>                            
                </div>
            </form>
        </div>	
        
    <?php } else { ?>

        <div class="content-frame" style="margin-bottom:10px;">
            <div class="content-frame-top">                        
                <div class="col-md-3 col-xs-3 nopadding_left"><h2>Разделы</h2></div>
                <div class="col-md-6 col-xs-6 content-frame-body-left"><div id="ajaxStatus" class="alert alert-success col-md-6 info-box-img" role="alert"></div></div>
                <div class="col-md-3 col-xs-3 nopadding_right">                                                  
                    <div class="pull-right"> 
                        <a class="btn btn-danger" href="sections.php?action[edit]=true<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>" data-toggle="tooltip" data-placement="left" data-original-title="Добавить раздел"><i class="fa fa-plus"></i></a>
                        <?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&nbsp;&nbsp; 
                        <a class="btn btn-primary" href="sections.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Наверх в корень"><i class="fa fa-reply-all"></i></a>
                            <?php if ($_smarty_tpl->tpl_vars['parent']->value['parentId']) {?> &nbsp;&nbsp; 
                            <a class="btn btn-primary" href="sections.php?parentId=<?php echo $_smarty_tpl->tpl_vars['parent']->value['parentId'];?>
" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $_smarty_tpl->tpl_vars['parent']->value['parent']['name'];?>
"><i class="fa fa-reply"></i></a>
                            <?php }?> 
                        <?php }?>                           
                    </div>   
                </div>                           
            </div>  
        </div>                     
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-actions table-hover" id="sections">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50">ID</th>
                                    <th class="">Заголовок</th>
                                    <th class="">Альтернативное имя</th>
                                    <th class="">Путь</th>
                                    <th class="" width="150">Тип</th>
                                    <th class="" width="150">Тип контента</th>
                                    <th class="text-center" width="100">Действие</th>
                                </tr>
                            </thead>
                            <?php if ($_smarty_tpl->tpl_vars['sections']->value) {?>
                            <tbody>   
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section', false, NULL, 'sections', array (
));
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>                                      
                            <tr id="section-<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['section']->value['status'] == 'hidden') {?>opacity7<?php }?>">
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
</td>
                                <td  nowrap="nowrap">
                                    <?php if ($_smarty_tpl->tpl_vars['section']->value['hasSubsections']) {?><a href="sections.php?parentId=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" style="border-bottom: 1px dashed;"><?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['section']->value['name'];
}?>
                                </td>
                                <td  nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['section']->value['alias'];?>
</td>
                                <td nowrap="nowrap"><a href="<?php echo $_smarty_tpl->tpl_vars['section']->value['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['section']->value['fileName'] == 'index') {?>/<?php } else { ?>/<?php echo $_smarty_tpl->tpl_vars['section']->value['fileName'];?>
/<?php }?></a></td>
                                <td class="" nowrap="nowrap"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['typeName'], ENT_QUOTES);?>
</td>
                                <td class="" nowrap="nowrap"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['typeContentName'], ENT_QUOTES);?>
</td>
                                <td class="btn-link-action" nowrap="nowrap">
                                    <a class="status_selection btn btn-rounded <?php if ($_smarty_tpl->tpl_vars['section']->value['status'] == 'hidden') {?>btn-danger<?php } else { ?>btn-green<?php }?>" style="width: 35px" id="<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['status'];?>
">
                                        <span class="fa fa-eye<?php if ($_smarty_tpl->tpl_vars['section']->value['status'] == 'hidden') {?>-slash<?php }?>" style="font-size: 13px;" data-toggle="tooltip" data-placement="top" data-original-title="Поменять статуc"></span>
                                    </a>

                                    <div class="form-group" style="width: 25px">
                                        <div class="checkbox-material inline-block">
                                            <input class="up_menu<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" type="checkbox" id="up_menu-<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" <?php if ($_smarty_tpl->tpl_vars['section']->value['top_menu'] == '1') {?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['section']->value['top_menu'];?>
"/>
                                            <label class="top_menu" id="t<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
" <?php if ($_smarty_tpl->tpl_vars['section']->value['top_menu'] == '1') {?>data-val="0"<?php } else { ?>data-val="1"<?php }?> for="up_menu-<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
"><span class="chk-span" data-toggle="tooltip" data-placement="top" data-original-title="Показать в главном меню" style="margin:0px;"></span></label>
                                        </div>
                                    </div>
                                    <a class="btn btn-rounded" href="sections.php?action[edit]=true&section[sectionId]=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>">
                                        <span class="fa fa-pen" data-toggle="tooltip" data-placement="top" data-original-title="Редактировать"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveUp(<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
, '<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES);?>
')">
                                        <span class="fa fa-arrow-up" data-toggle="tooltip" data-placement="top" data-original-title="Поднять вверх"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveDown(<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
, '<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES);?>
')">
                                        <span class="fa fa-arrow-down" data-toggle="tooltip" data-placement="top" data-original-title="Опустить вниз"></span>
                                    </a>
                                    <a class="btn btn-danger btn-rounded" href="sections.php?action[confirmDelete]=true&section[sectionId]=<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>">
                                        <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="Удалить"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="small" colspan="3">Результаты с <b><?php echo $_smarty_tpl->tpl_vars['pageNums']->value['startIteration'];?>
</b> по <b><?php echo $_smarty_tpl->tpl_vars['pageNums']->value['endIteration'];?>
</b> из <b><?php echo $_smarty_tpl->tpl_vars['pageNums']->value['totalItems'];?>
</b></td>
                                    <td align="right" colspan="4">
                                        <?php if ($_smarty_tpl->tpl_vars['pageNums']->value['pages']) {?>
                                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageNums']->value['pages'], 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                                            <li class="active"><a href="sections.php?page=<?php echo $_smarty_tpl->tpl_vars['number']->value;
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</a></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['number']->value == '...') {?>
                                                ...
                                            <?php } else { ?>
                                            <li><a href="sections.php?page=<?php echo $_smarty_tpl->tpl_vars['number']->value;
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo $_smarty_tpl->tpl_vars['parentId']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</a></li>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>  
                                        <?php }?>
                                    </td>
                                </tr> 
                            </tfoot>
                            <?php } else { ?>  
                            <tbody><tr class="odd"><td class="data none" colspan="7" align="center">- Не найдено -</td></tr></tbody>
                            <?php }?>   
                        </table>
                    </div>                                
                </div>
            </div>                                                  
        </div>
    
    <?php }?>

</div>
<?php echo '<script'; ?>
>
    var sectionId = '<?php echo $_smarty_tpl->tpl_vars['section']->value['sectionId'];?>
';
    
    $(document).ready(function () {
        Dropzone.autoDiscover = false; 
        $("#dZUpload").dropzone({ 
            url: "sections.php", 
            addRemoveLinks: false, 
            maxFilesize: 2,
            acceptedFiles: "image/*",
            params: {'action':'uploadImage','sectionId': sectionId},
            success: function (file, response) { 
                file.previewElement.classList.add("dz-success"); 
                successImageMessage()
                $('#links').html(response);
                setTimeout(function(){
                    $('.dz-success').fadeOut('slow');
                },2500);
            }, 
            error: function (file, response) { file.previewElement.classList.add("dz-error"); }
        }); 
    }); 
    
    $("#file-simple").fileinput({
        showUpload: false,
        uploadClass: "btn btn-success",
        uploadLabel: "Upload",
        showCaption: false,
        showRemove: true,
        removeClass: "btn btn-danger",
        removeLabel: "Удалить",
        browseClass: "btn btn-primary",
        fileType: "any",
        showPreview: true,
        allowedFileTypes: ["image"],
        allowedFileExtensions: ["jpg", "jpeg", "gif", "png"],
        elErrorContainer: "#errorBlock",
        overwriteInitial: true,
        maxFileSize: 2000
    });

    $('.top_menu').click(function(){	
        var id = $(this).attr("data-id");
        var ckVal = $(this).attr("data-val");
        $.post('sections.php', {id: id, check: ckVal, action: 'menu'}, function(data){
            console.log(data.check);
            $(".up_menu"+id).val(data.check);
            if (data.check == 1){
                downMenuMessage();
                $('label#t'+id).attr('data-val', data.check);
            }else{
                topMenuMessage();
                $('label#t'+id).attr('data-val', data.check);
            }
        }, 'json');
    });	

    $('.status_selection').click(function(e){	
        var id = $(this).attr("id");
        var choiceVal = $(this).attr('value');
        $.post('sections.php', {id: id, choice: choiceVal, action: 'status'}, function(data){
            //console.log(data.choice);
            if (data.choice == 'visible'){
                sectionVisibleMessage();
                $('.status_selection#'+id).attr('value', data.choice);
                $('.status_selection#'+id).attr('class', 'status_selection btn btn-rounded btn-green');
                $('.status_selection#'+id+' span').attr('class', 'fa fa-eye');
            }else{
                sectionHiddenMessage();
                $('.status_selection#'+id).attr('value', data.choice);
                $('.status_selection#'+id).attr('class', 'status_selection btn btn-rounded btn-danger');
                $('.status_selection#'+id+' span').attr('class', 'fa fa-eye-slash');
            }
        }, 'json');
    });

    $(document).ready(function(){  
        var type = $('#type :selected').val();
        if (type === 'plain') {
            $('#type_content').prop("disabled", true); 
        }
        $('#type').change(function() {
            var type_content = $(this).val();
            $('#type_content').prop("disabled", true); 
            if (type_content === 'tree') {
                //console.log(type_content);
                $('#type_content').prop("disabled", false);
                $('#type_content').selectpicker('refresh');
            } 
        });
    });
    

   $(".edit_image").click(function() {
        var id   = $(this).data('id');
        var link = $(this).data('link');
        var desc = $(this).data('desc');
        $('.save_edit_image').val(id);
        $('#image_description').val(desc);
        $('#image_url').val(link);
    });
    
    $('.save_edit_image').click(function(e){	
        var id = $('.save_edit_image').val();
        var desc = $('#image_description').val();
        var link = $('#image_url').val();
        $.post('sections.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
            if (data.update == 1){            
                $('.gallery-item.item-'+id+' .im_desc').text(desc);
                $('.gallery-item.item-'+id+' .im_link').text(link);
            }

        }, 'json');
    });

    
    
    
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
