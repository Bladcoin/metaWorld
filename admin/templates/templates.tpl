{include file="header.tpl" activeItem="templates" title="{templates:title}"}
<style>{literal}.CodeMirror {font-size: 12px;height: 100%;}{/literal}</style>
<script type="text/javascript" src="js/jQueryFileTree.min.js"></script>
<script type="text/javascript" src="js/codemirror/codemirror.js"></script>     
<script type='text/javascript' src="js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type='text/javascript' src="js/codemirror/mode/xml/xml.js"></script>  
<script type='text/javascript' src="js/codemirror/mode/javascript/javascript.js"></script>
<script type='text/javascript' src="js/codemirror/mode/css/css.js"></script>

<div class="page-content-wrap">
  
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{templates:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.template_changed}<span id="templateChangedMessage" onclick = "{literal}noty({text: '{/literal}{templates:messages:3}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.saved_new_file}<span id="savedNewFiledMessage" onclick = "{literal}noty({text: '{/literal}{templates:messages:4}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}  
   
  {if $errors.not_found}<span id="notFoundError" onclick = "{literal}noty({text: '{/literal}{templates:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{templates:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileName}<span id="fileNameError" onclick = "{literal}noty({text: '{/literal}{templates:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameExists}<span id="fileNameExistsError" onclick = "{literal}noty({text: '{/literal}{templates:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{templates:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}

  <script>
  	{literal}
    $(document).ready(function () {
      {/literal} 
      {if $errors.not_found} $('#notFoundError').click();{/if}
      {if $errors.not_saved} $('#notSavedError').click();{/if}
      {if $errors.fileName} $('#fileNameError').click();{/if}
      {if $errors.fileNameExists} $('#fileNameExistsError').click();{/if}
      {if $errors.fileNameCharacters} $('#fileNameCharactersError').click();{/if}              
                                    
      {if $messages.saved} $('#savedMessage').click();{/if}
      {if $messages.template_changed} $('#templateChangedMessage').click();{/if}
      {if $messages.saved_new_file} $('#savedNewFiledMessage').click();{/if}
      {literal}
    });
    function notTemplateMessage(){noty({text: '{/literal}{templates:messages:0}{literal}',layout: 'topRight',type: 'error'})}
    function saveTemplateMessage(){noty({text: '{/literal}{templates:messages:0}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>

	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-6 col-xs-6 nopadding_left"><h2>{templates:title}</h2></div>
      <div class="col-md-6 col-xs-6 content-frame-body-left">
	      <div id="ajaxStatus" class="alert col-md-6 info-box-img" role="alert"></div>
      </div>                         
    </div>
	</div>
	
	<div class="col-md-12">
{*
    <form action="templates.php" method="post" id="settings" autocomplete="off">
      <input class="btn btn-primary" type="hidden" name="action[saveSetting]" value="changed_template" />
      <div class="tab-pane" id="general">
  		  <div class="panel panel-default">
          <div class="panel-heading"><h5 class="panel-title">{templates:selectTemplate}</h5></div>
          <div class="panel-body"> 
            <div class="col-md-3 col-sm-6 nopadding">{html_options name="settings[theme]" values=$themes output=$themes selected=$config.theme class="form-control select" onchange="this.form.submit()"}</div>
  			  </div>
  		  </div>
  		</div>
		</form> 
*}       
	
  	<div class="panel panel-default">
    	<div class="panel-heading"><h3 class="panel-title">{templates:editTemplate}: <b>{$config.theme|capitalize}</b></h3></div>
	    <div class="panel-body panel-body-table">  	
        <div class="col-md-2 nopadding"><div id="filetree" class="filetree"></div></div>
        <div class="col-md-10 nopadding">
          <div id="fileedit" style="border: solid 1px #BBB;min-height: 565px; padding:5px;"></div>
        </div>
        <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
          <a class="btn btn-primary" {* href="templates.php?action[add]=true" *} data-toggle="modal" data-target="#new_file"><i class="fa fa-plus-circle position-left"></i> {templates:newTemplateFile}</a>
        </div> 
	    </div>
  	</div>                                 
	</div>
	
	<script>
  {literal}
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

  {/literal}
  </script>
  
  <div class="modal animated fadeIn" id="new_file" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><h4 class="modal-title" id="smallModalHead">{$template.fileName|default:"{templates:newTemplate}"}</h4></div>                    
        <form action="templates.php" method="post" id="template">
          <input type="hidden" name="template[isNew]" value="1" />
          <input type="hidden" name="action[save]" value="0" />
          <input type="hidden" name="action[checkTemplate]" value="1" />
          <div class="col-md-12" style="margin-top: 20px;margin-bottom: 20px">
            <div class="form-group">
              <input class="form-control" autocomplete="off" id="fileName" type="text" name="template[fileName]" value="{$template.fileName}" placeholder="{templates:templateNewFile}"/>
            </div>
          </div>
          <div class="modal-footer">
            <input class="btn btn-primary" type="button" value="&nbsp; {general:save} &nbsp;" onclick="testTemplate()" id="submitButton" />	&nbsp;
            <button type="button" class="btn btn-primary" data-dismiss="modal">{general:cancel}</button>
          </div>
        </form>     
      </div>
    </div>
  </div>

</div>
{include file="footer.tpl"}