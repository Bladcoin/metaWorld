<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:00:31
  from 'C:\xampp\htdocs\admin\templates\files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb408fb2aa91_07638190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2fa692b79cce308858aa2206b1c372f18fa465' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\files.tpl',
      1 => 1603794166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb408fb2aa91_07638190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.fsize_format.php','function'=>'smarty_modifier_fsize_format',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.format_time.php','function'=>'smarty_modifier_format_time',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"files",'title'=>"Загрузки"), 0, false);
?>

 <?php if ($_smarty_tpl->tpl_vars['messages']->value['folder']) {?><span id="folderMessage" onclick = "noty({text: 'Директория создана.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['uploaded']) {?><span id="uploadedMessage" onclick = "noty({text: 'Файл загружен и сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['deletedFile']) {?><span id="deletedFileMessage" onclick = "noty({text: 'Файл удален.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['deletedFolder']) {?><span id="deletedFolderMessage" onclick = "noty({text: 'Директория удалена.', layout: 'topRight', type: 'success'});"></span><?php }?>
   <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Файл сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  
  
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['upload']) {?><span id="uploadError" onclick = "noty({text: 'Невозможно сохранить загруженный файл. Возможно, стоит ограничение на создание файлов.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['folder']) {?><span id="folderError" onclick = "noty({text: 'Невозможно создать директорию. Возможно, стоит ограничение на создание директорий.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['deleteFile']) {?><span id="deleteFileError" onclick = "noty({text: 'Невозможно удалить файл.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['deleteFolder']) {?><span id="deleteFolderError" onclick = "noty({text: 'Невозможно удалить директорию. (Директория должна быть пустой и скрипт должен иметь соответствующие права)', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['save']) {?><span id="saveError" onclick = "noty({text: 'Невозможно сохранить файл. Возможно, скрипт не наделен соответствующими правами.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?><span id="fileNameCharactersError" onclick = "noty({text: 'Имя файла/директории может состоять только из следующих: A-Z a-z 0-9 . , - _ ( ) пробел.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameNoDot']) {?><span id="fileNameNoDotError" onclick = "noty({text: 'Имя файла/директории не может начинаться с точки.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?><span id="fileNameProhibitedError" onclick = "noty({text: 'Введенное имя файла/директории запрещено.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['accessDenied']) {?><span id="accessDeniedError" onclick = "noty({text: 'Доступ к указанному пути запрещен.', layout: 'topRight', type: 'error'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNotFound']) {?><span id="fileNotFoundError" onclick = "noty({text: 'Файл не найден.', layout: 'topRight', type: 'error'});"></span><?php }?>
			
  <?php echo '<script'; ?>
>
  	
    $(document).ready(function () {
      
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['upload']) {?> $('#uploadError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['folder']) {?> $('#folderError').click(); <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['deleteFile']) {?> $('#deleteFileError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['deleteFolder']) {?> $('#deleteFolderError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['save']) {?> $('#saveError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?> $('#fileNameCharactersError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameNoDot']) {?> $('#fileNameNoDotError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameProhibited']) {?> $('#fileNameProhibitedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['accessDenied']) {?> $('#accessDeniedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNotFound']) {?> $('#fileNotFoundError').click();<?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['folder']) {?> $('#folderMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['uploaded']) {?> $('#uploadedMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['deletedFile']) {?> $('#deletedFileMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['deletedFolder']) {?> $('#deletedFolderMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
      
    });
    function uploadMessage(){noty({text: 'Фал(ы) загружен(ы)',layout: 'topRight',type: 'success'})}
             
  <?php echo '</script'; ?>
>


<div class="page-content-wrap">
  <div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 col-xs-3 nopadding_left"><h2> Загрузка файлов на сервер</h2></div>
      <div class="col-md-6 col-xs-6 content-frame-body-left" >
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
        <div class="upload-image alert" role="alert"></div>
		  </div>
		  <div class="col-md-3 col-xs-3 nopadding_right"></div>
		</div>
	</div>
     
	<div id="fileUploadRow">
		<div class="col-md-12">
      <div class="panel panel-colorful" >
        <div class="panel-body">
          <form action="functions.php" id="dropzone" class="dropzone" id="dropzonewidget" style="min-height: 140px;"></form>
			    <?php echo '<script'; ?>
>
					
			    Dropzone.autoDiscover = false;
			    $(function() {
            var myDropzone = new Dropzone("#dropzone");
            myDropzone.on("complete", function(file) {uploadMessage(); setTimeout(function(){ location.reload(); }, 400); });
          });        
          
					<?php echo '</script'; ?>
>	
        </div>
	    </div>
		</div>
	</div>                  
  
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover">
            <thead>
              <tr>
                <th class="">Файл</th>
                <th class="">Путь к файлу</th>
                <th class="text-center" width="80">Размер</th>
                <th class="text-center" width="120">Дата</th>
                <th class="text-center" width="100">Удалить</th>
              </tr>
            </thead>
            <tbody>   
              <?php if ($_smarty_tpl->tpl_vars['upPath']->value != $_smarty_tpl->tpl_vars['path']->value) {?><tr></tr><?php }?>
              <?php if ($_smarty_tpl->tpl_vars['list']->value) {
if ($_smarty_tpl->tpl_vars['list']->value['files']) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['files'], 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
              <tr id="uploads">
          			<td class="data"><span class="ls-download"></span>&nbsp;&nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
          			<td class="data"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/uploads/files/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
          			<td class="data small" nowrap="nowrap" align="right"><?php echo htmlspecialchars(smarty_modifier_fsize_format($_smarty_tpl->tpl_vars['file']->value['size']), ENT_QUOTES, 'UTF-8', true);?>
</td>
          			<td class="data small text-center" nowrap="nowrap"><?php echo htmlspecialchars(smarty_modifier_format_time($_smarty_tpl->tpl_vars['file']->value['mtime'],"d.m.Y H:i:s"), ENT_QUOTES, 'UTF-8', true);?>
</td>
          			<td class=" text-center"><a class="btn btn-danger btn-rounded" onclick="deleteAFile('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
')" /><span class="fa fa-trash"></span></a></td>
          		</tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
              <tr><td colspan="5">&nbsp;</td></tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
