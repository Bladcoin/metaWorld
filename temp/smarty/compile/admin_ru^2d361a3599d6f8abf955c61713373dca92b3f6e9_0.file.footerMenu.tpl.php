<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:00:26
  from 'C:\xampp\htdocs\admin\templates\footerMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb408a2982e0_14143417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d361a3599d6f8abf955c61713373dca92b3f6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\footerMenu.tpl',
      1 => 1603794286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb408a2982e0_14143417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"footerMenu",'title'=>"Разделы"), 0, false);
?>
<div class="page-content-wrap">
    
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Раздел «<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
» сохранен.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?><span id="deletedMessage" onclick = "noty({text: 'Раздел «<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
» удален.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['sorted']) {?><span id="sortedMessage" onclick = "noty({text: 'Разделы отсортированы.', layout: 'topCenter', type: 'success'});"></span><?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: 'Раздел «<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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
>$(function () {function e() {alias_touched || $("#alias").val(a()), meta_title_touched || $("#meta_title").val(m()), keywords_touched || $("#keywords").val(i()), description_touched || $("#description").val(t()), fileName_touched || $("#fileName").val(n())}function a() {return name = $("#name").val()}function m() {return name = $("#name").val()}  function i() {return name = $("#name").val()}function t() {return name = $("#name").val()}function n() {return fileName = $("#name").val(), fileName = fileName.replace(/[\s]+/gi, "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['filename_word_separator'], ENT_QUOTES, 'UTF-8', true);?>
"), fileName = l(fileName), fileName = fileName.replace(/[^0-9a-z_\-]+/gi, "").toLowerCase()}function l(e) {for (var a = "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я".split("-"), i = "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya".split("-"), t = "", n = 0, l = e.length; l > n; n++) {var o = e.charAt(n),c = a.indexOf(o);t += c >= 0 ? i[c] : o}return t}alias_touched = !0, meta_title_touched = !0, keywords_touched = !0, description_touched = !0, fileName_touched = !0, ($("#alias").val() == a() || "" == $("#alias").val()) && (alias_touched = !1), ($("#meta_title").val() == i() || "" == $("#meta_title").val()) && (meta_title_touched = !1), ($("#keywords").val() == i() || "" == $("#keywords").val()) && (keywords_touched = !1),  ($("#description").val() == t() || "" == $("#description").val()) && (description_touched = !1), ($("#fileName").val() == n() || "" == $("#fileName").val()) && (fileName_touched = !1), $("#alias").change(function () {alias_touched = !0}), $("#meta_title").change(function () {meta_title_touched = !0}),$("#keywords").change(function () {keywords_touched = !0}), $("#description").change(function () {description_touched = !0}), $("#fileName").change(function () {fileName_touched = !0}), $("#name").keyup(function () {e()})});<?php echo '</script'; ?>
>

            <form action="footerMenu.php" method="post" id="section" enctype="multipart/form-data">
                <input type="hidden" name="section[sectionId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
" />
                <input type="hidden" name="parentId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                <input type="hidden" name="action[save]" value="1" />
                                    <div class="col-md-12 col-xs-12 nopadding_left">                                                              
                                        <div class="form-group">
                                            <label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?>fError<?php }?>">Имя</label>                                         
                                            <input class="form-control" autocomplete="off" id="name" type="text" name="section[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <style type="text/css">
                                            
                                            .menuSections {
                                            background: #036c89;
                                            display: flex;
                                            align-items: center;
                                            padding: 9px;
                                            padding-right: 35px;
                                            justify-content: center;
                                            color: white;
                                            margin-right: 5px;
                                            margin-bottom: 5px;
                                            position: relative;
                                            }
                                            .deleteMenu {
                                                cursor: pointer;
                                                position: absolute;
                                                background: #333333;
                                                top: 0;
                                                right: 0;
                                                padding: 9px;
                                            }
                                            .deleteMenu:hover {
                                                background: #204d74;
                                            }
                                            
                                        </style>
                                        <div id="menuSections" style="display: flex;float:left;flex-wrap: wrap;">
                                            <?php if ($_smarty_tpl->tpl_vars['section']->value['menus']) {?>
                                            <?php $_smarty_tpl->_assignInScope('menuSections', explode(',',$_smarty_tpl->tpl_vars['section']->value['menus']));?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuSections']->value, 'menuSection');
$_smarty_tpl->tpl_vars['menuSection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuSection']->value) {
$_smarty_tpl->tpl_vars['menuSection']->do_else = false;
?>
                                            <?php echo smarty_function_fetch_section(array('assign'=>'menuSec','section'=>$_smarty_tpl->tpl_vars['menuSection']->value),$_smarty_tpl);?>

                                            <div class="menuSections"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSec']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<div class="deleteMenu" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSec']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
">X</div></div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </div>
                                        <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['menus'], ENT_QUOTES, 'UTF-8', true);?>
" name="section[menus]">
                                        <div class="col-md-2 col-xs-6 nopadding_left">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['parents']->value,'name'=>'123','id'=>'parentId','selected'=>(($tmp = @$_smarty_tpl->tpl_vars['section']->value['parentId'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['parentId']->value : $tmp),'class'=>"form-control select"),$_smarty_tpl);?>

                                        </div>
                                        <button type="button" class="btn btn-primary"  name="action[addMenu]">Добавить пункт в меню</button>
                                        <div class="form-group">
                                            <input class="form-control" id="fileName" type="hidden" name="section[fileName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" /> 
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" autocomplete="off" id="alias" type="hidden" name="section[alias]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                    </div>
                </div>
                <div align="center" class="col-md-12 main main_buttons">
                    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" /> &nbsp;
                    <a class="btn btn-primary" href="footerMenu.php<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>?parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
}?>">Отменить</a>
                </div>
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value['confirmDelete']) {?>

        <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="page-title"><h2>Разделы</h2></div></div></div>
        <div class="col-md-12">
            <form action="footerMenu.php" method="post" id="confirmDelete">
                <input type="hidden" name="section[sectionId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
" />
                <input type="hidden" name="parentId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                <div class=" panel panel-colorful">
                    <div class="panel-heading" id="templateNav">Удаляется &laquo<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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
                        <a class="btn btn-primary pull-right" href="footerMenu.php<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>?parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
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
                        <a class="btn btn-danger" href="footerMenu.php?action[edit]=true<?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
}?>" data-toggle="tooltip" data-placement="left" data-original-title="Добавить раздел"><i class="fa fa-plus"></i></a>
                        <?php if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&nbsp;&nbsp; 
                        <a class="btn btn-primary" href="footerMenu.php" data-toggle="tooltip" data-placement="bottom" data-original-title="Наверх в корень"><i class="fa fa-reply-all"></i></a>
                            <?php if ($_smarty_tpl->tpl_vars['parent']->value['parentId']) {?> &nbsp;&nbsp; 
                            <a class="btn btn-primary" href="footerMenu.php?parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['parentId'], ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['parent']['name'], ENT_QUOTES, 'UTF-8', true);?>
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
                            <tr id="section-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td  nowrap="nowrap">
                                    <?php if ($_smarty_tpl->tpl_vars['section']->value['hasSubsections']) {?><a href="footerMenu.php?parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
" style="border-bottom: 1px dashed;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>
                                </td>
                                <td  nowrap="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td class="btn-link-action" nowrap="nowrap">
                                    <a class="btn btn-rounded" href="footerMenu.php?action[edit]=true&section[sectionId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
}?>">
                                        <span class="fa fa-pen" data-toggle="tooltip" data-placement="top" data-original-title="Редактировать"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveUp(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
')">
                                        <span class="fa fa-arrow-up" data-toggle="tooltip" data-placement="top" data-original-title="Поднять вверх"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveDown(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
')">
                                        <span class="fa fa-arrow-down" data-toggle="tooltip" data-placement="top" data-original-title="Опустить вниз"></span>
                                    </a>
                                    <a class="btn btn-danger btn-rounded" href="footerMenu.php?action[confirmDelete]=true&section[sectionId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
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
                                    <td class="small" colspan="3">Результаты с <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['startIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> по <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['endIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> из <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['totalItems'], ENT_QUOTES, 'UTF-8', true);?>
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
                                            <li class="active"><a href="footerMenu.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['number']->value == '...') {?>
                                                ...
                                            <?php } else { ?>
                                            <li><a href="footerMenu.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['parentId']->value) {?>&parentId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
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
    var sectionId = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['sectionId'], ENT_QUOTES, 'UTF-8', true);?>
';
    
    $(document).ready(function () {
        Dropzone.autoDiscover = false; 
        $("#dZUpload").dropzone({ 
            url: "footerMenu.php", 
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
        $.post('footerMenu.php', {id: id, check: ckVal, action: 'menu'}, function(data){
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
        $.post('footerMenu.php', {id: id, choice: choiceVal, action: 'status'}, function(data){
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
        $.post('footerMenu.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
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
