{include file="header.tpl" activeItem="settings-maps" title="{settings:title} - {header:administration}"}
<div class="page-content-wrap">
    {if $messages.saved}<span id="savedMessage" onclick="{literal}noty({text: '{/literal}{settings:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
    <script>{literal}$(document).ready(function() {{/literal} {if $messages.saved}$('#savedMessage').click(); {/if} {literal}}); {/literal}</script>

    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>{settings:map:settingMap}</h2></div>
            <div class="col-md-4 content-frame-body-left">
                <div id="ajaxStatus" class="alert alert-warning info-box-img" role="alert"></div>
                <div class="upload-image alert message" role="alert"></div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="col-md-12">
        <form action="settings-maps.php" method="post" id="settings_maps" autocomplete="off">
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#contactInfo" data-toggle="tab" aria-expanded="true">{settings:map:settingMap}</a></li>
                </ul>

                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="contactInfo">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="field_name">{if $maps.maps_down eq '1'}{settings:map:mapOff}{else}{settings:map:mapOn}{/if}</label>
                                        <div class="checkbox-material">
                                            <input type="checkbox" id="maps_down" name="maps[maps_down]" value="{$maps.maps_down}" {if $maps.maps_down}checked{/if}/>
                                            <label for="maps_down" id="visible_maps" style="top: 7px;" {if $maps.maps_down eq '1'}data-val="0" {else}data-val="1" {/if}>
                                                <span class="chk-span"></span>
                                                <i>{if $maps.maps_down eq 1}{settings:map:mapOff}{else}{settings:map:mapOn}{/if}</i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">{settings:map:mapApi} <i data-toggle="tooltip" data-placement="top" data-original-title="{settings:map:mapApiInfo}" class="fa fa-question-circle"></i></label>
                                        <input class="form-control" type="text" name="maps[api_key]" value="{$maps.api_key}">
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:lat} <i data-toggle="tooltip" data-placement="top" data-original-title="Latitude" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[lat]" value="{$maps.lat}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:lng} <i data-toggle="tooltip" data-placement="top" data-original-title="Longitude" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[lng]" value="{$maps.lng}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">{settings:map:zoomMap} <i data-toggle="tooltip" data-placement="top" data-original-title="{settings:map:zoomMapInfo}" class="fa fa-question-circle"></i></label>
                                        <input class="mask_zoom form-control" type="text" name="maps[zoom]" value="{$maps.zoom}">
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:wightMap} <i data-toggle="tooltip" data-placement="top" data-original-title="{settings:map:wightMapInfo}" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[maps_wight]" value="{$maps.maps_wight}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:heightMap} <i data-toggle="tooltip" data-placement="top" data-original-title="{settings:map:heightMapInfo}" class="fa fa-question-circle"></i></label>
                                            <input class="mask_maps_height form-control" type="text" name="maps[maps_height]" value="{$maps.maps_height}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:fillColor}</label>
                                            <input class="form-control" type="text" name="maps[fillColor]" value="{$maps.fillColor}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">{settings:map:fillOpacity} </label>
                                            <input class="form-control" type="text" name="maps[fillOpacity]" value="{$maps.fillOpacity}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">{settings:map:scale} </label>
                                        <input class="form-control" type="text" name="maps[scale]" value="{$maps.scale}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        {if $maps.maps_down eq '1'}
                                        <div class="block_maps">
                                            <div id="map-canvas"></div>
                                        </div>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center" class="col-md-12 main main_buttons"><input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" /></div>
        </form>
    </div>
</div>



{maps} {include file="footer.tpl"}
