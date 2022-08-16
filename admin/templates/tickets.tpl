{include file="header.tpl" activeItem="tickets" title="Авиабилеты"} 
<div class="page-content-wrap">

  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}Авиабилет [{$article.title} ({$article.summary} - {$article.content})] сохранен{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $errors.access_denied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{articles:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.title}<span id="titleError" onclick = "{literal}noty({text: '{/literal}{articles:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.sectionId}<span id="sectionIdError" onclick = "{literal}noty({text: '{/literal}{articles:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{articles:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.no_sections}<span id="noSectionsError" onclick = "{literal}noty({text: '{/literal}{articles:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.image_not_saved}<span id="imageNotSavedError" onclick = "{literal}noty({text: '{/literal}{articles:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.article_not_found}<span id="articleNotFoundError" onclick = "{literal}noty({text: '{/literal}{articles:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileName}<span id="fileNameError" onclick = "{literal}noty({text: '{/literal}{articles:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.fileNameExists}<span id="fileNameExistsError" onclick = "{literal}noty({text: '{/literal}{articles:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.htaccess}<span id="htaccessError" onclick = "{literal}noty({text: '{/literal}{articles:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.serializations}<span id="serializationsError" onclick = "{literal}noty({text: '{/literal}{articles:errors:10}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameProhibited}<span id="fileNameProhibitedError" onclick = "{literal}noty({text: '{/literal}{articles:errors:11}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{articles:errors:12}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
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
      {if $messages.saved} $('#deleteImageMessage').click();{/if}
      {literal}
    });
    function deleteImageMessage(){noty({text: '{/literal}{articles:messages:1}{literal}',layout: 'topRight',type: 'success'})}
    function deleteArticleMessage(){noty({text: '{/literal}Авиабилет [{$article.title} ({$article.summary} - {$article.content})] удален{literal}',layout: 'topRight',type: 'success'})}
    
    function deleteImageError(){noty({text: '{/literal}{sections:errors:14}{literal}',layout: 'topRight',type: 'error'})}
    function deleteImageMessage(){noty({text: '{/literal}{sections:messages:5}{literal}',layout: 'topRight',type: 'success'})}
    function successImageMessage(){noty({text: '{/literal}{sections:messages:10}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>
    <div class="modal" id="edit_image">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                    <h4 class="modal-title" id="defModalHead">{general:editImadeGallery}</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">{general:editDescImadeGallery}<input class="form-control" autocomplete="off" id="image_description" type="text" name="image_description" value=""/>
                    </div>
                    <div class="form-group">{general:editLinkImadeGallery}<input class="form-control" id="image_url" type="text" name="image_url" value="" /> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary save_edit_image" type="submit" value="" data-dismiss="modal"> {general:save} </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{general:cancel}</button>
                </div>
            </div>
        </div>
    </div>
  
{if $action.edit}
	<div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top"> 
            <div class="col-md-3 col-xs-3 nopadding_left"><h2>Авиабилеты</h2></div>                                          
            <div class="col-md-6 col-xs-6 content-frame-body-left">
                <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
                <div class="upload-image alert message" role="alert"></div>
            </div>                            
        </div>
	</div>
  	
	<script>{literal}$(function () {function e() {meta_title_touched || $("#meta_title").val(m()), keywords_touched || $("#keywords").val(i()), description_touched || $("#description").val(t()), fileName_touched || $("#fileName").val(n())}function m() {return name = $("#title").val()}function i() {return name = $("#title").val()}function t() {return name = $("#title").val()}function n() {return fileName = $("#title").val(), fileName = fileName.replace(/[\s]+/gi, "{/literal}{$config.filename_word_separator}{literal}"), fileName = l(fileName), fileName = fileName.replace(/[^0-9a-z_\-]+/gi, "").toLowerCase()}function l(e) {for (var a = "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я".split("-"), i = "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya".split("-"), t = "", n = 0, l = e.length; l > n; n++) {var o = e.charAt(n),c = a.indexOf(o);t += c >= 0 ? i[c] : o}return t}meta_title_touched = !0, keywords_touched = !0, description_touched = !0, fileName_touched = !0, ($("#meta_title").val() == i() || "" == $("#meta_title").val()) && (meta_title_touched = !1), ($("#keywords").val() == i() || "" == $("#keywords").val()) && (keywords_touched = !1), ($("#description").val() == t() || "" == $("#description").val()) && (description_touched = !1), ($("#fileName").val() == n() || "" == $("#fileName").val()) && (fileName_touched = !1), $("#meta_title").change(function () {meta_title_touched = !0}), $("#keywords").change(function () {keywords_touched = !0}), $("#description").change(function () {description_touched = !0}), $("#fileName").change(function () {fileName_touched = !0}), $("#title").keyup(function () {e()})});{/literal}</script>

	<form action="tickets.php" method="post" id="article" enctype="multipart/form-data">
		<input type="hidden" name="article[articleId]" value="{$article.articleId}"/>
		<input type="hidden" name="action[save]" value="1" />
        <div class="col-md-12">
            <div class="panel panel-default tabs" style="margin-top: 0">                   
                {* <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{articles:tabs:general}</a></li>
                    <li><a href="#summary" data-toggle="tab" aria-expanded="false">{articles:tabs:summary}</a></li>
                    <li><a href="#content" data-toggle="tab" aria-expanded="false">{articles:tabs:content}</a></li>
                    {if $conf.article_gallery eq '1'}<li><a href="#gallery" data-toggle="tab" aria-expanded="false">{articles:tabs:gallery}</a></li>{/if}
                    <li class=""><a href="#other" data-toggle="tab" aria-expanded="false">{articles:tabs:misc}</a></li>
                    <li class=""><a href="#seo" data-toggle="tab" aria-expanded="false">{articles:tabs:seo}</a></li>
                </ul> *}                  
    		    <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="general">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-body"> 
                                <div class="col-md-12">
                                    {if $adminUser.accessLevel ne "writer"}
                                    <div class="col-md-12">
                                        <div class="form-group">{articles:status}                      
                                        {html_options options=$statuses name='article[status]' id=status selected=$article.status class="form-control select"}
                                        </div>
                                    </div>
                                    {/if}
                                            <input type="hidden" name="article[sectionId]" value="168"/>
                                    {* <div class="form-group">{articles:general:section}
                                        {if $sections}
                                            {html_options options=$sections|smarty:nodefaults name=article[sectionId] id=sectionId selected=$article.sectionId class="form-control select"}
                                        {else}
                                            {articles:general:notAvailable}<input type="hidden" name="article[sectionId]" value="0"/>
                                        {/if}
                                    </div> *}
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="field_name ">Название авиалиний</label>
                                            <input class="form-control" autocomplete="off" id="title" type="text" name="article[title]" value="{$article.title}" size="75" onblur="proposeFileName('title', 'fileName', 'article', '{$config.filename_word_separator}', '{$config.convert_filename_to_lowercase}');" />                                            
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="field_name ">Откуда</label>
                                            <input class="form-control" autocomplete="off" id="summary" type="text" name="article[summary]" value="{$article.summary}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="field_name ">Куда</label>
                                            <input class="form-control" autocomplete="off" id="content" type="text" name="article[content]" value="{$article.content}" />
                                        </div> 
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="field_name ">Время</label>
                                            <input class="form-control" autocomplete="off" id="alias" type="text" name="article[alias]" value="{$article.alias}" />
                                        </div> 
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group"><label class="field_name ">Цена</label>
                                            <input class="form-control" autocomplete="off" id="articul" type="text" name="article[articul]" value="{$article.articul}" />
                                        </div> 
                                    </div>
                                </div>
                                {* <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12 nopadding">{articles:general:primaryImage}
                                            {if $article.images} 
                                            <div class="file-previewzo-obzor" id="imageOptions">
                                                <div class="close fileinput-remove text-right" onclick="return deleteArticleImage({$article.articleId});" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                                                <div class="file-preview-thumbnails">
                                                    <div class="file-preview-frame" id="imageOptions">
                                                        <img src="{$article.images.original.url}" class="file-preview-image" alt="{$article.images.medium.url}">
                                                    </div>
                                                    <span id="deletingStatus"></span>
    								            </div>
    								        </div>
                                            {/if}
                                            <div class=""><input type="file" name="image" id="file-simple"></div>
                         
                                        </div>
    								</div>
    						    </div> *}
    				        </div>
    				    </div>
    		    	</div>
                    {* <div class="tab-pane" id="summary"> <textarea name="article[summary]" class="description">{$article.summary}</textarea></div> *}
                    {* <div class="tab-pane" id="content"> <textarea name="article[content]" class="description">{$article.content}</textarea></div> *}
                    {if $conf.article_gallery eq '1'}
                    <div class="tab-pane" id="gallery">
                        <div class="panel-body">  
                            <div class="col-md-8 col-xs-12 nopadding">
                                <div id="fileList">
                                    <div class="body-gallery">
                                        <div class="pull-left push-up-10 col-md-12 col-xs-12">{sections:uploadedImages}</div>
                                        <div class="gallery" id="links">
                                            {if $fileList}
                                            {assign var=a value=1}
                                            {foreach item=file from=$fileList name=fileList}
                                            <div class="gallery-item item-{$file.imageId}">
                                                <div class="image" id="image-{$file.imageId}">                              
                                                    <img src="{$SITE_URL}/uploads/gallery/medium-{$file.fileName}" alt="{$file.alt}"/>                                        
                                                    <ul class="gallery-item-controls">
                                                        <li><span class="edit_image" data-id="{$file.imageId}" data-desc="{$file.description}" data-link="{$file.link}" data-toggle="modal" data-target="#edit_image"><i class="fa fa-pen"></i></span></li>
                                                        <li><span class="delete_image" data-id="{$file.imageId}"><i class="fa fa-times"></i></span></li>
                                                    </ul>                                                                     
                                                </div>
                                                <div class="meta">
                                                    <strong>{$file.fileName}</strong>
                                                    <span class="im_desc">{$file.description}</span>
                                                    <span class="im_link">{$file.link}</span>
                                                </div>                                
                                            </div>
                                            {if $a eq 4}
                                            {assign var=a value=0}
                                            <div class="clearfix"></div>
                                            {/if}
                                            {assign var=a value=$a+1}
                                            {/foreach}
                                            {/if}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="col-md-12 col-xs-12 nopadding"><label class=" push-up-10  push-down-10 control-label">{sections:addToGallery}</label></div>
                                <div class="col-md-12 col-xs-12 nopadding"><div id="dZUpload" class="dropzone dropzone-mini"><div class="dz-default dz-message"></div></div></div>
                            </div>
                        </div>
                    </div>
                    {/if}
                    <div class="tab-pane" id="other">
                        <div class="panel panel-default">
                            <div class="panel-body"> 
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{articles:misc:publishDate}</div>
                                    <div class="col-md-6 nopadding_right date">                                                                                            
                                        {html_select_date time=$article.publishedOn|default:$adjustedNow day_value_format="%02d" field_array="article" prefix="" start_year="-5" end_year="+1" class="form-control select"} - 
                                        {if $config.use_24_hours}
                                          {html_select_time display_seconds=false time=$article.publishedOn|default:$adjustedNow field_array="article" prefix=""}
                                        {else}
                                          {html_select_time display_seconds=false display_meridian=true use_24_hours=false time=$article.publishedOn|default:$adjustedNow field_array="article" prefix=""}
                                        {/if}
                                    </div>
                                </div>
                        
                                {if $adminUser.accessLevel ne "writer"}
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{articles:misc:featured}</div>
                                    <div class="col-md-6 nopadding_right"> 
                                        <div class="check_box">
                                            <label><input type="radio" name="article[isFeatured]" value="1" id="yes" {if $article.isFeatured} checked{/if} /><i>{general:yes}</i></label>
                                        </div>
                                        <div class="check_box">
                                            <label><input type="radio" name="article[isFeatured]" value="0" id="no" {if !$article.isFeatured} checked{/if} /><i>{general:no}</i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{general:comments}</div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="check_box">
                                            <label><input type="radio" name="article[commentsEnabled]" value="0" {if $article.commentsEnabled == 0}checked{/if}><i> {general:defaultComments}</i></label>
                                        </div>
                                        <div class="check_box">
                                            <label><input type="radio" name="article[commentsEnabled]" value="-1" {if $article.commentsEnabled == -1}checked{/if}><i> {general:disableComments}</i></label>
                                        </div>
                                        <div class="check_box">
                                            <label><input type="radio" name="article[commentsEnabled]" value="1" {if $article.commentsEnabled == 1}checked{/if}><i>{general:enableComments}</i></label>
                                        </div>
                                    </div>
                                </div>
                                {/if}
                    
                                {if $article.modifiedOn}
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{general:modified}</div>
                                    <div class="col-md-6 nopadding_right"><i>{$article.modifiedOn nofilter} ({$article.modifiedBy.loginName|default:"{general:unknowUser}" nofilter})</i></div>
                                </div>
                                {/if}
                                
                                {if $article.addedOn}
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{general:created}</div>
                                    <div class="col-md-6 nopadding_right"><i>{$article.addedOn nofilter} ({$article.addedBy.loginName|default:"{general:unknowUser}" nofilter})</i></div>
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
              
                    <div class="tab-pane" id="seo">
                        <div class="panel panel-default">
                            <div class="panel-body"> 
                                <div class="form-group">{general:metaTitle}<input class="form-control" autocomplete="off" id="meta_title" type="text" name="article[meta_title]" value="{$article.meta_title}"/></div>
                                <div class="form-group">{general:keywords}<textarea id="keywords" name="article[keywords]" class="form-control" rows="3">{$article.keywords}</textarea></div>
                                <div class="form-group">{general:description}<textarea id="description" name="article[description]" class="form-control" rows="3">{$article.description}</textarea></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>	
        <div class="clear"></div>
        <div class="col-md-12 main main_buttons text-center">
		    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" onclick="document.getElementById('article').target='_self'; document.getElementById('article').action='{$GLOBAL_URL}/admin{if $SITE_LANG != ''}/{$SITE_LANG}{/if}/tickets.php?page={$page}'" /> &nbsp; 		
            <a class="btn btn-primary" href="tickets.php?page={$page}">{general:cancel}</a>
        </div>
    </form>

{elseif !$errors.access_denied}
  
     
    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">                        
            <div class="col-md-6 col-xs-6 nopadding_left"><h2>Авиабилеты</h2></div> 
            <div class="col-md-6 col-xs-6 nopadding_right">                                                
                <div class="pull-right"> 
                    <a class="btn btn-danger" href="tickets.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{articles:addArticle}"><i class="fa fa-plus"></i></a>
      				<span>
                        {if $query || $status || $section}
                        <a class="btn btn-danger" href="tickets.php" ><span class="fa fa-list-alt"></span> {articles:showAllArticles}</a>
                        {else}
                        <span class="action btn btn-danger" onclick="showSearchForm();" data-toggle="tooltip" data-placement="bottom" data-original-title="{general:search}"><span class="fa fa-search"></span></span>
                        {/if}
      				</span>         
                </div>              
            </div>                           
        </div>
    </div>

    <div id="searchRow" style="display:none">
        <div class="col-md-12">
            <form id="searchForm">
                <div class="panel panel-colorful">
                    <div class="panel-body">
                        <div class="col-md-12 nopadding"><input id="quick-search" class="form-control" type="text" name="query" value="{$query}" autocomplete="off"/></div>
                        <div class="search_block_art">
                            <div class="col-md-5 col-xs-12 nopadding_left">{html_options options=$sections selected=$section name=section class="form-control select"}</div>
                            <div class="col-md-5 col-xs-12 nopadding_left">{html_options options=$statuses selected=$status name=status class="form-control select"}</div>
                            <div class="col-md-2 col-xs-12 nopadding_right"><input style="float:right;"class=" btn btn-danger" type="submit" value="{general:search}"/></div>
                        </div>
                    </div>                              
       	         </div>
            </form>
        </div>
    </div>
	
    <div class="col-md-12"> 
        <div class="panel panel-default">
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-striped table-actions table-hover" id="articles">
                        <thead>
                            <tr>
                                <th width="1">Статус</th>
                                <th width="100">Название авиалиний</th>
                                <th width="100">Откуда</th>
                                <th width="100">Куда</th>
                                <th width="100">Время</th>
                                <th width="100">Цена</th>
                                <th width="1">{general:action}</th>
                            </tr>
                        </thead>
                        {if $articles}
                        <tbody>
                        {foreach item=article from=$articles name=articles}
                            <tr id="article-{$article.articleId}"{if $article.status == 'hidden'} class="opacity7"{/if}>
                                <td style="line-height: 58px;" nowrap="nowrap">
                                    {if $article.status == "visible"}
                                        <span class="fa fa-eye btn btn-rounded btn-green" style="font-size: 13px;cursor: auto;"></span>
                                        {else}
                                        <span class="fa fa-eye-slash btn btn-rounded btn-danger" style="font-size: 13px;cursor: auto;"></span>
                                    {/if}
                                    </td>
                                <td style="line-height: 58px;{if $article.title == 'Uzairways'}background-image: url(https://upload.wikimedia.org/wikipedia/commons/e/ef/Uzbekistan_Airways_logo.svg);background-repeat: no-repeat;background-position: left;background-size: 45%;{/if}{if $article.title == 'S7'}background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/S7_new_logo.svg/1280px-S7_new_logo.svg.png);background-repeat: no-repeat;background-position: left;background-size: 45%;{/if}" nowrap="nowrap">
                                    {if $article.title != 'Uzairways' and $article.title !='S7'}
                                {$article.title|truncate:75}{/if}
                                </td>
                                <td style="line-height: 58px;" nowrap="nowrap">{$article.summary}</td>
                                <td style="line-height: 58px;" nowrap="nowrap">{$article.content}</td>
                                <td style="line-height: 58px;" nowrap="nowrap">{$article.alias}</td>
                                <td style="line-height: 58px;" nowrap="nowrap">{$article.articul}</td>
                                <td class="btn-link-action">
                                    <a class="btn btn-rounded" href="tickets.php?action[edit]=true&article[articleId]={$article.articleId}&page={$page}"><span class="fa fa-pen"></span></a>  
                                    <a class="btn btn-danger btn-rounded" onclick="deleteArticle({$article.articleId}, '{$article.title nofilter}');"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
  						{/foreach}
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="small" colspan="4">{general:results}</td>
                                <td align="right" colspan="3">
                                    {if $pageNums.pages}             
                                    <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                        {foreach from=$pageNums.pages item=number}
                                        {if $number eq $page}
                                        <li class="active"><a href="tickets.php?page={$number}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
                                        {elseif $number eq '...'}
                                        ...
                                        {else}
                                        <li><a href="tickets.php?page={$number}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
                                        {/if}
                                        {/foreach}
                                    </ul>  
                                    {/if}
                                </td>
                            </tr>
                        </tfoot>
                        {else}
                        <tbody><tr class="odd"><td class="data none" colspan="7" align="center">- {general:none} -</td></tr></tbody>
                        {/if}   
                    </table>
                </div>
            </div>
        </div> 	
    </div>

    <script type="text/javascript">
        {if $query || $status || $section}showSearchForm(true);{/if}
    </script>
  {/if}
</div>


<script>
    var articleId = '{$article.articleId}';
    {literal}
    $(document).ready(function () {
        Dropzone.autoDiscover = false; 
        $("#dZUpload").dropzone({ 
            url: "tickets.php", 
            addRemoveLinks: false, 
            maxFilesize: 2,
            acceptedFiles: "image/*",
            params: {'action':'uploadImage','articleId': articleId},
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
        maxFileSize: 1000
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
        $.post('tickets.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
            if (data.update == 1){            
                $('.gallery-item.item-'+id+' .im_desc').text(desc);
                $('.gallery-item.item-'+id+' .im_link').text(link);
            }

        }, 'json');
    });
{/literal}           
</script>




{include file="footer.tpl"}