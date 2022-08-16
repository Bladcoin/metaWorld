{include file="header.tpl" activeItem="file-manager" title="{fileManager:title} - {header:administration}"}
<div class="page-content-wrap">
  
  {if $messages.folder}<span id="folderMessage" onclick = "{literal}noty({text: '{/literal}{fileManager:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.uploaded}<span id="uploadedMessage" onclick = "{literal}noty({text: '{/literal}{fileManager:messages:1}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.deletedFile}<span id="deletedFileMessage" onclick = "{literal}noty({text: '{/literal}{fileManager:messages:2}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.deletedFolder}<span id="deletedFolderMessage" onclick = "{literal}noty({text: '{/literal}{fileManager:messages:3}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
   {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{fileManager:messages:4}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  
  
  {if $errors.upload}<span id="uploadError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.folder}<span id="folderError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.deleteFile}<span id="deleteFileError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.deleteFolder}<span id="deleteFolderError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.save}<span id="saveError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.fileNameNoDot}<span id="fileNameNoDotError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameProhibited}<span id="fileNameProhibitedError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.accessDenied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.fileNotFound}<span id="fileNotFoundError" onclick = "{literal}noty({text: '{/literal}{fileManager:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
			
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.upload} $('#uploadError').click();{/if}
      {if $errors.folder} $('#folderError').click(); {/if}
      {if $errors.deleteFile} $('#deleteFileError').click();{/if}
      {if $errors.deleteFolder} $('#deleteFolderError').click();{/if}
      {if $errors.save} $('#saveError').click();{/if}
      {if $errors.fileNameCharacters} $('#fileNameCharactersError').click();{/if}
      {if $errors.fileNameNoDot} $('#fileNameNoDotError').click();{/if}
      {if $errors.fileNameProhibited} $('#fileNameProhibitedError').click();{/if}
      {if $errors.accessDenied} $('#accessDeniedError').click();{/if}
      {if $errors.fileNotFound} $('#fileNotFoundError').click();{/if}
      
      {if $messages.folder} $('#folderMessage').click();{/if}
      {if $messages.uploaded} $('#uploadedMessage').click();{/if}
      {if $messages.deletedFile} $('#deletedFileMessage').click();{/if}
      {if $messages.deletedFolder} $('#deletedFolderMessage').click();{/if}
      {if $messages.saved} $('#savedMessage').click();{/if}
      {literal}
    });
  {/literal}           
  </script>
  
  
  
{if $action.edit}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"> 
		  <div class="col-md-3 nopadding"><h2>{fileManager:title}</h2></div>                                                
      <div class="col-md-6 content-frame-body-left" >
	      <div id="ajaxStatus"> </div> 
      </div>                          
    </div>
  </div>

  <form action="file-manager.php" method="post" id="template">
		<input type="hidden" name="path" value="{$path}" />
		<input type="hidden" name="file[name]" value="{$file.name}" />
		<input type="hidden" name="action[save]" value="1" />
		<div class="col-md-12">
		  <div class="panel panel-default">
		    <div class="panel-heading"><h3 class="panel-title">{$file.name}</h3></div>
		    <div class="panel-body" style="padding: 0px;"><textarea id="codeEditor" name="file[content]" cols="102" rows="25" class="code" wrap="off">{$file.content}</textarea></div>
		  </div>
		</div>
		<div align="center" class="col-md-12 main main_buttons">
		    <input class="btn btn-primary" type="submit" value="&nbsp; {general:save} &nbsp;" id="submitButton" /> 
		    <a class="btn btn-primary" href="file-manager.php?path={$path}">{general:cancel}</a>
	    </div>
	</form>

	<script type="text/javascript" src="js/codemirror/codemirror.js"></script>        
	<script type='text/javascript' src="js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
	<script type='text/javascript' src="js/codemirror/mode/xml/xml.js"></script>
	<script type='text/javascript' src="js/codemirror/mode/javascript/javascript.js"></script>
	<script type='text/javascript' src="js/codemirror/mode/css/css.js"></script>
	<script type='text/javascript' src="js/codemirror/mode/clike/clike.js"></script>
	<script type='text/javascript' src="js/codemirror/mode/php/php.js"></script> 
	{literal}
	<script>
	    var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
	        lineNumbers: true,
	        matchBrackets: true,
	        mode: "application/x-httpd-php",
	        indentUnit: 4,
	        indentWithTabs: true,
	        enterMode: "keep",
	        tabMode: "shift"                                                
	    });
	    editor.setSize('100%','420px');
	</script>
	{/literal}	
	
{else}
    
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2><span class="fa fa-files-o"></span> {fileManager:title}</h2></div>
      <div class="col-md-6 content-frame-body-left">
		    <div id="ajaxStatus"> </div> 
				
      </div>
	            
      <div class="col-md-3 nopadding">
        <div class="pull-right"> 
          <div style="float: left;margin-right: 10px;" onclick="showActionRow('addFolder')" id="addFolderLabel" data-toggle="tooltip" data-placement="left" title data-original-title="{fileManager:addFolder}">
            <span class="action btn btn-danger"><i class="fa fa-plus"></i></span> 
          </div>&nbsp;&nbsp;
          <div style="float: left;" onclick="showActionRow('fileUpload')" id="fileUploadLabel" data-toggle="tooltip" data-placement="left" title data-original-title="{fileManager:uploadFile}">
            <span class="action btn btn-danger"><i class="fa fa-upload"></i></span> 
          </div>
          <script type="text/javascript">
            rows = new Array('fileUpload', 'addFolder');
          </script>
        </div> 
      </div>                          
    </div>
  </div>
      
   
	<div id="fileUploadRow" style="display:none">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		  <form method="post" enctype="multipart/form-data">
        <div class="panel panel-colorful">
          <div class="panel-heading"></div>
          <div class="panel-body form_select_4">
            <div class="col-md-3"></div>
            <div class="col-md-6"> 
              <input type="hidden" name="action[upload]" value="1" />
              <span class="file-input file-input-new">
              <div class="btn btn-danger btn-file"><span class="fa fa-file"></span> &nbsp;Загрузить файл … <input multiple="" type="file" name="upload"/></div>
					    <input style="float:right;" class="btn btn-primary" type="submit" value="{fileManager:upload}" />
            </div>
            <div class="col-md-3"></div>	
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-2"></div> 
	</div>          
          
	<div id="addFolderRow" style="display:none">
		<div class="col-md-2"></div>
		<div class="col-md-8">
  		<form method="post">
        <div class="panel panel-colorful">
          <div class="panel-heading"></div>
          <div class="panel-body form_select_4">
            <input type="hidden" name="action[add_folder]" value="1" />
            <div class="col-md-3 control_text_right">{fileManager:folderName}</div>
            <div class="col-md-6 nopadding"> <input class="form-control" type="text" name="folder[name]" size="30"></div>
            <div class="col-md-3"><input class="btn btn-primary" type="submit" value="{fileManager:add}"/></div>	
          </div>
        </div>
			</form>
		</div>
		<div class="col-md-2"></div> 
	</div>          
          
	<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover">
            <thead>
              <tr>
                <th class="text-center">{fileManager:file}</th>
                <th class="text-center" width="80">{fileManager:size}</th>
                <th class="text-center" width="120">{general:modified}</th>
                <th class="text-center" width="100">{general:action}</th>
              </tr>
            </thead>
            <tbody>   
              {if $upPath ne $path}
              <tr>
                <td class="data" colspan="4">
                  <a href="file-manager.php?path={$upPath}" style="font-size: 14px;margin-right: 10px;color: #3c5a96;">
                    <i class="fa fa-reply" aria-hidden="true"style="font-size: 16px;margin-right: 10px;color: #3c5a96;"></i> {fileManager:back}
                  </a>
                </td>
              </tr>
              {/if}
              
              {if $list}
                {if $list.dirs}{foreach item=dir from=$list.dirs}
                <tr>
                    <td class="data"><a href="file-manager.php?path={$path}{$dir.name}"><i class="fa fa-folder-open" aria-hidden="true" style="font-size: 18px;margin-right: 10px;color: #da9101;"></i>{$dir.name}</a></td>
                      <td></td>
                      <td class="text-center" nowrap="nowrap">{$dir.mtime|format_time:"d.m.Y H:i:s"}</td>
                      <td align="right">
                        <div class="btn btn-danger btn-rounded" onclick="deleteFile('{$path|escape:javascript|escape}', '{$dir.name|escape:javascript|escape}')" />
  			              <span class="fa fa-trash"></span>
                    </div>
                    </td>
                </tr>
                {/foreach}{/if}
                
                {if $list.files}{foreach item=file from=$list.files}
                <tr>
                  <td><i class="fa fa-file-code" aria-hidden="true" style="font-size: 18px;margin-right: 10px;margin-left: 10px;color: #3c5a96;"></i> {$file.name}</td>
                  <td nowrap="nowrap" align="right">{$file.size|fsize_format}</td>
                  <td class="text-center" nowrap="nowrap">{$file.mtime|format_time:"d.m.Y H:i:s"}</td>
                  <td>
                    <a class="btn btn-default btn-rounded" href="file-manager.php?action[edit]=true&path={$path|escape:url}&file[name]={$file.name|escape:url}">
                      <span class="fa fa-pen"></span>
                    </a>
  									<a style="float:right;" class="btn btn-danger btn-rounded action" onclick="deleteFile('{$path|escape:javascript|escape}', '{$file.name|escape:javascript|escape}')" /><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                {/foreach}{/if}
                <tr><td colspan="2">&nbsp;</td></tr>
              {/if}
            </tbody>
          </table>
        </div>                                
      </div>
    </div>                                                
	</div>
	
{/if}
</div>

{include file="footer.tpl"}