{include file="header.tpl" activeItem="users" title="{users:title} - {header:administration}"}

  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{users:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  
  {if $errors.login_exists}<span id="loginExistsError" onclick = "{literal}noty({text: '{/literal}{users:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.user_not_found}<span id="userNotFoundError" onclick = "{literal}noty({text: '{/literal}{users:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.loginName}<span id="loginNameError" onclick = "{literal}noty({text: '{/literal}{users:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.fullName}<span id="fullNameError" onclick = "{literal}noty({text: '{/literal}{users:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.password}<span id="passwordError" onclick = "{literal}noty({text: '{/literal}{users:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{users:errors:5}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.no_more_admins}<span id="noMoreAdminsError" onclick = "{literal}noty({text: '{/literal}{users:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.image_not_saved}<span id="imageNotSavedError" onclick = "{literal}noty({text: '{/literal}{users:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.developer_status}<span id="developerStatusError" onclick = "{literal}noty({text: '{/literal}{users:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $errors.no_more_developers}<span id="noMoreDevelopersError" onclick = "{literal}noty({text: '{/literal}{users:errors:10}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.login_exists} $('#loginExistsError').click();{/if}
      {if $errors.user_not_found} $('#userNotFoundError').click(); {/if}
      {if $errors.loginName} $('#loginNameError').click();{/if}
      {if $errors.fullName} $('#fullNameError').click();{/if}
      {if $errors.password} $('#passwordError').click();{/if}
      {if $errors.not_saved} $('#notSavedError').click();{/if}
      {if $errors.no_more_admins} $('#noMoreAdminsError').click();{/if}
      {if $errors.image_not_saved} $('#imageNotSavedError').click();{/if}
      {if $errors.developer_status} $('#developerStatusError').click();{/if}
      {if $errors.no_more_developers} $('#noMoreDevelopersError').click();{/if}
      
      {if $messages.saved} $('#savedMessage').click();{/if}
      {literal}
    });
    function deleteImageMessage(){noty({text: '{/literal}{users:messages:2}{literal}',layout: 'topRight',type: 'success'})}
    function deleteUserMessage(){noty({text: '{/literal}{users:messages:1}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>
  
  
<div class="page-content-wrap">
{if $action.edit}

	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">
    <div class="col-md-3 col-xs-3 nopadding"><div class="page-title">{if !$user.userId}<h2>{users:addUser}</h2>{else}<h2>{users:userProfile}</h2>{/if}</div></div> 	
			<div class="col-md-6 col-xs-6 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div> 
      </div>
		</div>
	</div>	
	<form action="users.php" method="post" enctype="multipart/form-data" id="user">
		<input type="hidden" name="user[userId]" value="{$user.userId}" />
		<input type="hidden" name="action[save]" value="1" />
		
		<div class="page-content-wrap">
      <div class="row">                        
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="panel panel-default">
            {if !$user.userId}
            <div class="panel-body"><h3>{users:addUser}</h3></div>
            {else}
            <div class="panel-body"><h3>{users:userData}</h3></div>
            {/if}
            <div class="panel-body">
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:fullname}</div>
                <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="fullName" type="text" name="user[fullName]" value="{$user.fullName}" /></div>
              </div>
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:loginname}</div>
                <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="loginName" type="text" name="user[loginName]" value="{$user.loginName}" /></div>
              </div>
              {if !$user.userId}
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:password}</div>
                <div class="col-md-9 nopadding_right"><input class="form-control" id="password" type="password" name="user[password]"/></div>
              </div>
              {else}
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:newPassword}</div>
                <div class="col-md-9 nopadding_right"><input class="form-control" id="newPassword" type="password" name="user[newPassword]"/></div>
              </div>
              {/if}
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{general:email}</div>
                <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="email" type="text" name="user[email]" value="{$user.email}"/></div>
              </div>
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:accessLevel}</div>
                <div class="col-md-9 nopadding_right">    
                  {html_options options=$accessLevels selected=$user.accessLevel id="accessLevel" name='user[accessLevel]' class="form-control select" onchange="accessLevelChange()"}                                                          
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:accessControl}</div>
                <div class="col-md-9 nopadding_right"> 
                  <div class="check_box" style="margin-bottom: 5px">
                    <label class="check" id="labelAllow" class="passive">
                      <input class="icheckbox" type="radio" name="user[permitAllSections]" value="1" id="allow" {if !$user || $user.permitAllSections}checked{/if} />
                      <i> {users:accessControlOptions:allowAll}</i>
                    </label>
                  </div>
                  <div class="check_box">
                    <label class="check" id="labelDisallow" class="passive">
                      <input class="iradio" type="radio" name="user[permitAllSections]" value="0" id="disallow" {if $user && !$user.permitAllSections}checked{/if} />
                      <i> {users:accessControlOptions:allowSelected}</i>
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-3 nopadding_left">{users:sectionRights}</div>
                  {if $SECTIONS}
                  <div class="col-md-9 nopadding_right"> 
                    <select multiple class="form-control select" name="user[sectionRights][]">
                      <option value=""></option>
                      {foreach from=$SECTIONS item=section name=sections} 
                      <option value="{$section.sectionId}"{if $user.sectionRights && $section.sectionId|in_array:$user.sectionRights}selected=""{/if} >{if $section.level > 1}:: {else} {/if} {$section.name}</option>
                      {/foreach} 
                    </select> 
                  </div>
                  {/if}
                </div>

              
              <div class="btn-group pull-right" style="padding-top: 10px;padding-bottom: 15px;">
                <div class="col-md-12 col-xs-5">
                  <input class="btn btn-primary" type="submit" value="&nbsp; {general:save} &nbsp;" /> &nbsp; 
                  <a class="btn btn-primary" href="users.php">{general:cancel}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="panel panel-default">                                
            <div class="panel-body">
              <h3>{users:userProfileFoto}</h3>
              <div class="form-group">
                <div class="col-md-12 col-xs-12 nopadding">
                  {if $user.hasImage eq '1'} 
                  {customers:general:avatar}  
                  <div class="file-previewzo-obzor" id="imageOptions">
  								  <div class="close fileinput-remove text-right" onclick="return deleteAdminUserImage({$user.userId})" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                    <div class="file-preview-thumbnails">
                      <div class="file-preview-frame" id="imageOptions"><img src="{$user.images.medium.url}" class="file-preview-image" alt="{$section.name}"></div>
                      <div id="ajaxStatus"></div>
                      <span id="deletingStatus"></span>
                      <span id="errorBlock"></span>
  								  </div>
  							  </div>
  							  {/if}
                  <div class=""><input type="file" name="image" id="file-simple" data-preview-file-type="any"></div>
                </div> 
              </div>
                
              <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"></div>
{*
              <div class="text-center" id="user_image">
                {if $user.hasImage eq '1'} 
                  <img src="{$GLOBAL_URL}/admin/avatar/{$user.userId}/user-medium.jpg" class="img-thumbnail" />
                {else}
                  <img src="avatar/no-image.jpg" class="img-thumbnail" />
                {/if}
              </div> 
*}
            </div>
            <div class="panel-body form-group-separated">
{*
              <div class="form-group">
                {if $user.hasImage eq '1'}
                <div class="col-md-6"><a class="btn btn-danger" onclick="return deleteAdminUserImage({$user.userId})">Удалить</a>	</div>
                <div class="col-md-6 text-right" style="border-left: 0px dashed #D5D5D5;">
                  <span class="file-input file-input-new">
                    <input id="image" class="btn btn-danger btn-file fileinput" type="file" name="image" multiple="" data-filename-placement="inside" title="{general:change}"/>
                  </span>
                </div>
                <span id="deletingStatus"></span>
								{else}
                <div class="col-md-12 text-center">
                  <span class="file-input file-input-new">
                    <input id="image" class="btn btn-danger btn-file fileinput" type="file" name="image" multiple="" data-filename-placement="inside" title="{users:uploadAvatar}"/>
                  </span>
                </div>	
								{/if}
              </div>
*}
              
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">Публикаций</label>
                  <div class="col-md-6 col-xs-7">{$totalArticle}</div>
              </div>
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">{general:email}</label>
                  <div class="col-md-6 col-xs-7">{$user.email}</div>
              </div>
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">{users:registration}</label>
                  <div class="col-md-6 col-xs-7">{$user.addedOn|date_format:"%d.%m.%Y %H:%M"}</div>
              </div>
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">{general:fullName}</label>
                  <div class="col-md-6 col-xs-7">{$user.fullName}</div>
              </div>
              {if $user.status eq 0}
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">{users:activity}</label>
                  <div class="col-md-6 col-xs-7">{$user.eventOn|date_format:"%d.%m.%Y %H:%M"}</div>
              </div>
              {/if}
              <div class="form-group">
                  <label class="col-md-6 col-xs-5 control-label">Статус</label>
                  <div class="col-md-6 col-xs-7">{if $user.status eq 1} <span style="color: #009688">{users:online}</span>{else}<span style="color: #f10000">{users:offline}</span>{/if}</div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div> 
  </form>

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
    maxFileSize: 400
});
{/literal}
</script>

{else}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 col-xs-3 nopadding"><h2>{users:title}</h2></div>
      <div class="col-md-6 col-xs-6 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div> 
      </div>
      <div class="col-md-3 col-xs-3 nopadding">                                                  
        <div class="pull-right"> 
          <a  class="btn btn-danger" href="users.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{users:addUser}"><i class="fa fa-plus"></i></a>
        </div>
      </div>
    </div>
	</div>

<div class="col-md-12">
  	<div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover" id="users">
            <thead>
              <tr>
                <th>{general:table:id}</th>
                <th>{users:title}</th>
                <th>{users:email}</th>
                <th>{general:table:type}</th>
                <th>{users:activity}</th>
                <th>{general:status}</th>
                <th class="text-center" width="100">{general:table:action}</th>
              </tr>
            </thead>
            {if $adminUsers}
            <tbody>
              {foreach item=user from=$adminUsers name=adminUsers}                                    
              <tr id="user-{$user.userId}">
                <td class="text-center">{$user.userId}</td>
                <td style="padding: 4px 20px">
                  {if $user.hasImage eq 1}
                    <img src="{$user.images.medium.url}" alt="{$user.fullName nofilter}" width="34" class="img-circle user-img-photo"> &nbsp;
                  {/if}
                  <a href="users.php?action[edit]=true&user[userId]={$user.userId}">{$user.fullName nofilter}</a>
                </td>
                <td nowrap="nowrap">{if $user.email != ''}{$user.email}{else}Email не указан{/if}</td>
                <td nowrap="nowrap">{$user.accessLevel nofilter}</td> 
                <td nowrap="nowrap">{$user.eventOn|date_format:"%d.%m.%Y %H:%M"}</td> 
                <td nowrap="nowrap">{if $user.status eq 1} <span style="color: #009688">{users:online}</span>{else}<span style="color: #f10000">{users:offline}</span>{/if}</td> 
                <td class="btn-link-action text-center">
                  <a class="btn btn-rounded" href="users.php?action[edit]=true&user[userId]={$user.userId}"><span class="fa fa-pen"></span></a>
                  <a onclick="deleteUser({$user.userId}, '{$user.fullName nofilter}')" class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
              {/foreach}
              </tbody>
              <tfoot>
              <tr>
                <td class="small" colspan="4">{general:results}</td>
                <td align="right" colspan="3">
                  <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                    {if $pageNums.pages}
        		        {foreach from=$pageNums.pages item=number}
        						{if $number eq $page}
        						    <li class="active"><a href="users.php?page={$number}" class="pageNum">{$number}</a></li>
        						{elseif $number eq '...'}
        						    ...
        						{else}
        						    <li><a href="users.php?page={$number}" class="pageNum">{$number}</a></li>
        						{/if}
        		        {/foreach}
        		        {/if}
      		        </ul>  
                </td>
              </tr> 
              </tfoot>
              {else}  
              <tr class="odd"><td class="data none" colspan="7" align="center">- {general:none} -</td></tr>
              {/if}   
            </tbody>
          </table>
        </div>                                
      </div>
    </div>                                                  
  </div>
{/if}

</div>
{include file="footer.tpl"}