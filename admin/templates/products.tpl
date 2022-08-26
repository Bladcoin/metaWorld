{include file="header.tpl" activeItem="products" title="{products:title}"}
<div class="page-content-wrap">
  
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{products:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $errors.access_denied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{products:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.title}<span id="titleError" onclick = "{literal}noty({text: '{/literal}{products:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.sectionId}<span id="sectionIdError" onclick = "{literal}noty({text: '{/literal}{products:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{products:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.no_sections}<span id="noSectionsError" onclick = "{literal}noty({text: '{/literal}{products:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.image_not_saved}<span id="imageNotSavedError" onclick = "{literal}noty({text: '{/literal}{products:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.article_not_found}<span id="articleNotFoundError" onclick = "{literal}noty({text: '{/literal}{products:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileName}<span id="fileNameError" onclick = "{literal}noty({text: '{/literal}{products:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.fileNameExists}<span id="fileNameExistsError" onclick = "{literal}noty({text: '{/literal}{products:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.htaccess}<span id="htaccessError" onclick = "{literal}noty({text: '{/literal}{products:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.serializations}<span id="serializationsError" onclick = "{literal}noty({text: '{/literal}{products:errors:10}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameProhibited}<span id="fileNameProhibitedError" onclick = "{literal}noty({text: '{/literal}{products:errors:11}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fileNameCharacters}<span id="fileNameCharactersError" onclick = "{literal}noty({text: '{/literal}{products:errors:12}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
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
    function deleteImageMessage(){noty({text: '{/literal}{products:messages:1}{literal}',layout: 'topRight',type: 'success'})}
    function deleteProductMessage(){noty({text: '{/literal}{products:messages:2}{literal}',layout: 'topRight',type: 'success'})}
    
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
            <div class="col-md-3 col-xs-3 nopadding_left"><h2>{products:title}</h2></div>                                                
            <div class="col-md-6 col-xs-9 content-frame-body-left">
				<div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
				<div class="upload-image alert" role="alert"></div>
            </div>                            
        </div>
    </div>

    <script>{literal}$(function () {function e() {meta_title_touched || $("#meta_title").val(m()), keywords_touched || $("#keywords").val(i()), description_touched || $("#description").val(t()), fileName_touched || $("#fileName").val(n())}function m() {return name = $("#title").val()}function i() {return name = $("#title").val()}function t() {return name = $("#title").val()}function n() {return fileName = $("#title").val(), fileName = fileName.replace(/[\s]+/gi, "{/literal}{$config.filename_word_separator}{literal}"), fileName = l(fileName), fileName = fileName.replace(/[^0-9a-z_\-]+/gi, "").toLowerCase()}function l(e) {for (var a = "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я".split("-"), i = "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya".split("-"), t = "", n = 0, l = e.length; l > n; n++) {var o = e.charAt(n),c = a.indexOf(o);t += c >= 0 ? i[c] : o}return t}meta_title_touched = !0, keywords_touched = !0, description_touched = !0, fileName_touched = !0, ($("#meta_title").val() == i() || "" == $("#meta_title").val()) && (meta_title_touched = !1), ($("#keywords").val() == i() || "" == $("#keywords").val()) && (keywords_touched = !1), ($("#description").val() == t() || "" == $("#description").val()) && (description_touched = !1), ($("#fileName").val() == n() || "" == $("#fileName").val()) && (fileName_touched = !1), $("#meta_title").change(function () {meta_title_touched = !0}), $("#keywords").change(function () {keywords_touched = !0}), $("#description").change(function () {description_touched = !0}), $("#fileName").change(function () {fileName_touched = !0}), $("#title").keyup(function () {e()})});{/literal}</script>

    <form action="products.php" method="post" id="article" enctype="multipart/form-data">
        <input type="hidden" name="article[articleId]" value="{$article.articleId}" />
        <input type="hidden" name="action[save]" value="1" />
    
        <div class="col-md-12">  
            <div class="panel panel-default tabs ">                   
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{products:tabs:general}</a></li>
                    <li class=""><a href="#summary" data-toggle="tab" aria-expanded="false">{products:tabs:summary}</a></li>
                    <li class=""><a href="#content" data-toggle="tab" aria-expanded="false">{products:tabs:content}</a></li>
                    <li class=""><a href="#dopContent" data-toggle="tab" aria-expanded="false">Доп. текст</a></li>
                    <li class=""><a href="#gallery" data-toggle="tab" aria-expanded="false">{products:tabs:gallery}</a></li>
                    <li class=""><a href="#misc" data-toggle="tab" aria-expanded="false">{products:tabs:misc}</a></li>
                    <li class=""><a href="#seo" data-toggle="tab" aria-expanded="false">{products:tabs:seo}</a></li>
                </ul> 
                     
                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="general">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-body">
                                <div class="col-md-8">
                                    <div class="{if $conf.product_orderBy eq 1}col-md-6 nopadding_left{else}col-md-12 nopadding{/if}">
                                        <div class="form-group">{products:status}
                                            {html_options options=$statuses name='article[status]' id=status selected=$article.status class="form-control select"}
                                        </div>
                                    </div>
                                    {if $conf.product_orderBy eq 1}
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">{products:orderBy}
                                            <input class="form-control" autocomplete="off" id="orderBy" type="text" name="article[orderBy]" value="{$article.orderBy}" />
                                        </div>
                                    </div>
                                    {/if}
                                    <div class="form-group">{products:general:section}
                                        {if $sections}{html_options options=$sections name='article[sectionId]' id=sectionId selected=$article.sectionId class="form-control select"}{/if}
                                    </div> 
                                    <div class="form-group">{products:general:title}
                                        <input class="form-control" autocomplete="off" id="title" type="text" name="article[title]" value="{$article.title}" onblur="proposeFileName('title', 'fileName', 'article', '{$config.filename_word_separator}', '{$config.convert_filename_to_lowercase}');" />
                                    </div>
                                    <div class="form-group">{products:general:filename}
                                        <input class="form-control" autocomplete="off" id="fileName" type="text" name="article[fileName]" value="{$article.fileName}" />
                                    </div>
                                    {* <div class="form-group">{products:general:alias}
                                        <input class="form-control" autocomplete="off" id="alias" type="text" name="article[alias]" value="{$article.alias}" />
                                    </div> *}
                                    <div class="form-group">
                                      <div class="col-md-6 nopadding">
                                          <div class="check_box"><label><input type="radio" name="article[avail]" value="1"  {if $article.avail} checked{/if} /><i>Мы здесь</i></label></div>
                                          <div class="check_box"><label><input type="radio" name="article[avail]" value="0"  {if !$article.avail} checked{/if} /><i>Пройденный этап</i></label></div>
                                      </div>
                                    </div>

                                    
                                    {fetch_articles assign=models skip=$article.articleId fields="title,sectionId" limit=9999 section=890}

                                    {fetch_sections assign=catalogSections from=890 status='visible'}
                                    {php}
                                    //<?
                                      $models = $_smarty_tpl->get_template_vars('catalogSections');
                                      //$result = array('0'=>'Не указано');
                                      foreach($models as $key => $item){
                                        $result[$item['sectionId']] = $item['name'];
                                      }
                                      $_smarty_tpl->assign('cars',$result);
                                    {/php}
                                    <div class="form-group"><label class="field_name">Бренд</label>
                                        <select class="form-control select" name="article[connect]" id="connects">
                                          <option value=""></option>
                                          {foreach from=$cars item=car key=key name=cars} 
                                          <option value="{$key}"{if $article.connect == $key}selected="true"{/if} >{$car}</option>
                                          {/foreach} 
                                        </select>
                                    </div> 




                                    {* <div class="form-group"><label class="field_name">Связанные модели</label>
                                        <input type="hidden" name="article[connect]" value="{$article.connect}">
                                        <select multiple class="form-control select" id="connects">
                                          <option value=""></option>
                                          {foreach from=$cars item=car key=key name=cars} 
                                          <option value="{$key}"{if $article.connectArray && $key|in_array:$article.connectArray}selected="true"{/if} >{$car}</option>
                                          {/foreach} 
                                        </select>
                                        <input type="hidden" value="{$article.connect}" name="article[connect]">
                                        {literal}
                                        <script type="text/javascript">
                                            $('#connects').change(function(){
                                                $('[name="article[connect]"]').val(JSON.stringify($('#connects').val()))
                                            })
                                        </script>
                                        {/literal}
                                    </div>  *}
                                    {* <div class="col-md-4 nopadding_left">
                                      <div class="form-group">                                        
                                          <label class="field_name">Марка</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[marka]" value="{$article.marka}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding">
                                      <div class="form-group">                                        
                                          <label class="field_name">Модель</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[model]" value="{$article.model}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding_right">
                                      <div class="form-group">                                        
                                          <label class="field_name">Позиция</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[poz]" value="{$article.poz}" />
                                      </div>
                                    </div> *}
                                    <div class="col-md-4 nopadding_left">
                                      <div class="form-group">                                        
                                          <label class="field_name">{products:articul}</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[articul]" value="{$article.articul}" />
                                      </div>
                                    </div>
                                    {* <div class="col-md-4 nopadding">
                                      <div class="form-group">                                        
                                          <label class="field_name">Тип кузова</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[kuzov]" value="{$article.kuzov}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding_right">
                                      <div class="form-group">                                        
                                          <label class="field_name">Цвет</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[colors]" value="{$article.colors}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding_left">
                                      <div class="form-group">                                        
                                          <label class="field_name">Год выпуска</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[god]" value="{$article.god}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding">
                                      <div class="form-group">                                        
                                          <label class="field_name">Двигатель</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[dvigatel]" value="{$article.dvigatel}" />
                                      </div>
                                    </div> *}
                                    {* <div class="col-md-4 nopadding_right">
                                      <div class="form-group">                                        
                                          <label class="field_name">КПП</label>
                                          <input class="form-control" autocomplete="off" type="text" name="article[kpp]" value="{$article.kpp}" />
                                      </div>
                                    </div> *}
                                    {* <div id="colors">
                                      {foreach from=$article.colors item=color key=key name=colors}  
                                        <div class="col-md-3 nopadding">
                                          <div class="form-group">                                        
                                              <label class="field_name">Цвет <i class="fa fa-trash delColor" style="cursor: pointer;"></i></label>
                                              <input class="jscolor form-control" autocomplete="off" type="text" name="article[colors][]" value="{$color}" />
                                          </div>
                                        </div>    
                                      {/foreach}
                                    </div> *}
                                    {* {literal}
                                    <script type="text/javascript">
                                      $(document).on('click','.delColor',function(){
                                        $(this).parents().eq(2).remove();
                                      })
                                      function addColor(){
                                        let tmp = `
                                        <div class="col-md-3 nopadding">
                                          <div class="form-group">                                        
                                              <label class="field_name">Цвет <i class="fa fa-trash delColor" style="cursor: pointer;"></i></label>
                                              <input class="jscolor form-control" autocomplete="off" type="text" name="article[colors][]" value="" />
                                          </div>
                                        </div>
                                        `;
                                        $('#colors').append(tmp);
                                        jscolor.installByClassName("jscolor");
                                      }
                                    </script>
                                    {/literal}
                                    <div class="col-md-12 nopadding">
                                      <div class="form-group">
                                        <button type="button" onclick="addColor()" class="btn btn-primary">Добавить цвет</button>
                                      </div>
                                    </div> *}
                                    <div class="col-md-12 nopadding">
                                        <div class="col-md-4 nopadding_left">  
                                            <div class="form-group">{products:price}
                                                <input class="form-control" autocomplete="off" type="text" name="article[price]" value="{$article.price}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 nopadding"> 
                                            <div class="form-group">{products:sale}
                                                <input class="mask_percent form-control" autocomplete="off" type="text" name="article[discount]" value="{$article.discount}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 nopadding_right"> 
                                            <div class="form-group">{products:discountprice}
                                                <input class="form-control" autocomplete="off" type="text" name="article[discountprice]" value="{$article.discountprice}" />
                                            </div>
                                        </div>
                                        {* <div class="col-md-4 nopadding_left">  
                                            <div class="form-group"><label class="field_name">Номинал. вместимость</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[nomVm]" value="{$article.nomVm}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-4 nopadding"> 
                                            <div class="form-group"><label class="field_name">Полная вместимость</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[polVm]" value="{$article.polVm}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-4 nopadding_right"> 
                                            <div class="form-group"><label class="field_name">Масса (рекомендуемая)</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[massa]" value="{$article.massa}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-3 nopadding_left"> 
                                            <div class="form-group"><label class="field_name">Высота изделия</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[visota]" value="{$article.visota}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-3 nopadding"> 
                                            <div class="form-group"><label class="field_name">Maкс. диаметр</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[diametr]" value="{$article.diametr}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-3 nopadding_right"> 
                                            <div class="form-group"><label class="field_name">Венчик</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[venchik]" value="{$article.venchik}" />
                                            </div>
                                        </div> *}
                                        {* <div class="col-md-3 nopadding_right"> 
                                            <div class="form-group"><label class="field_name">Погрузка в ж/д вагон</label>
                                                <input class="form-control" autocomplete="off" type="text" name="article[pogruzka]" value="{$article.pogruzka}" />
                                            </div>
                                        </div> *}
                                    </div>
        
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">{products:misc:publishDate}
                                            <div class="date">                                                                                 
                                                {html_select_date time=$article.publishedOn|default:$adjustedNow day_value_format="%02d" field_array="article" prefix="" start_year="-5" end_year="+1" class="form-control select"} - 
                                                {if $config.use_24_hours}
                                                  {html_select_time display_seconds=false time=$article.publishedOn|default:$adjustedNow field_array="article" prefix=""}
                                                {else}
                                                  {html_select_time display_seconds=false display_meridian=true use_24_hours=false time=$article.publishedOn|default:$adjustedNow field_array="article" prefix=""}
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">{products:misc:publishEnd} 
                                            <div class="date"> 
                                                {html_select_date time=$article.publicationEnd|default:$adjustedNow day_value_format="%02d" start_year="-1" end_year="+3" field_array="article" prefix="d" class="form-control select"} - 
                                                {if $config.use_24_hours}
                                                {html_select_time display_seconds=false time=$article.publicationEnd|default:$adjustedNow field_array="article" prefix="d"}
                                                {else}
                                                {html_select_time display_seconds=false display_meridian=true use_24_hours=false time=$article.publicationEnd|default:$adjustedNow field_array="article" prefix="d"}
                                                {/if}
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">{products:productTags}
                                        <div class=""><input type="text" class="tagsinput" name="article[tags]" value="{$article.tags}"/></div>
                                    </div>
                                </div> 
                       
                                <div class="col-md-4">
        			                <div class="col-md-12 nopadding">
                                        <div class="form-group">
                                            <label class="field_name">{products:general:primaryImage}</label>                                                                                           
                                            {if $article.images}
                                            <div class="file-previewzo-obzor" id="imageOptions">
                                                <div class="close delete fileinput-remove text-right" onclick="return deleteProductImage({$article.articleId});" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                                                <div class="file-preview-thumbnails">
                                                    <div class="file-preview-frame" id="imageOptions">
                                                        <img src="{$SITE_URL}/uploads/articles/{$article.articleId}/{$article.images.original.fileName}" class="file-preview-image" alt="{$article.images.original.fileName}">
                                                    </div>
                                                    <span id="deletingStatus"></span>
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

                    <div class="tab-pane" id="summary"><textarea name="article[summary]" class="description">{$article.summary}</textarea></div>
                    <div class="tab-pane" id="content"><textarea name="article[content]" class="description">{$article.content}</textarea></div>
                    <div class="tab-pane" id="dopContent"><textarea name="article[dopContent]" class="description">{$article.dopContent}</textarea></div>

                    
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
                                <div class="col-md-12 col-xs-12 nopadding"><label class=" push-up-10  push-down-10 control-label">{sections:addToGallery}</label><span class="dz-success"> </span></div>
                                <div class="col-md-12 col-xs-12 nopadding"><div id="dZUpload" class="dropzone dropzone-mini"><div class="dz-default dz-message"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="misc">
                        <div class="panel panel-default">
                            <div class="panel-body"> 
                                {if $adminUser.accessLevel ne "writer"}
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{products:misc:featured}</div>  
                                    <div class="col-md-6 nopadding_right">
                                        <div class="check_box"><label><input type="radio" name="article[isFeatured]" value="1" id="yes" {if $article.isFeatured} checked{/if} /><i>{general:yes}</i></label></div>
                                        <div class="check_box"><label><input type="radio" name="article[isFeatured]" value="0" id="no" {if !$article.isFeatured} checked{/if} /><i>{general:no}</i></label></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{products:misc:comments}</div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="check_box">
                                            <label><input type="radio" name="article[commentsEnabled]" value="0" {if $article.commentsEnabled == 0}checked{/if}><i>{general:defaultComments}</i></label>
                                        </div>
                                        <div class="check_box">
                                            <label><input type="radio" name="article[commentsEnabled]" value="-1" {if $article.commentsEnabled == -1}checked{/if}><i>{general:disableComments}</i></label>
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
      	<div class="col-md-12 main main_buttons text-center">
      		<input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" onclick="document.getElementById('article').target='_self'; document.getElementById('article').action='{$GLOBAL_URL}/admin{if $SITE_LANG != ''}/{$SITE_LANG}{/if}/products.php?page={$page}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}'" />	&nbsp;
      		<a class="btn btn-primary" href="products.php?page={$page}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}">{general:cancel}</a>
      	</div>
    </form>

    <script type="text/javascript"><!--
    	document.getElementById('article').title.focus();
    //-->
    </script>
{elseif !$errors.access_denied}


    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">                        
            <div class="col-md-6 col-xs-6 nopadding_left"><h2>{products:title}</h2></div> 
            <div class="col-md-6 col-xs-6 nopadding_right">        
                <a class="btn btn-danger pull-right" href="products.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{articles:addArticle}"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div id="searchRow">
	    <div class="col-md-12">
	        <form id="searchForm">
	    	    <div class=" panel panel-colorful">
                    <div class="panel-body">
                        <div class="col-md-4 col-xs-12">
                            <label class="field_name">{products:general:searchByName}</label>
                            <i data-toggle="tooltip" data-placement="top" title="" data-original-title="{products:general:searchByName}" class="fa fa-question-circle"></i>  
                            <input id="quick-search" class="form-control" type="text" name="query" value="{$query}" autocomplete="off" placeholder="{products:general:searchByName}"/>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label class="field_name">{products:general:filterByDestination}</label>
                            {html_options options=$sections selected=$section name=section class="form-control select" onchange="this.form.submit()"}
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <label class="field_name">{general:status}</label>
                            <i data-toggle="tooltip" data-placement="top" title="" data-original-title="{general:status}" class="fa fa-question-circle"></i>
                            {html_options options=$statuses selected=$status name=status class="form-control select" onchange="this.form.submit()"}
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-12 col-xs-12 text-right"><input class=" btn btn-primary" type="submit" value="{general:filter}"/></div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="col-md-12">
	    <form action="products.php{if $page}?page={$page}{/if}" method="post"> 
            <div class="panel panel-default">
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-actions table-hover" id="articles">
                            <thead>
                                <tr>
                                    {if $conf.product_orderBy eq 1}
                                    <th style="padding: 0px 0px"><button class="btn btn-primary" type="submit" name="action[reorder]" value="{general:sort}" data-toggle="tooltip" data-placement="top" data-original-title="Порядок публикации на сайте"/> {general:sort}</button></th>
                                    {else}
                                    <th class="text-center" width="50">ID</th>
                                    {/if}
                                    <th class="text-center" width="50">{general:date}</th>
                                    <th class="text-center" width="50">{products:image}</th>
                                    <th>{general:product}</th>
                                    <th>{general:section}</th>
                                    <th class="text-center" width="50">{products:favorites}</th>
                                    <th class="text-center">{general:status}</th>
                                    <th class="text-center" width="140">{general:action}</th>
                                </tr>
                            </thead>
                            {if $articles}
                            <tbody> 
                                {foreach item=article from=$articles name=articles}
                                <tr id="article-{$article.articleId}">
                                    <td class="text-center" nowrap="nowrap">
                                        {if $conf.product_orderBy eq 1}
                                            <input type="text" name="article[orderBys][{$article.articleId}]" value="{$article.orderBy}" size="3" class="form-control text-center"/>
                                        {else}
                                            {$article.articleId}
                                        {/if}
                                    </td>
                                    <td class="text-center" nowrap="nowrap">{$article.publishedOn nofilter}</td>
                                    <td class="text-center">		                        
                                        {if $article.hasImage eq '1'}
                                            <img src="{$article.images.medium.url}" class="article_img" style="width: 50px"/>
                                        {else}
                                            <img src="img/no_images.jpg" class="article_img"/>
                                        {/if}
                                    </td>
                                    <td width="100%">
                                        <span href="{if $article.status eq 'visible'}{$article.url}{else}{$SITE_URL}/preview.php?articleId={$article.articleId}{/if}" target="_blank">{$article.title|truncate:75}</span>
                                    </td>
                                    <td nowrap="nowrap"><span data-toggle="tooltip" data-placement="top" data-original-title="{$article.section.name}">{$article.section.name|truncate:25}</span></td>
                                    <td class="text-center" nowrap="nowrap">
                                        {if $article.isFeatured}<span style="color:yellow;" class="fa fa-star"></span>{elseif !$article.isFeatured}<span class="fa fa-star"></span>{/if}
                                    </td>
                                    <td id="status-{$article.articleId}">
                                        {$article.statusName nofilter}
                                        {if $adminUser.accessLevel != 'writer' && $article.status eq 'pending'}<br />
                                            <p class="act-deistvie action small" onclick="return approveProduct({$article.articleId});">({articles:approve})</p>
                                        {/if}
                                    </td>
                                    <td class="btn-link-action text-center">
                                        <a class="btn btn-rounded" href="products.php?action[edit]=true&article[articleId]={$article.articleId}&page={$page}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}"><span class="fa fa-pen"></span></a>
                                        <a class="btn btn-danger btn-rounded" onclick="deleteProduct({$article.articleId}, '{$article.title nofilter}');"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                                {/foreach}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="small" colspan="4">{general:results}</td>
                        
                                    <td align="right" colspan="4">
                                    {* <p>{$page}</p> *}
                                        {if $pageNums.pages}             
                                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
            
                                          {foreach from=$pageNums.pages item=number}
                                           
                                          {if $number eq $page}
                                          <li class="active"><a href="products.php?page={$number}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
                                          {elseif $number eq '...'}
                                          ...
                                          {else}
                                          <li><a href="products.php?page={$number}{if $query}&query={$query}{/if}{if $section}&section={$section}{/if}{if $status}&status={$status}{/if}">{$number}</a></li>
                                          {/if}
                                          {/foreach}
                                        </ul>  
                                        {/if}
                                    </td>
                                </tr>
                            </tfoot>
                            {else}
                            <tbody><tr class="odd"><td class="data none" colspan="8" align="center">- {general:none} -</td></tr></tbody>
                            {/if}
                        </table>
                    </div>                                
                </div>
            </div> 
        </form>	
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
            url: "products.php", 
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
        $.post('products.php', {id: id, desc: desc, link: link, action: 'editimage'}, function(data){
            if (data.update == 1){            
                $('.gallery-item.item-'+id+' .im_desc').text(desc);
                $('.gallery-item.item-'+id+' .im_link').text(link);
            }

        }, 'json');
    });
{/literal}           
</script>


{include file="footer.tpl"}