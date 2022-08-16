<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-05 09:36:05
  from 'C:\xampp\htdocs\admin\templates\templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff424f5f38c12_88443861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459121eed9c3eceaef249c29f8a26cf32009d033' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\templates.tpl',
      1 => 1556868348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ff424f5f38c12_88443861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"templates",'title'=>"Редактор шаблона"), 0, false);
?>
<style>.CodeMirror {font-size: 12px;height: 100%;}</style>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jQueryFileTree.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/codemirror/codemirror.js"><?php echo '</script'; ?>
>     
<?php echo '<script'; ?>
 type='text/javascript' src="js/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="js/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type='text/javascript' src="js/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src="js/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>

<div class="page-content-wrap">
  
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Файл сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['template_changed']) {?><span id="templateChangedMessage" onclick = "noty({text: 'Тема изменина...', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved_new_file']) {?><span id="savedNewFiledMessage" onclick = "noty({text: 'Новый шаблон создан!', layout: 'topRight', type: 'success'});"></span><?php }?>  
   
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_found']) {?><span id="notFoundError" onclick = "noty({text: 'Шаблон не найден или доступ запрещен.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: 'Шаблон НЕ сохранен.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?><span id="fileNameError" onclick = "noty({text: 'Введите имя файла шаблона.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?><span id="fileNameExistsError" onclick = "noty({text: 'Шаблон с таким именем файла уже существует. Введите другое имя.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?><span id="fileNameCharactersError" onclick = "noty({text: 'Имя фала может содержать только следующие символы: A-Z a-z 0-9 . , - _ ( ).', layout: 'topRight', type: 'error'});"></span><?php }?>

  <?php echo '<script'; ?>
>
  	
    $(document).ready(function () {
       
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_found']) {?> $('#notFoundError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?> $('#notSavedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?> $('#fileNameError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameExists']) {?> $('#fileNameExistsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileNameCharacters']) {?> $('#fileNameCharactersError').click();<?php }?>              
                                    
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['template_changed']) {?> $('#templateChangedMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved_new_file']) {?> $('#savedNewFiledMessage').click();<?php }?>
      
    });
    function notTemplateMessage(){noty({text: 'Файл сохранен.',layout: 'topRight',type: 'error'})}
    function saveTemplateMessage(){noty({text: 'Файл сохранен.',layout: 'topRight',type: 'success'})}
             
  <?php echo '</script'; ?>
>

	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-6 col-xs-6 nopadding_left"><h2>Редактор шаблона</h2></div>
      <div class="col-md-6 col-xs-6 content-frame-body-left">
	      <div id="ajaxStatus" class="alert col-md-6 info-box-img" role="alert"></div>
      </div>                         
    </div>
	</div>
	
	<div class="col-md-12">
       
	
  	<div class="panel panel-default">
    	<div class="panel-heading"><h3 class="panel-title">Редактирование шаблона: <b><?php echo htmlspecialchars(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['config']->value['theme']), ENT_QUOTES, 'UTF-8', true);?>
</b></h3></div>
	    <div class="panel-body panel-body-table">  	
        <div class="col-md-2 nopadding"><div id="filetree" class="filetree"></div></div>
        <div class="col-md-10 nopadding">
          <div id="fileedit" style="border: solid 1px #BBB;min-height: 565px; padding:5px;"></div>
        </div>
        <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
          <a class="btn btn-primary"  data-toggle="modal" data-target="#new_file"><i class="fa fa-plus-circle position-left"></i> Создать новый файл</a>
        </div> 
	    </div>
  	</div>                                 
	</div>
	
	<?php echo '<script'; ?>
>
  
  $(function($){
  	$('#filetree').fileTree({ root: '/', script: 'jqueryFileTree.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750, multiFolder: false }, function(file) { 
  		$.post('jqueryFileTree.php', { load: "load", file: file }, function(data){ $('#fileedit').html(data); }, 'html');
  	});
  });
  
  function savefile(file){
  	var content = editor.getValue();
  	$.post('jqueryFileTree.php', {action: "save", file: file, content: content}, function(data){
    	console.log(data);
  		if(data == 1){
    		saveTemplateMessage();
  		} else {
        notTemplateMessage();
  		}
  	});
  };

  
  <?php echo '</script'; ?>
>
  
  <div class="modal animated fadeIn" id="new_file" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><h4 class="modal-title" id="smallModalHead"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['template']->value['fileName'])===null||$tmp==='' ? "Новый шаблон" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h4></div>                    
        <form action="templates.php" method="post" id="template">
          <input type="hidden" name="template[isNew]" value="1" />
          <input type="hidden" name="action[save]" value="0" />
          <input type="hidden" name="action[checkTemplate]" value="1" />
          <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
            <div class="form-group">
              <input class="form-control" autocomplete="off" id="fileName" type="text" name="template[fileName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Введите название шаблона без расширения"/>
            </div>
          </div>
          <div class="modal-footer">
            <input class="btn btn-primary" type="button" value="&nbsp; Сохранить &nbsp;" onclick="testTemplate()" id="submitButton" />	&nbsp;
            <button type="button" class="btn btn-primary" data-dismiss="modal">Отменить</button>
          </div>
        </form>     
      </div>
    </div>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
