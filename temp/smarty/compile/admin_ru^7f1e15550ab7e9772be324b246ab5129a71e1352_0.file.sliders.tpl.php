<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-13 10:00:04
  from 'C:\xampp\htdocs\admin\templates\sliders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62f75a04e69457_11899721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1e15550ab7e9772be324b246ab5129a71e1352' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\sliders.tpl',
      1 => 1603860704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62f75a04e69457_11899721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"sliders",'title'=>"Слайдер"), 0, false);
?>
<div class="page-content-wrap">
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Слайд &laquo;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
&raquo; сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['access_denied']) {?><span id="accessDeniedError" onclick = "noty({text: 'Доступ запрещен.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?><span id="titleError" onclick = "noty({text: 'Введите заголовок.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['sectionId']) {?><span id="sectionIdError" onclick = "noty({text: 'Выберите раздел.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: 'Слайд &laquo;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
&raquo; НЕ сохранен.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['no_sections']) {?><span id="noSectionsError" onclick = "noty({text: 'Перед добавлением слайда, добавьте хотя бы один раздел.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['image_not_saved']) {?><span id="imageNotSavedError" onclick = "noty({text: 'Картинка НЕ сохранена.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['article_not_found']) {?><span id="articleNotFoundError" onclick = "noty({text: 'Слайд не найден или доступ запрещен.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?><span id="fileNameError" onclick = "noty({text: 'Введите имя файла.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?><span id="fileNameExistsError" onclick = "noty({text: 'Слайд с таким URL уже существует. Введите другой URL.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?><span id="htaccessError" onclick = "noty({text: 'Невохможно сохранить файл .htaccess.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?><span id="serializationsError" onclick = "noty({text: 'Невозможно сохранить сериальный файл.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?><span id="fileNameProhibitedError" onclick = "noty({text: 'Такое имя файла запрещено.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?><span id="fileNameCharactersError" onclick = "noty({text: 'URL может состоять только из следующих символов: A-Z a-z 0-9 . , - _', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php echo '<script'; ?>
>
  	
    $(document).ready(function () {
      
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['access_denied']) {?> $('#accessDeniedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?> $('#titleError').click(); <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['sectionId']) {?> $('#sectionIdError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?> $('#notSavedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_sections']) {?> $('#noSectionsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['image_not_saved']) {?> $('#imageNotSavedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['article_not_found']) {?> $('#articleNotFoundError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?> $('#fileNameError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?> $('#fileNameExistsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?> $('#htaccessError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?> $('#serializationsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?> $('#fileNameProhibitedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?> $('#fileNameCharactersError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
      //<?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#deleteImageMessage').click();<?php }?>
      
    });
    function deleteImageMessage(){noty({text: 'Картинка удалена.',layout: 'topRight',type: 'success'})}
    function deleteSlidesMessage(){noty({text: 'Слайд удален.',layout: 'topRight',type: 'success'})}
             
  <?php echo '</script'; ?>
>
  
<?php if ($_smarty_tpl->tpl_vars['action']->value['edit']) {?>
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"> 
      <div class="col-md-3 nopadding_left"><h2>Слайдер</h2></div>                                                
      <div class="col-md-4 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
        <div class="upload-image alert" role="alert"></div>
        <span id="deletingStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></span>
		  </div>
		</div>
	</div>
  
	<form action="sliders.php" method="post" id="slider" enctype="multipart/form-data">
	  <input type="hidden" name="slider[sliderId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="action[save]" value="1" />
    <div class="col-md-12">
      <div class="panel panel-default tabs ">                   
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">Основное</a></li>
          <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_summary'] == '1') {?> <li class=""><a href="#summary" data-toggle="tab" aria-expanded="false">Небольшое описание</a></li><?php }?>
          <li class=""><a href="#misc" data-toggle="tab" aria-expanded="false">Разное</a></li>
        </ul>                  
        <div class="panel-body tab-content nopadding">
	        <div class="tab-pane active" id="general">
            <div class="panel panel-default">
              <div class="panel-body">  
                <div class="col-md-8">
                  <div class="col-md-6 nopadding_left">
                    <div class="form-group"><label class="field_name">Сортировка</label><i data-toggle="tooltip" data-placement="top" data-original-title="Порядок публикации на сайте" class="fa fa-question-circle"></i></label><input class="form-control" autocomplete="off" type="text" name="slider[orderBy]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['orderBy'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                  </div> 
                  <div class="col-md-6 nopadding_right">
                    <div class="form-group"><label class="field_name">Статус</label><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuses']->value,'name'=>'slider[status]','selected'=>$_smarty_tpl->tpl_vars['slider']->value['status'],'class'=>"form-control select"),$_smarty_tpl);?>
</div> 
                  </div>
                  <div class="form-group"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['title']) {?>fError<?php }?>">Заголовок</label><input class="form-control" autocomplete="off" type="text" name="slider[title]" id="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></div> 
                  <div class="form-group"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameExists'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited'] || $_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?>fError<?php }?>">URL</label><input class="form-control" autocomplete="off" type="text" name="slider[fileName]" id="filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                  <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_alias'] == '1') {?> 
                  <div class="form-group"><label class="field_name">Подзаголовок</label><input class="form-control" autocomplete="off" type="text" name="slider[alias]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_text'] == '1') {?> 
                  <div class="form-group"><label class="field_name">Дополнительное поле для текста</label><input class="form-control" autocomplete="off" type="text" name="slider[text]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_link'] == '1') {?> 
                  <div class="form-group"><label class="field_name">Ссылка</label><input class="form-control" autocomplete="off" type="text" name="slider[links]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['links'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                  <?php }?>   
                </div>
                <div class="col-md-4"> 
                  <div class="form-group ">
                    <div class="col-md-12 nopadding"><label class="field_name">Основная картинка</label>                                                                                          
                      <?php if ($_smarty_tpl->tpl_vars['slider']->value['images']) {?>
                      <div class="file-previewzo-obzor" id="imageOptions">
                            <div class="close fileinput-remove text-right" onclick="return deleteSliderImage(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
);" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                            <div class="file-preview-thumbnails">
                                <div class="file-preview-frame" id="imageOptions">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/sliders/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['images']['medium']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" class="file-preview-image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['images']['medium']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
">
  						        </div>
  		                    </div>
  		                </div>
                        <?php }?>
                        <div class=""><input type="file" multiple="" name="image" id="file-simple"></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
    	    	</div>
  	    	<?php if ($_smarty_tpl->tpl_vars['conf']->value['slider_summary'] == '1') {?> 
  	    	<div class="tab-pane" id="summary"><textarea name="slider[summary]" class="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
</textarea> </div>
          <?php }?>
          <div class="tab-pane" id="misc">
            <div class="block" style="padding: 20px 5px 10px;">

              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Дата публикации</label></div>
                <div class="col-md-6 nopadding_right date">                                                                                            
                  <?php echo smarty_function_html_select_date(array('time'=>(($tmp = @$_smarty_tpl->tpl_vars['slider']->value['publishedOn'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['adjustedNow']->value : $tmp),'day_value_format'=>"%02d",'field_array'=>"slider",'prefix'=>'','class'=>"form-control select"),$_smarty_tpl);?>
 - 
                  <?php if ($_smarty_tpl->tpl_vars['config']->value['use_24_hours']) {?>
                    <?php echo smarty_function_html_select_time(array('display_seconds'=>false,'time'=>(($tmp = @$_smarty_tpl->tpl_vars['slider']->value['publishedOn'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['adjustedNow']->value : $tmp),'field_array'=>"slider",'prefix'=>''),$_smarty_tpl);?>

                  <?php } else { ?>
                    <?php echo smarty_function_html_select_time(array('display_seconds'=>false,'display_meridian'=>true,'use_24_hours'=>false,'time'=>(($tmp = @$_smarty_tpl->tpl_vars['slider']->value['publishedOn'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['adjustedNow']->value : $tmp),'field_array'=>"slider",'prefix'=>''),$_smarty_tpl);?>

                  <?php }?>
                </div>
              </div>	

              <?php if ($_smarty_tpl->tpl_vars['slider']->value['modifiedOn']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Изменено</label></div>
                <div class="col-md-6 nopadding_right"><i><?php echo $_smarty_tpl->tpl_vars['slider']->value['modifiedOn'];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['slider']->value['modifiedBy']['loginName'])===null||$tmp==='' ? "Неизвестный пользователь" : $tmp);?>
)</i></div>
              </div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['slider']->value['addedOn']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Создано</label></div>
                <div class="col-md-6 nopadding_right"><i><?php echo $_smarty_tpl->tpl_vars['slider']->value['addedOn'];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['slider']->value['addedBy']['loginName'])===null||$tmp==='' ? "Неизвестный пользователь" : $tmp);?>
)</i>   </div>
              </div>
              <?php }?>
            </div>
          </div>
          
        </div>
      </div>                        
    </div>	
    <div class="clear"></div>
  	<div align="center" class="col-md-12 main main_buttons">
  		<input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" onclick="document.getElementById('slider').target='_self'; document.getElementById('slider').action='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/admin<?php if ($_smarty_tpl->tpl_vars['SITE_LANG']->value != '') {?>/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_LANG']->value, ENT_QUOTES, 'UTF-8', true);
}?>/sliders.php'" />	&nbsp;
  		<a class="btn btn-primary" href="sliders.php">Отменить</a>
  	</div>
  </form>

<?php } elseif (!$_smarty_tpl->tpl_vars['errors']->value['access_denied']) {?>

<div class="content-frame" style="margin-bottom:10px;">
  <div class="content-frame-top">                        
    <div class="col-md-6 col-xs-6 nopadding_left"><h2>Слайдер</h2></div>
    <div class="col-md-6 col-xs-6 nopadding_right">
      <a class="btn btn-danger  pull-right" href="sliders.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="Добавить Слайд"><i class="fa fa-plus"></i></a>
    </div>  
  </div>
</div>

<div class="col-md-12">
	<form action="sliders.php" method="post"> 
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">		
          <table class="table table-striped table-actions table-hover" id="sliders">
            <thead>
              <tr>
                <th class="" style="padding: 0px 0px">
                  <input class="btn btn-primary" type="submit" name="action[reorder]" value="Cортировать" data-toggle="tooltip" data-placement="top" data-original-title="Порядок публикации на сайте"/></th>
                <th class="text-center" width="50">Картинка</th>
                <th class="">Слайдер</th>
                <th class="text-center" width="100">Статус</th>
                <th class="text-center" width="50">Действие</th>
              </tr>
            </thead>
            <tbody>   
              <?php if ($_smarty_tpl->tpl_vars['sliders']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider', false, NULL, 'sliders', array (
));
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
?>
              <tr id="slider-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
">
                <td class="text-center"><input type="text" name="slider[orderBys][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['orderBy'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control text-center"/></td>
                <td class="text-center">
                  <?php if ($_smarty_tpl->tpl_vars['slider']->value['hasImage'] == '1') {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['images']['medium']['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="article_img"/>
                  <?php } else { ?>
                    <img src="img/no_images.jpg" class="article_img" style="width:45px;"/>
                  <?php }?>
                </td>
                <td width="100%"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['slider']->value['title']),100);?>
</td>
                <td style="" id="status-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
" align="center"><?php echo $_smarty_tpl->tpl_vars['slider']->value['statusName'];?>
</td>
                <td class="btn-link-action text-center">
								  <a href="sliders.php?action[edit]=true&slider[sliderId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default btn-rounded"><span class="fa fa-pen"></span></a>
                  <a class="btn btn-danger btn-rounded" onclick="deleteSlide(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['sliderId'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo $_smarty_tpl->tpl_vars['slider']->value['title'];?>
');"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
              <tr class="odd"><td class="data none" colspan="7" align="center">- Не найдено -</td></tr>
              <?php }?> 
            </tbody>
          </table>
        </div>
      </div>
    </div> 
	</form>	
</div>

<?php }?>
</div>
<?php echo '<script'; ?>
>
	
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
             
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
