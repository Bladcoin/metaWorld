{include file="header.tpl" activeItem="languages" title="{languages:title}"}
<div class="page-content-wrap">
  
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{languages:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.deleted}<span id="deletedMessage" onclick = "{literal}noty({text: '{/literal}{languages:messages:1}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  
  {if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{languages:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.language_not_found}<span id="languageNotFoundError" onclick = "{literal}noty({text: '{/literal}{languages:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.languageName}<span id="languageNameError" onclick = "{literal}noty({text: '{/literal}{languages:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.codename}<span id="codenameError" onclick = "{literal}noty({text: '{/literal}{languages:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.codenameExists}<span id="codenameExistsError" onclick = "{literal}noty({text: '{/literal}{languages:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.htaccess}<span id="htaccessError" onclick = "{literal}noty({text: '{/literal}{languages:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.serializations}<span id="serializationsError" onclick = "{literal}noty({text: '{/literal}{languages:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.codenameCharacters}<span id="codenameCharactersError" onclick = "{literal}noty({text: '{/literal}{languages:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.languageNameCharacters}<span id="languageNameCharactersError" onclick = "{literal}noty({text: '{/literal}{languages:errors:12}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
 
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.not_saved} $('#notSavedError').click();{/if}
      {if $errors.language_not_found} $('#languageNotFoundError').click(); {/if}
      {if $errors.languageName} $('#languageNameError').click();{/if}
      {if $errors.codename} $('#codenameError').click();{/if}
      {if $errors.codenameExists} $('#codenameExistsError').click();{/if}
      {if $errors.htaccess} $('#htaccessError').click();{/if}
      {if $errors.serializations} $('#serializationsError').click();{/if}
      {if $errors.codenameCharacters} $('#codenameCharactersError').click();{/if}
      {if $errors.languageNameCharacters} $('#languageNameCharactersError').click();{/if}
   
      {if $messages.saved} $('#savedMessage').click();{/if}
      {if $messages.deleted} $('#deletedMessage').click();{/if}
      {literal}
    });
  {/literal}           
  </script>
  
{if $action.edit || $action.toMultilangMode}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>{languages:title}</h2></div>                                                   
			<div class="col-md-6 content-frame-body-left"> 
				<div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>
		  </div>
		</div>
	</div>

	<form action="languages.php" method="post" id="language">
    <input type="hidden" name="language[languageId]" value="{$language.languageId}" />
		<input type="hidden" name="action[save]" value="1" />
		{if $action.toMultilangMode}<input type="hidden" name="language[isDefault]" value="1" />{/if}
		<div class="col-md-12">   
			<div class="panel panel-default tabs ">                   
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{if $action.toMultilangMode}{languages:multilangMode}{else}{languages:general}{/if}</a></li>
        </ul> 
				<div class="panel-body tab-content nopadding">
          <div class="tab-pane active" id="general">
            <div class="panel panel-default">
            {if $action.toMultilangMode}
              <div class="panel-heading"><h5 class="panel-title"> {languages:toMultilangModeDesc}</h5></div>
            {else}
              <div class="panel-heading"><h5 class="panel-title"> {general:asterisk}</h5></div>
            {/if}
            <div class="panel-body">  
              {if !$language.languageId}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{languages:predefinedLanguages}</div>
                <div class="col-md-6 nopadding_right">{html_options options=$languageOptions selected=$language.codename name=languageOptions onChange="languageOptionChange(this)" class="form-control select"}</div>
              </div>
              {/if}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{languages:language}</div>
                <div class="col-md-6 nopadding_right"><input class="form-control" autocomplete="off" id="languageName" type="text" name="language[languageName]" value="{$language.languageName}" /></div>
              </div>
              {if !$language.languageId}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{languages:codename}</div>
                <div class="col-md-6 nopadding_right"><input class="form-control" autocomplete="off" id="codename" type="text" name="language[codename]" value="{$language.codename}" /></div>
              </div>
              {/if}
              {if !$action.toMultilangMode}
              {if !$language.languageId}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{settings:regional:adminLang}</div>
                <div class="col-md-6 nopadding_right">    
                  <script type="text/javascript">
                    lang2charset = {ldelim}	{foreach item=charset key=lang from=$languageCharsets name=languageCharsets}"{$lang}":"{$charset}"
                    {if !$smarty.foreach.languageCharsets.last},{/if}{/foreach} {rdelim};
                  </script>
                  {html_options options=$adminLangs name='language[admin_language]' id=adminLanguageOptions class="form-control select"}
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{settings:regional:charset}</div>
                <div class="col-md-6 nopadding_right">{html_options options=$charsetOptions name='language[charset]' id=charsetOptions class="form-control select"}</div>
              </div>
              {/if}
              {/if}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{languages:status}</div>
                <div class="col-md-6 nopadding_right">{html_options options=$statuses name='language[status]' id=status selected=$language.status class="form-control select"}</div>
              </div>
		          {if $language.modifiedOn}
		          <div class="form-group">
                <div class="col-md-6 nopadding_left">{general:modified}</div>
                <div class="col-md-6 nopadding_right">                                        
                  <div class="input-group">
                    {$language.modifiedOn nofilter} ({$language.modifiedBy.loginName|default:"{general:unknowUser}" nofilter})
                  </div>
                </div>
              </div>
              {/if}  
              {if $language.addedOn}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{general:created}</div>
                <div class="col-md-6 nopadding_right">                                           
                  <div class="input-group">
                    {$language.addedOn nofilter} ({$language.addedBy.loginName|default:"{general:unknowUser}" nofilter})
                  </div>
                </div>
              </div>
              {/if}
            </div>
          </div>
        </div>
      </div>
    </div>                          
		</div>
		<div class="clear"></div>
		<div align="center" class="col-md-12 main main_buttons">
			<input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" />
			{if !$action.toMultilangMode} &nbsp;<input class="btn btn-primary" type="button" value="{general:cancel}" onclick="javascript:document.location='languages.php'" />{/if}
		</div>
	</form>

	<script type="text/javascript">
		document.getElementById('language').languageName.focus();
		{if $action.toMultilangMode}
		var website_language = '{$config.website_language}';
		{literal}
		var languageOptions = document.getElementById('languageOptions').options;
		for(i = 0; i < languageOptions.length; i++){
			if(languageOptions[i].value == website_language){
				languageOptions[i].selected = true;
				languageOptionChange(languageOptions);
				break;
			}
		}
		{/literal}
		{/if}
	</script>
	{elseif $action.confirmDelete}
	<div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><h2>{languages:title}</h2></div></div>
	<div>
    <div class="col-md-2"></div>
		<div class="col-md-8">
      <div class="panel panel-colorful">
        <div class="panel-heading"></div>
        <div class="panel-body form_select_4" >
          <form action="languages.php" method="post" id="language">
            <input type="hidden" name="language[languageId]" value="{$language.languageId}" />
            <input type="hidden" name="action[delete]" value="1" /> {languages:delete}
            <div style="margin-top: 10px;">
              {if !$language.isDefault} {languages:deleteDesc} {/if}
              <div style="margin-top: 10px;">
                <input type="checkbox" onclick="document.getElementById('submitBtn').disabled = !this.checked;" id="confirmDelete" style="float:left;margin-right:5px;">
                <label for="confirmDelete" style="padding-top:1px;">{languages:confirmDelete}: <b>{$language.languageName}</b>
              </div>
            </div>
            <div align="center" class="main" style="margin-top:20px;">
              <input class="btn btn-primary" type="button" name="action[delete]" value="&nbsp; {general:delete} &nbsp;" id="submitBtn" disabled="disabled" onclick="this.form.submit()" />
              <input class="btn btn-primary" type="button" value="{general:cancel}" onclick="javascript:document.location='languages.php'" />
            </div>
          </form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>       
	{else}
	<div class="content-frame" style="margin-bottom:10px;">
    
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding_left"><h2>{languages:title}</h2></div> 
      <div class="col-md-6 content-frame-body-left" > 
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>          
      </div>
      <div class="col-md-3 nopadding_right">                                                 
        <div class="pull-right"> 
          <a class="btn btn-danger" href="languages.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{languages:add}"><i class="fa fa-plus"></i></a>
          {if $LANGUAGES|@count > 1} &nbsp;&nbsp; 
            <span class="btn btn-danger" class="action" onclick="showChangeLangForm()">{languages:changeDefaultLang}</span>
          {/if}       
        </div>
      </div>
    </div>
  </div>

  <div id="changeLangRow" style="display:none">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	    <form id="searchForm">
	    	<div class=" panel panel-colorful" >
          <div class="panel-heading"></div>
            <div class="panel-body">
              <form id="changeLangForm">
                <input class="form-control" type="hidden" name="action[changeDefaultLanguage]" value="true">
                <div class="col-md-9">{html_options options=$defaultLanguageOptions id=defaultLang name="language[languageId]" class="form-control select"}</div>
                <div class="col-md-3"><input style="float:right;" class=" btn btn-danger" type="button" value="{languages:setAsDefault}" onclick="confirmLanguageChange(this)" /></div>
							</form>
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
          <table class="table table-striped table-actions table-hover" id="languages">
            <thead>
              <tr>
                <th class="">{languages:languageDesc}</th>
                <th class="text-center">{languages:codenameDesc}</th>
                <th class="text-center">{general:status}</th>
                <th class="text-center">{general:action}</th>
              </tr>
            </thead>
            <tbody>   
              {if $languages}{foreach item=language from=$languages name=languages}
              <tr id="language-{$language.languageId}">
                <td style="padding-left:10px;" width="100%">{$language.languageTransName|default:$navLang.languageName nofilter}{if $language.isDefault} (<b>{languages:default}</b>){/if}</td>
                <td class="data" align="center" nowrap="nowrap"><a href="{$language.url}/" target="_blank">{$language.codename}</a></td>
                <td class="data" width="100%">{$language.statusName nofilter}</td>
                <td class="data" align="center">
                  <table>
                    <tr>
                      <td><a class="btn btn-default btn-rounded" href="languages.php?action[edit]=true&language[languageId]={$language.languageId}"><span class="fa fa-pen"></span></a></td>
                      <td><a class="btn btn-green btn-rounded" alt="{general:moveUp}" class="action" onclick="moveUpLanguage({$language.languageId}, '{$language.languageName|escape:javascript|escape nofilter}')"><span class="fa fa-arrow-up"></span></a></td>
                      <td><a class="btn btn-green btn-rounded" alt="{general:moveDown}" class="action" onclick="moveDownLanguage({$language.languageId}, '{$language.languageName|escape:javascript|escape nofilter}')" hspace="2" /><span class="fa fa-arrow-down"></span></a></td>
                      <td>
                      {if !$language.isDefault || $LANGUAGES|@count < 2}
                        <a href="languages.php?action[confirmDelete]=true&language[languageId]={$language.languageId}" class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></a>
                      {else}
                        <button class="btn btn-default btn-rounded"><span class="fa fa-trash"></span></button>
                      {/if}
                      </td>
                    </tr>
                  </table>
                </tr>
                {/foreach}{/if}   
              </tbody>
            </table>
          </div>
        </div>
      </div> 	
    </div>
	{/if}
</div>
{include file="footer.tpl"}
