{include file="header.tpl" activeItem="sections" title="{sections:title}"}
<div class="page-content-wrap">
    
    {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{sections:messages:0}{literal}', layout: 'topCenter', type: 'success'});{/literal}"></span>{/if}
    {if $messages.deleted}<span id="deletedMessage" onclick = "{literal}noty({text: '{/literal}{sections:messages:1}{literal}', layout: 'topCenter', type: 'success'});{/literal}"></span>{/if}
    {if $messages.sorted}<span id="sortedMessage" onclick = "{literal}noty({text: '{/literal}{sections:messages:2}{literal}', layout: 'topCenter', type: 'success'});{/literal}"></span>{/if}
    
    {if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{sections:errors:0}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.section_not_found}<span id="sectionNotFoundError" onclick = "{literal}noty({text: '{/literal}{sections:errors:1}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.name}<span id="nameError" onclick = "{literal}noty({text: '{/literal}{sections:errors:2}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.fileName}<span id="fileNameError" onclick = "{literal}noty({text: '{/literal}{sections:errors:3}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if} 
    {if $errors.fileNameExists}<span id="fileNameExistsError" onclick = "{literal}noty({text: '{/literal}{sections:errors:4}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.htaccess}<span id="htaccessError" onclick = "{literal}noty({text: '{/literal}{sections:errors:5}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.serializations}<span id="serializationsError" onclick = "{literal}noty({text: '{/literal}{sections:errors:6}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.fileNameProhibited}<span id="fileNameProhibitedError" onclick = "{literal}noty({text: '{/literal}{sections:errors:7}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{sections:errors:8}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.sectionType}<span id="sectionTypeError" onclick = "{literal}noty({text: '{/literal}{sections:errors:13}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.error_parent_type_content}<span id="errorParentTypeContent" onclick = "{literal}noty({text: '{/literal}{sections:errors:15}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    {if $errors.error_parent_type}<span id="errorParentType" onclick = "{literal}noty({text: '{/literal}{sections:errors:16}{literal}', layout: 'topCenter', type: 'error'});{/literal}"></span>{/if}
    <script>
    {literal}
        $(document).ready(function () {
            {/literal}
            {if $errors.not_saved} $('#notSavedError').click();{/if}
            {if $errors.section_not_found} $('#sectionNotFoundError').click();{/if}
            {if $errors.name} $('#nameError').click(); {/if}
            {if $errors.fileName} $('#fileNameError').click();{/if}
            {if $errors.fileNameExists} $('#fileNameExistsError').click();{/if}
            {if $errors.htaccess} $('#htaccessError').click();{/if}
            {if $errors.serializations} $('#serializationsError').click();{/if}
            {if $errors.fileNameProhibited} $('#fileNameProhibitedError').click();{/if}
            {if $errors.fileNameCharacters} $('#fileNameCharactersError').click();{/if}
            {if $errors.error_type_content} $('#errorTypeContent').click();{/if}
            {if $errors.error_parent_type_content} $('#errorParentTypeContent').click();{/if}
            {if $errors.error_parent_type} $('#errorParentType').click();{/if}
            
            {if $messages.saved} $('#savedMessage').click();{/if}
            {if $messages.deleted} $('#deletedMessage').click();{/if}
            {if $messages.sorted} $('#sortedMessage').click();{/if}
            {literal}
        });
        function deleteImageError(){noty({text: '{/literal}{sections:errors:14}{literal}',layout: 'topCenter',type: 'error'})}
        function deleteImageMessage(){noty({text: '{/literal}{sections:messages:5}{literal}',layout: 'topCenter',type: 'success'})}
        function successImageMessage(){noty({text: '{/literal}{sections:messages:10}{literal}',layout: 'topCenter',type: 'success'})}
        function moveUpMessage(){noty({text: '{/literal}{sections:messages:3}{literal}',layout: 'topCenter',type: 'warning'})}
        function moveDownMessage(){noty({text: '{/literal}{sections:messages:4}{literal}',layout: 'topCenter',type: 'warning'})}
        function topMenuMessage(){noty({text: '{/literal}{sections:messages:6}{literal}',layout: 'topCenter',type: 'warning'})}
        function downMenuMessage(){noty({text: '{/literal}{sections:messages:7}{literal}',layout: 'topCenter',type: 'warning'})}
        
        function sectionVisibleMessage(){noty({text: '{/literal}{sections:messages:8}{literal}',layout: 'topCenter',type: 'warning'})}
        function sectionHiddenMessage(){noty({text: '{/literal}{sections:messages:9}{literal}',layout: 'topCenter',type: 'warning'})}
        
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
                <div class="col-md-3 nopadding_left"><h2>{sections:title}</h2></div>
                <div class="col-md-6 content-frame-body-left">
                    <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
                    <div class="upload-image alert message" role="alert"></div>
                </div>                          
            </div>
        </div>

        <div class="col-md-12">
            <script>{literal}$(function () {function e() {alias_touched || $("#alias").val(a()), meta_title_touched || $("#meta_title").val(m()), keywords_touched || $("#keywords").val(i()), description_touched || $("#description").val(t()), fileName_touched || $("#fileName").val(n())}function a() {return name = $("#name").val()}function m() {return name = $("#name").val()}  function i() {return name = $("#name").val()}function t() {return name = $("#name").val()}function n() {return fileName = $("#name").val(), fileName = fileName.replace(/[\s]+/gi, "{/literal}{$config.filename_word_separator}{literal}"), fileName = l(fileName), fileName = fileName.replace(/[^0-9a-z_\-]+/gi, "").toLowerCase()}function l(e) {for (var a = "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я".split("-"), i = "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya".split("-"), t = "", n = 0, l = e.length; l > n; n++) {var o = e.charAt(n),c = a.indexOf(o);t += c >= 0 ? i[c] : o}return t}alias_touched = !0, meta_title_touched = !0, keywords_touched = !0, description_touched = !0, fileName_touched = !0, ($("#alias").val() == a() || "" == $("#alias").val()) && (alias_touched = !1), ($("#meta_title").val() == i() || "" == $("#meta_title").val()) && (meta_title_touched = !1), ($("#keywords").val() == i() || "" == $("#keywords").val()) && (keywords_touched = !1),  ($("#description").val() == t() || "" == $("#description").val()) && (description_touched = !1), ($("#fileName").val() == n() || "" == $("#fileName").val()) && (fileName_touched = !1), $("#alias").change(function () {alias_touched = !0}), $("#meta_title").change(function () {meta_title_touched = !0}),$("#keywords").change(function () {keywords_touched = !0}), $("#description").change(function () {description_touched = !0}), $("#fileName").change(function () {fileName_touched = !0}), $("#name").keyup(function () {e()})});{/literal}</script>

            <form action="sections.php" method="post" id="section" enctype="multipart/form-data">
                <input type="hidden" name="section[sectionId]" value="{$section.sectionId}" />
                <input type="hidden" name="parentId" value="{$parentId}" />
                <input type="hidden" name="action[save]" value="1" />
                <div class="panel panel-default tabs">                   
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{sections:tabs:general}</a></li>
                        <li class=""><a href="#summary" data-toggle="tab" aria-expanded="false">{sections:tabs:summary}</a></li>
                        <li class=""><a href="#content" data-toggle="tab" aria-expanded="false">{sections:tabs:content}</a></li>
                        <li class=""><a href="#content_two" data-toggle="tab" aria-expanded="false">Доп. контент</a></li>
                        {if $section.photo_gallery eq '1'}<li class=""><a href="#gallery" data-toggle="tab" aria-expanded="false">{sections:tabs:images}</a></li>{/if}
                        <li class=""><a href="#advanced" data-toggle="tab" aria-expanded="false">{sections:tabs:advanced}</a></li>
                        <li class=""><a href="#misc" data-toggle="tab" aria-expanded="false">{sections:tabs:misc}</a></li>
                    </ul>                  
                    
                    <div class="panel-body tab-content nopadding">
                        <div class="tab-pane active" id="general">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <div class="col-md-6 col-xs-12 nopadding_left">
                                        <div class="col-md-6 col-xs-12 nopadding_left">
                                            <div class="form-group">
                                                {sections:sectionType}
                                                {html_options options=$types id="type" name='section[type]' selected=$section.type class="form-control select"}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 nopadding_right">
                                            <div class="form-group">
                                                {sections:tableType}
                                                {html_options options=$typeContents id="type_content" name='section[type_content]' selected=$section.type_content class="form-control select"}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {sections:status}
                                            {html_options options=$statuses name='section[status]' id=status selected=$section.status class="form-control select"}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 nopadding_right">
                                        <div class="col-md-12 col-xs-12 nopadding">{sections:settingSection}</div>
                                        <div class="col-md-6 col-xs-12 nopadding_left">
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="top_menu" name="section[top_menu]" value="1" {if $section.top_menu || !$section}checked{/if}/>
                                                    <label for="top_menu"><span class="chk-span"></span><i>{sections:mainMenu}</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="footer_menu" name="section[footer_menu]" value="1" {if $section.footer_menu}checked{/if}/>
                                                    <label for="footer_menu"><span class="chk-span"></span><i>{sections:footerMenu}</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="toMain" name="section[toMain]" value="1" {if $section.toMain}checked{/if}/>
                                                    <label for="toMain"><span class="chk-span"></span><i>Отображать на самом верху</i></label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-xs-12 nopadding_right">
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="top_submenu" name="section[top_submenu]" value="1" {if $section.top_submenu}checked{/if}/>
                                                    <label for="top_submenu"><span class="chk-span"></span><i>{sections:hiddenMainMenu}</i></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox-material">
                                                    <input type="checkbox" id="photo_gallery" name="section[photo_gallery]" value="1" {if $section.photo_gallery}checked{/if}/>
                                                    <label for="photo_gallery"><span class="chk-span"></span><i>{sections:photoGallery}</i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-xs-12 nopadding_left"> 
                                        <div class="form-group">
                                            {sections:general:parent}                                                                                         
                                            {if $parents}
                                                {html_options options=$parents name='section[parentId]' id=parentId selected=$section.parentId|default:$parentId class="form-control select"}
                                            {else}
                                                {sections:general:na}<input type="hidden" name="section[parentId]" value="0"/>
                                            {/if}
                                        </div>              
                                        {fetch_section assign=parent section=$section.parentId}
                                        {* <div class="form-group" id="blockType" {if $parent.parentId != 443}style="display: none"{/if}>
                                            <span class="col-md-12" style="padding-left: 0; padding-bottom:10px">Тип блока:</span>
                                            <div class="radio" style="display: contents;">
                                              <label style="position: relative;padding-left: 0"><input style="position: absolute;right: 17px;bottom: -13px;" type="radio" name="section[block]" value="left" checked>
<svg id="Color" enable-background="new 0 0 24 24" height="50" width="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="#90a4ae"><path d="m23.25 0h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 3h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 6h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 9h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 12h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 15h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 18h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 21h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/></g><path d="m11 1.5v10.5c0 .23-.05.45-.15.65-.16.33-.43.59-.77.73-.18.08-.37.12-.58.12h-8c-.83 0-1.5-.67-1.5-1.5v-10.5c0-.83.67-1.5 1.5-1.5h8c.83 0 1.5.67 1.5 1.5z" fill="#90caf9"/><path d="m11 7.82v4.18c0 .83-.67 1.5-1.5 1.5h-7.99l6.115-8.737c.09-.127.233-.206.389-.213s.305.06.405.179z" fill="#689f38"/><path d="m10.85 12.65c-.16.33-.43.59-.77.73-.18.08-.37.12-.58.12h-8c-.83 0-1.5-.67-1.5-1.5v-3.21l2.79-2.79c.19-.19.45-.3.71-.3.27 0 .52.11.71.3z" fill="#8bc34a"/></svg></label>
                                            </div>
                                            <div class="radio" style="display: contents;">
                                              <label style="position: relative;"><input style="position: absolute;right: 17px;bottom: -13px;" type="radio"  name="section[block]" value="right">
<svg id="Color" enable-background="new 0 0 24 24" viewBox="0 0 24 24" width="50" height="50" xmlns="http://www.w3.org/2000/svg"><g fill="#90a4ae"><path d="m.75 1.5h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75z"/><path d="m.75 4.5h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75z"/><path d="m.75 7.5h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75z"/><path d="m.75 10.5h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75z"/><path d="m.75 13.5h9.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75z"/><path d="m23.25 15h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 18h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/><path d="m23.25 21h-22.5c-.414 0-.75.336-.75.75s.336.75.75.75h22.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"/></g><path d="m24 1.5v10.5c0 .23-.05.45-.15.65-.16.33-.43.59-.77.73-.18.08-.37.12-.58.12h-8c-.83 0-1.5-.67-1.5-1.5v-10.5c0-.83.67-1.5 1.5-1.5h8c.83 0 1.5.67 1.5 1.5z" fill="#90caf9"/><path d="m24 7.82v4.18c0 .83-.67 1.5-1.5 1.5h-7.99l6.115-8.737c.089-.128.233-.206.388-.213.156-.007.305.06.405.179z" fill="#689f38"/><path d="m23.85 12.65c-.16.33-.43.59-.77.73-.18.08-.37.12-.58.12h-8c-.83 0-1.5-.67-1.5-1.5v-3.21l2.79-2.79c.19-.19.45-.3.71-.3.27 0 .52.11.71.3z" fill="#8bc34a"/></svg></label>
                                            </div>
                                        </div> *}
                                        <div class="form-group">
                                            {sections:general:name}                                         
                                            <input class="form-control" autocomplete="off" id="name" type="text" name="section[name]" value="{$section.name}"/>
                                        </div>
                                        <div class="form-group">
                                            {sections:general:filename}
                                            <input class="form-control" id="fileName" type="text" name="section[fileName]" value="{$section.fileName}" /> 
                                        </div>
                                        <div class="form-group">
                                            {sections:general:alias}
                                            <input class="form-control" autocomplete="off" id="alias" type="text" name="section[alias]" value="{$section.alias}"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="field_name">Доп. поле</label>
                                            <input class="form-control" autocomplete="off" id="dop" type="text" name="section[dop]" value="{$section.dop}"/>
                                        </div>
                                        {if $conf.section_icon eq '1'}
                                        <div class="form-group">
                                            {sections:sectionIcon}
                                            <input class="form-control" autocomplete="off" id="section_icon" type="text" name="section[section_icon]" value="{$section.section_icon}"/>
                                        </div>
                                        {/if}
                                    </div>

                                    <div class="col-md-4 nopadding_right"> 
                                        {if $conf.section_images eq '1'}
                                        <div class="form-group">
                                            <div class="col-md-12 col-xs-12 nopadding">
                                                {sections:primaryImage}
                                                {if $section.hasImage eq '1'}   
                                                <div class="file-previewzo-obzor" id="imageOptions">
                                                    <div class="close fileinput-remove text-right" onclick="return deleteSectionImage({$section.sectionId})" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                                                    <div class="file-preview-thumbnails">
                                                        <div class="file-preview-frame" id="imageOptions">
                                                            <img src="{$section.images.original.url}" class="file-preview-image" alt="{$section.name}">
                                                        </div>
                                                        <div id="ajaxStatus"></div>
                                                        <span id="deletingStatus"></span>
                                                        <span id="errorBlock"></span>
                                                    </div>
                                                </div>
                                                {/if}
                                                <div><input type="file" name="image" id="file-simple" data-preview-file-type="any"></div>
                                            </div>
                                        </div>
                                        {/if}
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="summary"><textarea name="section[summary]" class="description">{$section.summary}</textarea></div>
                        <div class="tab-pane" id="content"><textarea name="section[content]" class="description">{$section.content}</textarea></div> 
                        <div class="tab-pane" id="content_two"><textarea name="section[content_two]" class="description">{$section.content_two}</textarea></div> 

                        {if $section.photo_gallery eq '1'}
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
                                                            <li><span class="remove_image" data-id="{$file.imageId}"><i class="fa fa-times"></i></span></li>
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
                            
                        <div class="tab-pane" id="advanced">
                            {if $section.modifiedOn}
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">{general:status}</h5></div>
                            <div class="clearfix">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:modified}</label>
                                <div class="col-md-6 col-xs-12" style="padding-top:5px;">
                                    <i>{$section.modifiedOn|unescape:'html'} ({$section.modifiedBy.loginName|default:"unknown user"|unescape:'html'})</i>
                                </div>
                            </div>
                            {/if}
                            {if $section.addedOn}
                            <div class="clearfix">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:created}</label>
                                <div class="col-md-6 col-xs-12" style="padding-top:7px;">
                                    <i>{$section.addedOn|unescape:'html'} ({$section.addedBy.loginName|default:"unknown user"|unescape:'html'})</i>
                                </div>
                            </div>
                            {/if}
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">{general:section}</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:template}</label>
                                <div class="col-md-3 col-xs-12">
                                    {html_options output=$templates values=$templates selected=$section.templateName name="section[templateName]" class="form-control select"}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:caching}</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="0" id="isCachedDefault" {if $section.isCached == 0}checked{/if}><i>{general:cachingDefault}</i></label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="-1" id="isCachedDisabled" {if $section.isCached == -1}checked{/if}><i>{general:cachingDisabled}</i></label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[isCached]" value="1" id="isCachedEnabled" {if $section.isCached == 1}checked{/if}><i>{general:enableCachingFor}</i></label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        {html_options options=$cachingTimeOptions name="section[cacheTime]" selected=$section.cacheTime class="form-control select"}
                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        {html_options options=$cachingPeriodOptions name="section[cachePeriod]" selected=$section.cachePeriod|default:86400 class="form-control select"} 
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:comments}</label>
                                <div class="col-md-6 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="0" id="commentsEnabledDefault" {if $section.commentsEnabled == 0}checked{/if}><i>{general:defaultComments}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="-1" id="commentsEnabledDisabled" {if $section.commentsEnabled == -1}checked{/if}><i>{general:disableComments}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[commentsEnabled]" value="1" id="commentsEnabledEnabled" {if $section.commentsEnabled == 1}checked{/if}><i>{general:enableComments} </i>
                                        </label>
                                    </div>			
                                </div>
                            </div>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Subsections</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:template}</label>
                                <div class="col-md-3 col-xs-12">
                                    {html_options output=$templates values=$templates selected=$section.subTemplateName name="section[subTemplateName]" class="form-control select"}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:caching}</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subIsCached]" value="0" id="subIsCachedDefault" {if $section.subIsCached == 0}checked{/if}><i>{general:cachingDefault}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subIsCached]" value="-1" id="subIsCachedDisabled" {if $section.subIsCached == -1}checked{/if}><i>{general:cachingDisabled}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label><input type="radio" name="section[subIsCached]" value="1" id="subIsCachedEnabled" {if $section.subIsCached == 1}checked{/if}><i>{general:enableCachingFor}</i></label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        {html_options options=$cachingTimeOptions name="section[subCacheTime]" selected=$section.subCacheTime class="form-control select"}
                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        {html_options options=$cachingPeriodOptions name="section[subCachePeriod]" selected=$section.subCachePeriod|default:86400 class="form-control select"} 
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:comments}</label>
                                <div class="col-md-6 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="0" id="subCommentsEnabledDefault" {if $section.subCommentsEnabled == 0}checked{/if}>
                                            <i>{general:defaultComments}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="-1" id="subCommentsEnabledDisabled" {if $section.subCommentsEnabled == -1}checked{/if}>
                                            <i>{general:disableComments}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[subCommentsEnabled]" value="1" id="subCommentsEnabledEnabled" {if $section.subCommentsEnabled == 1}checked{/if}>
                                            <i>{general:enableComments}</i>
                                        </label>
                                    </div>			
                                </div>
                            </div>
                            <div class="panel-heading" style="margin-bottom: 10px;"><h5 class="panel-title">Articles</h5></div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:template}</label>
                                <div class="col-md-3 col-xs-12">
                                    {html_options output=$templates values=$templates selected=$section.artTemplateName name="section[artTemplateName]" class="form-control select"}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label control_text_right">{general:caching}</label>
                                <div class="col-md-3 col-xs-12"> 
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="0" id="artIsCachedDefault" {if $section.artIsCached == 0}checked{/if}><i>{general:cachingDefault}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="-1" id="artIsCachedDisabled" {if $section.artIsCached == -1}checked{/if}><i>{general:cachingDisabled}</i>
                                        </label>
                                    </div>
                                    <div class="check_box">
                                        <label>
                                            <input type="radio" name="section[artIsCached]" value="1" id="artIsCachedEnabled" {if $section.artIsCached == 1}checked{/if}><i>{general:enableCachingFor}</i>
                                        </label>
                                    </div>			
                                </div>
                                <div class="col-md-3 col-xs-12 nopadding" style="padding-top: 35px;"> 
                                    <div class="col-md-3 col-xs-2 nopadding">
                                        {html_options options=$cachingTimeOptions name="section[artCacheTime]" selected=$section.artCacheTime class="form-control select"}
                                    </div>
                                    <div class="col-md-4 col-xs-2 nopadding">
                                        {html_options options=$cachingPeriodOptions name="section[artCachePeriod]" selected=$section.artCachePeriod|default:86400 class="form-control select"}
                                    </div> 
                                </div>
                            </div>
                            <div class="clear" style="margin-bottom: 10px;"></div>
                        </div>   
                        <div class="tab-pane" id="misc">
                            <div class="panel panel-default">
                                <div class="panel-body"> 
                                    <div class="form-group">
                                        {general:metaTitle}
                                        <input class="form-control" autocomplete="off" id="meta_title" type="text" name="section[meta_title]" value="{$section.meta_title}"/>
                                    </div>
                                    <div class="form-group">
                                        {general:keywords}
                                        <textarea name="section[keywords]" id="keywords" class="form-control" rows="4">{$section.keywords}</textarea>
                                    </div>
                                    <div class="form-group">
                                        {general:description}
                                        <textarea name="section[description]" id="description" class="form-control" rows="4">{$section.description}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div align="center" class="col-md-12 main main_buttons">
                    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" /> &nbsp;
                    <a class="btn btn-primary" href="sections.php{if $parentId}?parentId={$parentId}{/if}">{general:cancel}</a>
                </div>
            </form>
        </div>
    {elseif $action.confirmDelete}

        <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="page-title"><h2>{sections:title}</h2></div></div></div>
        <div class="col-md-12">
            <form action="sections.php" method="post" id="confirmDelete">
                <input type="hidden" name="section[sectionId]" value="{$section.sectionId}" />
                <input type="hidden" name="parentId" value="{$parentId}" />
                <div class=" panel panel-colorful">
                    <div class="panel-heading" id="templateNav">{sections:deleting}</div>
                    <div class="panel-body">
                    {if $section.hasSubsections || $section.hasArticles}
                        {if $section.hasArticles}
                        <div class="form-group">
                            <label class="field_name">{articles:title}</label>
                            {html_options options=$articleOptions name='action[moveArticlesTo]' class="form-control select"}
                        </div>
                        {/if}
                        {if $section.hasSubsections}
                        <div class="form-group">
                            <label class="field_name">{sections:subsectionsAndArticles}</label> 
                            {html_options options=$subsectionOptions name='action[moveSubsectionsTo]' class="form-control select"}
                        </div>
                        {/if}
                    {/if}

                    {sections:deleteSectionQuestion}? 
                    </div>
                    <div class="panel-footer">
                        <input class="btn btn-danger" type="submit" name="action[deleteConfirmed]" value="&nbsp; {general:yes} &nbsp;" /> &nbsp;
                        <a class="btn btn-primary pull-right" href="sections.php{if $parentId}?parentId={$parentId}{/if}">{general:cancel}</a>
                    </div>                            
                </div>
            </form>
        </div>	
        
    {else}

        <div class="content-frame" style="margin-bottom:10px;">
            <div class="content-frame-top">                        
                <div class="col-md-3 col-xs-3 nopadding_left"><h2>{sections:title}</h2></div>
                <div class="col-md-6 col-xs-6 content-frame-body-left"><div id="ajaxStatus" class="alert alert-success col-md-6 info-box-img" role="alert"></div></div>
                <div class="col-md-3 col-xs-3 nopadding_right">                                                  
                    <div class="pull-right"> 
                        <a class="btn btn-danger" href="sections.php?action[edit]=true{if $parentId}&parentId={$parentId}{/if}" data-toggle="tooltip" data-placement="left" data-original-title="{sections:add}"><i class="fa fa-plus"></i></a>
                        {if $parentId}&nbsp;&nbsp; 
                        <a class="btn btn-primary" href="sections.php" data-toggle="tooltip" data-placement="bottom" data-original-title="{sections:upToRoot}"><i class="fa fa-reply-all"></i></a>
                            {if $parent.parentId} &nbsp;&nbsp; 
                            <a class="btn btn-primary" href="sections.php?parentId={$parent.parentId}" data-toggle="tooltip" data-placement="bottom" data-original-title="{$parent.parent.name}"><i class="fa fa-reply"></i></a>
                            {/if} 
                        {/if}                           
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
                                    <th class="text-center" width="50">{general:table:id}</th>
                                    <th class="">{general:table:name}</th>
                                    <th class="">{general:table:alias}</th>
                                    <th class="">{general:table:path}</th>
                                    <th class="" width="150">{general:table:type}</th>
                                    <th class="" width="150">{general:table:typeContent}</th>
                                    <th class="text-center" width="100">{general:table:action}</th>
                                </tr>
                            </thead>
                            {if $sections}
                            <tbody>   
                            {foreach item=section from=$sections name=sections}                                      
                            <tr id="section-{$section.sectionId}" class="{if $section.status eq 'hidden'}opacity7{/if}">
                                <td class="text-center">{$section.sectionId}</td>
                                <td  nowrap="nowrap">
                                    {if $section.hasSubsections}<a href="sections.php?parentId={$section.sectionId}" style="border-bottom: 1px dashed;">{$section.name}</a>{else}{$section.name}{/if}
                                </td>
                                <td  nowrap="nowrap">{$section.alias}</td>
                                <td nowrap="nowrap"><a href="{$section.url}" target="_blank">{if $section.fileName eq 'index'}/{else}/{$section.fileName}/{/if}</a></td>
                                <td class="" nowrap="nowrap">{$section.typeName|unescape:'html'}</td>
                                <td class="" nowrap="nowrap">{$section.typeContentName|unescape:'html'}</td>
                                <td class="btn-link-action" nowrap="nowrap">
                                    <a class="status_selection btn btn-rounded {if $section.status eq 'hidden'}btn-danger{else}btn-green{/if}" style="width: 35px" id="{$section.sectionId}" value="{$section.status}">
                                        <span class="fa fa-eye{if $section.status eq 'hidden'}-slash{/if}" style="font-size: 13px;" data-toggle="tooltip" data-placement="top" data-original-title="Поменять статуc"></span>
                                    </a>

                                    <div class="form-group" style="width: 25px">
                                        <div class="checkbox-material inline-block">
                                            <input class="up_menu{$section.sectionId}" type="checkbox" id="up_menu-{$section.sectionId}" {if $section.top_menu eq '1'}checked{/if} value="{$section.top_menu}"/>
                                            <label class="top_menu" id="t{$section.sectionId}" data-id="{$section.sectionId}" {if $section.top_menu eq '1'}data-val="0"{else}data-val="1"{/if} for="up_menu-{$section.sectionId}"><span class="chk-span" data-toggle="tooltip" data-placement="top" data-original-title="Показать в главном меню" style="margin:0px;"></span></label>
                                        </div>
                                    </div>
                                    <a class="btn btn-rounded" href="sections.php?action[edit]=true&section[sectionId]={$section.sectionId}{if $parentId}&parentId={$parentId}{/if}">
                                        <span class="fa fa-pen" data-toggle="tooltip" data-placement="top" data-original-title="Редактировать"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveUp({$section.sectionId}, '{$section.name|unescape:'html'}')">
                                        <span class="fa fa-arrow-up" data-toggle="tooltip" data-placement="top" data-original-title="Поднять вверх"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveDown({$section.sectionId}, '{$section.name|unescape:'html'}')">
                                        <span class="fa fa-arrow-down" data-toggle="tooltip" data-placement="top" data-original-title="Опустить вниз"></span>
                                    </a>
                                    <a class="btn btn-danger btn-rounded" href="sections.php?action[confirmDelete]=true&section[sectionId]={$section.sectionId}{if $parentId}&parentId={$parentId}{/if}">
                                        <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="Удалить"></span>
                                    </a>
                                </td>
                            </tr>
                            {/foreach}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="small" colspan="3">{general:results}</td>
                                    <td align="right" colspan="4">
                                        {if $pageNums.pages}
                                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                        {foreach from=$pageNums.pages item=number}
                                            {if $number eq $page}
                                            <li class="active"><a href="sections.php?page={$number}{if $parentId}&parentId={$parentId}{/if}">{$number}</a></li>
                                            {elseif $number eq '...'}
                                                ...
                                            {else}
                                            <li><a href="sections.php?page={$number}{if $parentId}&parentId={$parentId}{/if}">{$number}</a></li>
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
    
    {/if}

</div>
<script>
    var sectionId = '{$section.sectionId}';
    {literal}
    $(document).ready(function () {
        Dropzone.autoDiscover = false; 
        $("#dZUpload").dropzone({ 
            url: "sections.php", 
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
        maxFileSize: 30000
    });

    $('.top_menu').click(function(){	
        var id = $(this).attr("data-id");
        var ckVal = $(this).attr("data-val");
        $.post('sections.php', {id: id, check: ckVal, action: 'menu'}, function(data){
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
        $.post('sections.php', {id: id, choice: choiceVal, action: 'status'}, function(data){
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
        $.post('sections.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
            if (data.update == 1){            
                $('.gallery-item.item-'+id+' .im_desc').text(desc);
                $('.gallery-item.item-'+id+' .im_link').text(link);
            }

        }, 'json');
    });

    
    
    {/literal}
</script>

{include file="footer.tpl"}