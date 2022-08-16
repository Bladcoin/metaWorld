{include file="header.tpl" activeItem="settings-social" title="{settings:social}"}
<div class="page-content-wrap">

    {if $messages.saved}<span id="savedMessage" onclick="{literal}noty({text: '{/literal}{socials:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if} 
    {if $errors.name}<span id="nameError" onclick="{literal}noty({text: '{/literal}{socials:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
    {if $errors.not_saved}<span id="notSavedError" onclick="{literal}noty({text: '{/literal}{socials:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}

    <script>
        {literal}
        $(document).ready(function() {
        {/literal} 
            {if $errors.name}$('#nameError').click(); {/if} 
            {if $errors.not_saved}$('#notSavedError').click(); {/if}
            {if $messages.saved}$('#savedMessage').click(); {/if} 
            {if $messages.deleted}$('#deletedMessage').click(); {/if} 
        {literal}
        });

        function deleteSocialMessage() {noty({text: '{/literal}{socials:messages:1}{literal}', layout: 'topRight', type: 'success'})} 
        {/literal}
    </script>

    {if $action.edit}
    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>{settings:social}</h2></div>
            <div class="col-md-4 content-frame-body-left"><div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div></div>
        </div>
    </div>

    <div class="col-md-12">
        <form action="settings-social.php" method="post" id="social">
            <input type="hidden" name="social[social_id]" value="{$social.social_id}" />
            <input type="hidden" name="action[save]" value="1" />
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#status" data-toggle="tab" aria-expanded="true">{socials:general}</a></li>
                </ul>
                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="status">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title"> {general:asterisk}</h5>
                            </div>
                            <div class="panel-body" id="generalPane">
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:name}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="name" type="text" name="social[name]" value="{$social.name}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:fileName}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="fileName" type="text" name="social[fileName]" value="{$social.fileName}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:icon}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="icon" type="text" name="social[icon]" value="{$social.icon}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:url}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="url" type="text" name="social[url]" value="{$social.url}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:visibleIconText}</div>
                                    <div class="col-md-9 nopadding_right">
                                        <div class="checkbox-material">
                                            <input type="checkbox" id="visible_text" name="social[visible_text]" value="1" {if $social.visible_text}checked{/if}/>
                                            <label for="visible_text" style="top: 7px;"><span class="chk-span"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{socials:status}</div>
                                    <div class="col-md-9 nopadding_right">{html_options options=$statuses name='social[status]' id=status selected=$social.status class="form-control select"}</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 main main_buttons text-center">
                <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" />
                <a class="btn btn-primary" href="settings-social.php">{general:cancel}</a>
            </div>
        </form>
    </div>

    {else}

    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>{socials:title}</h2></div>
            <div class="col-md-4 content-frame-body-left"><div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div></div>
            <div class="col-md-4"><div class="pull-right"> <a class="btn btn-danger" href="settings-social.php?action[edit]=true" data-original-title="{socials:add}"><i class="fa fa-plus"></i></a></div></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-striped table-actions table-hover" id="socials">
                        <thead>
                            <tr>
                                <th>{socials:title}</th>
                                <th>{socials:urlTable}</th>
                                <th class="text-center"> {general:status}</th>
                                <th>{general:action}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if $socials}{foreach item=social from=$socials name=socials}
                            <tr id="social-{$social.social_id}">
                                <td class="" width="100%">{$social.name nofilter}</td>
                                <td class="" align="left">{$social.url}</td>
                                <td style="" class="" align="center">{$social.status nofilter}</td>
                                <td class="btn-link-action text-center">
                                    <a class="btn btn-rounded" href="settings-social.php?action[edit]=true&social[social_id]={$social.social_id}"><span class="fa fa-pen"></span></a>
                                    <a class="btn btn-danger btn-rounded" alt="{general:delete}" onclick="deleteSocial({$social.social_id}, '{$social.name nofilter}');"><span class="fa fa-trash"></span></a>
                                </td>
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
