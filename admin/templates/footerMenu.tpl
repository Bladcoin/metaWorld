{include file="header.tpl" activeItem="footerMenu" title="{sections:title}"}
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

            <form action="footerMenu.php" method="post" id="section" enctype="multipart/form-data">
                <input type="hidden" name="section[sectionId]" value="{$section.sectionId}" />
                <input type="hidden" name="parentId" value="{$parentId}" />
                <input type="hidden" name="action[save]" value="1" />
                                    <div class="col-md-12 col-xs-12 nopadding_left">                                                              
                                        <div class="form-group">
                                            {sections:general:name}                                         
                                            <input class="form-control" autocomplete="off" id="name" type="text" name="section[name]" value="{$section.name}"/>
                                        </div>
                                        <style type="text/css">
                                            {literal}
                                            .menuSections {
                                            background: #036c89;
                                            display: flex;
                                            align-items: center;
                                            padding: 9px;
                                            padding-right: 35px;
                                            justify-content: center;
                                            color: white;
                                            margin-right: 5px;
                                            margin-bottom: 5px;
                                            position: relative;
                                            }
                                            .deleteMenu {
                                                cursor: pointer;
                                                position: absolute;
                                                background: #333333;
                                                top: 0;
                                                right: 0;
                                                padding: 9px;
                                            }
                                            .deleteMenu:hover {
                                                background: #204d74;
                                            }
                                            {/literal}
                                        </style>
                                        <div id="menuSections" style="display: flex;float:left;flex-wrap: wrap;">
                                            {if $section.menus}
                                            {assign var="menuSections" value=','|explode:$section.menus}
                                            {foreach from=$menuSections item=menuSection}
                                            {fetch_section assign=menuSec section=$menuSection}
                                            <div class="menuSections">{$menuSec.name}<div class="deleteMenu" data-id="{$menuSec.sectionId}">X</div></div>
                                            {/foreach}
                                            {/if}
                                        </div>
                                        <input type="hidden" value="{$section.menus}" name="section[menus]">
                                        <div class="col-md-2 col-xs-6 nopadding_left">
                                        {html_options options=$parents name='123' id=parentId selected=$section.parentId|default:$parentId class="form-control select"}
                                        </div>
                                        <button type="button" class="btn btn-primary"  name="action[addMenu]">Добавить пункт в меню</button>
                                        <div class="form-group">
                                            <input class="form-control" id="fileName" type="hidden" name="section[fileName]" value="{$section.fileName}" /> 
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" autocomplete="off" id="alias" type="hidden" name="section[alias]" value="{$section.alias}"/>
                                        </div>
                                    </div>
                </div>
                <div align="center" class="col-md-12 main main_buttons">
                    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" /> &nbsp;
                    <a class="btn btn-primary" href="footerMenu.php{if $parentId}?parentId={$parentId}{/if}">{general:cancel}</a>
                </div>
            </form>
        </div>
    {elseif $action.confirmDelete}

        <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="page-title"><h2>{sections:title}</h2></div></div></div>
        <div class="col-md-12">
            <form action="footerMenu.php" method="post" id="confirmDelete">
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
                        <a class="btn btn-primary pull-right" href="footerMenu.php{if $parentId}?parentId={$parentId}{/if}">{general:cancel}</a>
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
                        <a class="btn btn-danger" href="footerMenu.php?action[edit]=true{if $parentId}&parentId={$parentId}{/if}" data-toggle="tooltip" data-placement="left" data-original-title="{sections:add}"><i class="fa fa-plus"></i></a>
                        {if $parentId}&nbsp;&nbsp; 
                        <a class="btn btn-primary" href="footerMenu.php" data-toggle="tooltip" data-placement="bottom" data-original-title="{sections:upToRoot}"><i class="fa fa-reply-all"></i></a>
                            {if $parent.parentId} &nbsp;&nbsp; 
                            <a class="btn btn-primary" href="footerMenu.php?parentId={$parent.parentId}" data-toggle="tooltip" data-placement="bottom" data-original-title="{$parent.parent.name}"><i class="fa fa-reply"></i></a>
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
                                    <th class="text-center" width="100">{general:table:action}</th>
                                </tr>
                            </thead>
                            {if $sections}
                            <tbody>   
                            {foreach item=section from=$sections name=sections}                                      
                            <tr id="section-{$section.sectionId}">
                                <td class="text-center">{$section.sectionId}</td>
                                <td  nowrap="nowrap">
                                    {if $section.hasSubsections}<a href="footerMenu.php?parentId={$section.sectionId}" style="border-bottom: 1px dashed;">{$section.name}</a>{else}{$section.name}{/if}
                                </td>
                                <td  nowrap="nowrap">{$section.alias}</td>
                                <td class="btn-link-action" nowrap="nowrap">
                                    <a class="btn btn-rounded" href="footerMenu.php?action[edit]=true&section[sectionId]={$section.sectionId}{if $parentId}&parentId={$parentId}{/if}">
                                        <span class="fa fa-pen" data-toggle="tooltip" data-placement="top" data-original-title="Редактировать"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveUp({$section.sectionId}, '{$section.name nofilter}')">
                                        <span class="fa fa-arrow-up" data-toggle="tooltip" data-placement="top" data-original-title="Поднять вверх"></span>
                                    </a>
                                    <a class="btn btn-green btn-rounded" onclick="moveDown({$section.sectionId}, '{$section.name nofilter}')">
                                        <span class="fa fa-arrow-down" data-toggle="tooltip" data-placement="top" data-original-title="Опустить вниз"></span>
                                    </a>
                                    <a class="btn btn-danger btn-rounded" href="footerMenu.php?action[confirmDelete]=true&section[sectionId]={$section.sectionId}{if $parentId}&parentId={$parentId}{/if}">
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
                                            <li class="active"><a href="footerMenu.php?page={$number}{if $parentId}&parentId={$parentId}{/if}">{$number}</a></li>
                                            {elseif $number eq '...'}
                                                ...
                                            {else}
                                            <li><a href="footerMenu.php?page={$number}{if $parentId}&parentId={$parentId}{/if}">{$number}</a></li>
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
            url: "footerMenu.php", 
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
        maxFileSize: 2000
    });

    $('.top_menu').click(function(){	
        var id = $(this).attr("data-id");
        var ckVal = $(this).attr("data-val");
        $.post('footerMenu.php', {id: id, check: ckVal, action: 'menu'}, function(data){
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
        $.post('footerMenu.php', {id: id, choice: choiceVal, action: 'status'}, function(data){
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
        $.post('footerMenu.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
            if (data.update == 1){            
                $('.gallery-item.item-'+id+' .im_desc').text(desc);
                $('.gallery-item.item-'+id+' .im_link').text(link);
            }

        }, 'json');
    });

    
    
    {/literal}
</script>

{include file="footer.tpl"}