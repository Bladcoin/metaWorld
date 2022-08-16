{include file="header.tpl" activeItem="files" title="{fileManager:files}"}

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
    function uploadMessage(){noty({text: '{/literal}{fileManager:messages:5}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>


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
			    <script>
					{literal}
			    Dropzone.autoDiscover = false;
			    $(function() {
            var myDropzone = new Dropzone("#dropzone");
            myDropzone.on("complete", function(file) {uploadMessage(); setTimeout(function(){ location.reload(); }, 400); });
          });        
          {/literal}
					</script>	
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
                <th class="">{fileManager:file}</th>
                <th class="">Путь к файлу</th>
                <th class="text-center" width="80">{fileManager:size}</th>
                <th class="text-center" width="120">Дата</th>
                <th class="text-center" width="100">{general:delete}</th>
              </tr>
            </thead>
            <tbody>   
              {if $upPath ne $path}<tr></tr>{/if}
              {if $list}{if $list.files}
              {foreach item=file from=$list.files}
              <tr id="uploads">
          			<td class="data"><span class="ls-download"></span>&nbsp;&nbsp; {$file.name}</td>
          			<td class="data">{$SITE_URL}/uploads/files/{$file.name}</td>
          			<td class="data small" nowrap="nowrap" align="right">{$file.size|fsize_format}</td>
          			<td class="data small text-center" nowrap="nowrap">{$file.mtime|format_time:"d.m.Y H:i:s"}</td>
          			<td class=" text-center"><a class="btn btn-danger btn-rounded" onclick="deleteAFile('{$path}', '{$file.name}')" /><span class="fa fa-trash"></span></a></td>
          		</tr>
              {/foreach}{/if}
              <tr><td colspan="5">&nbsp;</td></tr>
              {/if}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
{include file="footer.tpl"}