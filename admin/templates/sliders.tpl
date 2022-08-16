{include file="header.tpl" activeItem="sliders" title="{sliders:title}"}
<div class="page-content-wrap">
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{sliders:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $errors.access_denied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.title}<span id="titleError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.sectionId}<span id="sectionIdError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.no_sections}<span id="noSectionsError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.image_not_saved}<span id="imageNotSavedError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.article_not_found}<span id="articleNotFoundError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileName}<span id="fileNameError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.fileNameExists}<span id="fileNameExistsError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.htaccess}<span id="htaccessError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.serializations}<span id="serializationsError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:10}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameProhibited}<span id="fileNameProhibitedError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:11}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{sliders:errors:12}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	<script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.access_denied} $('#accessDeniedError').click();{/if}
      {if $errors.title} $('#titleError').click(); {/if}
      {if $errors.sectionId} $('#sectionIdError').click();{/if}
      {if $errors.not_saved} $('#notSavedError').click();{/if}
      {if $errors.no_sections} $('#noSectionsError').click();{/if}
      {if $errors.image_not_saved} $('#imageNotSavedError').click();{/if}
      {if $errors.article_not_found} $('#articleNotFoundError').click();{/if}
      {if $errors.fileName} $('#fileNameError').click();{/if}
      {if $errors.fileNameExists} $('#fileNameExistsError').click();{/if}
      {if $errors.htaccess} $('#htaccessError').click();{/if}
      {if $errors.serializations} $('#serializationsError').click();{/if}
      {if $errors.fileNameProhibited} $('#fileNameProhibitedError').click();{/if}
      {if $errors.fileNameCharacters} $('#fileNameCharactersError').click();{/if}
      {if $messages.saved} $('#savedMessage').click();{/if}
      //{if $messages.saved} $('#deleteImageMessage').click();{/if}
      {literal}
    });
    function deleteImageMessage(){noty({text: '{/literal}{sliders:messages:1}{literal}',layout: 'topRight',type: 'success'})}
    function deleteSlidesMessage(){noty({text: '{/literal}{sliders:messages:2}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>
  
{if $action.edit}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"> 
      <div class="col-md-3 nopadding_left"><h2>{sliders:title}</h2></div>                                                
      <div class="col-md-4 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
        <div class="upload-image alert" role="alert"></div>
        <span id="deletingStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></span>
		  </div>
		</div>
	</div>
  
	<form action="sliders.php" method="post" id="slider" enctype="multipart/form-data">
	  <input type="hidden" name="slider[sliderId]" value="{$slider.sliderId}" />
    <input type="hidden" name="action[save]" value="1" />
    <div class="col-md-12">
      <div class="panel panel-default tabs ">                   
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{sliders:tabs:general}</a></li>
          {if $conf.slider_summary eq '1'} <li class=""><a href="#summary" data-toggle="tab" aria-expanded="false">{sliders:tabs:summary}</a></li>{/if}
          <li class=""><a href="#misc" data-toggle="tab" aria-expanded="false">{sliders:tabs:misc}</a></li>
        </ul>                  
        <div class="panel-body tab-content nopadding">
	        <div class="tab-pane active" id="general">
            <div class="panel panel-default">
              <div class="panel-body">  
                <div class="col-md-8">
                  <div class="col-md-6 nopadding_left">
                    <div class="form-group">{sliders:general:orderBy}</label><input class="form-control" autocomplete="off" type="text" name="slider[orderBy]" value="{$slider.orderBy}" /></div>
                  </div> 
                  <div class="col-md-6 nopadding_right">
                    <div class="form-group">{sliders:general:status}{html_options options=$statuses name='slider[status]' selected=$slider.status class="form-control select"}</div> 
                  </div>
                  <div class="form-group">{sliders:general:title}<input class="form-control" autocomplete="off" type="text" name="slider[title]" id="title" value="{$slider.title}" /></div> 
                  <div class="form-group">{sliders:general:filename}<input class="form-control" autocomplete="off" type="text" name="slider[fileName]" id="filename" value="{$slider.fileName}" /></div>
                  {if $conf.slider_alias eq '1'} 
                  <div class="form-group">{sliders:alias}<input class="form-control" autocomplete="off" type="text" name="slider[alias]" value="{$slider.alias}" /></div>
                  {/if}
                  {if $conf.slider_text eq '1'} 
                  <div class="form-group">{sliders:text}<input class="form-control" autocomplete="off" type="text" name="slider[text]" value="{$slider.text}" /></div>
                  {/if}
                  {if $conf.slider_link eq '1'} 
                  <div class="form-group">{sliders:links}<input class="form-control" autocomplete="off" type="text" name="slider[links]" value="{$slider.links}" /></div>
                  {/if}   
                </div>
                <div class="col-md-4"> 
                  <div class="form-group ">
                    <div class="col-md-12 nopadding">{sliders:general:primaryImage}                                                                                          
                      {if $slider.images}
                      <div class="file-previewzo-obzor" id="imageOptions">
                            <div class="close fileinput-remove text-right" onclick="return deleteSliderImage({$slider.sliderId});" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                            <div class="file-preview-thumbnails">
                                <div class="file-preview-frame" id="imageOptions">
                                    <img src="{$SITE_URL}/uploads/sliders/{$slider.sliderId}/{$slider.images.medium.fileName}" class="file-preview-image" alt="{$slider.images.medium.fileName}">
  						        </div>
  		                    </div>
  		                </div>
                        {/if}
                        <div class=""><input type="file" multiple="" name="image" id="file-simple"></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
    	    	</div>
  	    	{if $conf.slider_summary eq '1'} 
  	    	<div class="tab-pane" id="summary"><textarea name="slider[summary]" class="description">{$slider.summary}</textarea> </div>
          {/if}
          <div class="tab-pane" id="misc">
            <div class="block" style="padding: 20px 5px 10px;">

              <div class="form-group">
                <div class="col-md-6 nopadding_left">{sliders:misc:publishDate}</div>
                <div class="col-md-6 nopadding_right date">                                                                                            
                  {html_select_date time=$slider.publishedOn|default:$adjustedNow day_value_format="%02d" field_array="slider" prefix="" class="form-control select"} - 
                  {if $config.use_24_hours}
                    {html_select_time display_seconds=false time=$slider.publishedOn|default:$adjustedNow field_array="slider" prefix=""}
                  {else}
                    {html_select_time display_seconds=false display_meridian=true use_24_hours=false time=$slider.publishedOn|default:$adjustedNow field_array="slider" prefix=""}
                  {/if}
                </div>
              </div>	

              {if $slider.modifiedOn}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{general:modified}</div>
                <div class="col-md-6 nopadding_right"><i>{$slider.modifiedOn nofilter} ({$slider.modifiedBy.loginName|default:"{general:unknowUser}" nofilter})</i></div>
              </div>
              {/if}
              {if $slider.addedOn}
              <div class="form-group">
                <div class="col-md-6 nopadding_left">{general:created}</div>
                <div class="col-md-6 nopadding_right"><i>{$slider.addedOn nofilter} ({$slider.addedBy.loginName|default:"{general:unknowUser}" nofilter})</i>   </div>
              </div>
              {/if}
            </div>
          </div>
          
        </div>
      </div>                        
    </div>	
    <div class="clear"></div>
  	<div align="center" class="col-md-12 main main_buttons">
  		<input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" onclick="document.getElementById('slider').target='_self'; document.getElementById('slider').action='{$GLOBAL_URL}/admin{if $SITE_LANG != ''}/{$SITE_LANG}{/if}/sliders.php'" />	&nbsp;
  		<a class="btn btn-primary" href="sliders.php">{general:cancel}</a>
  	</div>
  </form>

{elseif !$errors.access_denied}

<div class="content-frame" style="margin-bottom:10px;">
  <div class="content-frame-top">                        
    <div class="col-md-6 col-xs-6 nopadding_left"><h2>{sliders:title}</h2></div>
    <div class="col-md-6 col-xs-6 nopadding_right">
      <a class="btn btn-danger  pull-right" href="sliders.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{sliders:addSlider}"><i class="fa fa-plus"></i></a>
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
                  <input class="btn btn-primary" type="submit" name="action[reorder]" value="{general:sort}" data-toggle="tooltip" data-placement="top" data-original-title="Порядок публикации на сайте"/></th>
                <th class="text-center" width="50">{sliders:image}</th>
                <th class="">{general:slider}</th>
                <th class="text-center" width="100">{general:status}</th>
                <th class="text-center" width="50">{general:action}</th>
              </tr>
            </thead>
            <tbody>   
              {if $sliders}{foreach item=slider from=$sliders name=sliders}
              <tr id="slider-{$slider.sliderId}">
                <td class="text-center"><input type="text" name="slider[orderBys][{$slider.sliderId}]" value="{$slider.orderBy}" class="form-control text-center"/></td>
                <td class="text-center">
                  {if $slider.hasImage eq '1'}
                    <img src="{$slider.images.medium.url}" class="article_img"/>
                  {else}
                    <img src="img/no_images.jpg" class="article_img" style="width:45px;"/>
                  {/if}
                </td>
                <td width="100%">{$slider.title|strip_tags|truncate:100 nofilter}</td>
                <td style="" id="status-{$slider.sliderId}" align="center">{$slider.statusName nofilter}</td>
                <td class="btn-link-action text-center">
								  <a href="sliders.php?action[edit]=true&slider[sliderId]={$slider.sliderId}" class="btn btn-default btn-rounded"><span class="fa fa-pen"></span></a>
                  <a class="btn btn-danger btn-rounded" onclick="deleteSlide({$slider.sliderId}, '{$slider.title nofilter}');"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
              {/foreach}
              {else}
              <tr class="odd"><td class="data none" colspan="7" align="center">- {general:none} -</td></tr>
              {/if} 
            </tbody>
          </table>
        </div>
      </div>
    </div> 
	</form>	
</div>

{/if}
</div>
<script>
	{literal}
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
  {/literal}           
</script>
{include file="footer.tpl"}