{include file="header.tpl" activeItem="customers" title="{customers:title}"}
<div class="page-content-wrap">	
    
    {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{customers:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  
    {if $errors.email1}<span id="email1Error" onclick = "{literal}noty({text: '{/literal}{customers:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.email2}<span id="email2FoundError" onclick = "{literal}noty({text: '{/literal}{customers:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.password}<span id="passwordError" onclick = "{literal}noty({text: '{/literal}{customers:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.phone}<span id="phoneError" onclick = "{literal}noty({text: '{/literal}{customers:errors:3}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.name}<span id="firstNameError" onclick = "{literal}noty({text: '{/literal}{customers:errors:4}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.address}<span id="addressError" onclick = "{literal}noty({text: '{/literal}{customers:errors:6}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.city}<span id="cityError" onclick = "{literal}noty({text: '{/literal}{customers:errors:7}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.postcode}<span id="postcodeError" onclick = "{literal}noty({text: '{/literal}{customers:errors:8}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.country}<span id="countryError" onclick = "{literal}noty({text: '{/literal}{customers:errors:9}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.site_user_not_found}<span id="siteUserNotFoundError" onclick = "{literal}noty({text: '{/literal}{customers:errors:10}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{customers:errors:11}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
    {if $errors.login}<span id="loginError" onclick = "{literal}noty({text: '{/literal}{customers:errors:12}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.login_correct}<span id="loginCorrectError" onclick = "{literal}noty({text: '{/literal}{customers:errors:13}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
    {if $errors.phone_correct}<span id="phoneCorrectError" onclick = "{literal}noty({text: '{/literal}{customers:errors:14}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
    {if $errors.image_not_saved}<span id="imageNotSavedError" onclick = "{literal}noty({text: '{/literal}{customers:errors:15}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
 

  <script>
  	{literal}
    $(document).ready(function () {
        {/literal}
        {if $errors.login} $('#loginError').click();{/if}
        {if $errors.login_correct} $('#loginCorrectError').click();{/if}
        {if $errors.name} $('#firstNameError').click();{/if}
        {if $errors.phone} $('#phoneError').click();{/if}
        {if $errors.phone_correct} $('#phoneCorrectError').click();{/if}
        {if $errors.email1} $('#email1Error').click();{/if}
        {if $errors.email2} $('#email2FoundError').click(); {/if}
        {if $errors.password} $('#passwordError').click();{/if}
        {if $errors.address} $('#addressError').click();{/if}
        {if $errors.city} $('#cityError').click();{/if}
        {if $errors.postcode} $('#postcodeError').click();{/if}
        {if $errors.country} $('#countryError').click();{/if}
        {if $errors.site_user_not_found} $('#siteUserNotFoundError').click();{/if}
        {if $errors.not_saved} $('#notSavedError').click();{/if}
        {if $errors.image_not_saved} $('#imageNotSavedError').click();{/if}
        
        {if $messages.saved} $('#savedMessage').click();{/if}
        {literal}
    });
    
    function deleteUserImageMessage(){noty({text: '{/literal}{customers:messages:2}{literal}',layout: 'topRight',type: 'success'})}
    function deleteSiteUserMessage(){noty({text: '{/literal}{customers:messages:1}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>
  

{if $action.edit}

	<div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top"> 
            <div class="col-md-3 nopadding"><h2>{customers:title}</h2></div> 
            <div class="col-md-6 content-frame-body-left">
                <div id="ajaxStatus"> </div> 
            </div>
        </div>
	</div>
	
	<div class="col-md-12">
	    <div class="page-content-wrap">
            <form action="customers.php" method="post" id="customer" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="customer[userId]" value="{$customer.userId}" />
                <input type="hidden" name="action[save]" value="1" />            
                <div class="row">                        
                    <div class="col-md-4 col-sm-4 col-xs-5">
                        <div class="panel panel-default">                                
                            <div class="panel-body"><h3>{$customer.name}</h3></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12 col-xs-12 nopadding">
                                        {if $customer.hasImage eq '1'} 
                                        {customers:general:avatar}  
                                        <div class="file-previewzo-obzor" id="imageOptions">
                                            <div class="close fileinput-remove text-right" onclick="return deleteCustomerImage({$customer.userId})" data-toggle="tooltip" data-placement="left" data-original-title="Удалить картинку">×</div>
                                            <div class="file-preview-thumbnails">
                                                <div class="file-preview-frame" id="imageOptions">
                                                    <img src="{$customer.images.medium.url}" class="file-preview-image" alt="{$section.name}">
                                                </div>
                                                <div id="ajaxStatus"></div>
                                                <span id="deletingStatus"></span>
                                                <span id="errorBlock"></span>
                                            </div>
                                        </div>
                                        {/if}
                                        <div class=""><input type="file" name="image" id="file-simple" data-preview-file-type="any"></div>
                                    </div>
    						    </div>
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left">{customers:general:registrationDate}</div>
                                    <div class="col-md-6 nopadding_right">{$customer.registredOn|date_format:"%d.%m.%Y"}</div>
                                </div>
                                {if $customer.birth > '0000-00-00'}
                                <div class="form-group">
                                    <div class="col-md-6 nopadding_left"><label class="field_name">{customers:general:birth}</label></div>
                                    <div class="col-md-6 nopadding_right">{$customer.birth}</div>
                                </div>
                                {/if}
                               
                                {if $adminUser.accessLevel eq "developer"}
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:uderID}</div>
                                    <div class="col-md-9 nopadding_right">{$customer.userId}</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:uderIP}</div>
                                    <div class="col-md-9 nopadding_right">{$customer.ip}</div>
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-sm-8 col-xs-7">
                    
                        <div class="panel panel-default">
                            <div class="panel-body"><h3>{customers:editProfile}</h3></div>
                            
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:gender}</div>
                                    <div class="col-md-9 nopadding_right">
                                        <div class="check_box_2">
                                            <label>
                                                <input class="iradio" type="radio" name="customer[gender]" value="1" id="male" {if $customer.gender eq 1}checked="checked"{/if}> 
                                                <i>{customers:general:male}</i>
                                            </label>
                                        </div>
                                        <div class="check_box_2">
                                            <label>
                                                <input class="iradio" type="radio" name="customer[gender]" value="2" id="female" {if $customer.gender eq 2}checked="checked"{/if}> 
                                                <i>{customers:general:female}</i>
                                            </label>
    									</div>
    								</div>
    						    </div>
						    
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:login}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" type="text" name="customer[login]" value="{$customer.login}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:fio}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" type="text" name="customer[name]" value="{$customer.name}" /></div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:phone}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control phone" autocomplete="off" type="text" name="customer[phone]" value="{$customer.phone}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:email}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" type="text" name="customer[email]" value="{$customer.email}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:password}</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" type="text" name="customer[password]" value="{$customer.password}" /></div>
                                </div>  
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:status}</div>
                                    <div class="col-md-9 nopadding_right">
                                        {html_options options=$statuses name='customer[status]' selected=$customer.status class="form-control select"}
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">{customers:general:newsletter}</div>
                                    <div class="col-md-9 nopadding_right">
                                        {html_options options=$subscribes name='customer[subscribe]' selected=$customer.subscribe class="form-control select"}
                                    </div>
                                </div> 
                                <div class="form-group text-center">
                                    <div class="col-md-12 nopadding">
                                        <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" onclick="document.getElementById('customer').target='_self'; document.getElementById('customer').action='{$GLOBAL_URL}/admin{if $SITE_LANG != ''}/{$SITE_LANG}{/if}/customers.php?page={$page}'" />
                                        <a class="btn btn-primary" href="customers.php?page={$page}">{general:cancel}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div align="center" class="col-md-12 main main_buttons"></div>
		    </form>
        </div>
	</div>

{elseif !$errors.access_denied}

    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">                        
            <div class="col-md-6 nopadding"><h2>{customers:title}</h2></div>
            <div class="col-md-6 nopadding">                                                  
                <div class="pull-right">
                    <a class="btn btn-danger" href="customers.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{customers:addSiteUser}"><i class="fa fa-plus"></i></a>
                    <span>
                        {if $query || $status}
                            <a class="btn btn-primary" href="customers.php" ><span class="fa fa-mail-reply"></span></a>
                        {else}
                            <span class="action btn btn-danger" onclick="showSearchForm();"><span class="fa fa-search"></span></span>
                        {/if}
                    </span>  
	            </div>   
            </div>                           
        </div>
    </div>

    <div id="searchRow" style="display:none">
        <div class="col-md-12">
            <form id="searchForm">
                <div class=" panel panel-colorful">
                    <div class="panel-body">
                        <div class="col-md-5 col-xs-12 nopadding_left"><input class="form-control" type="text" name="query" value="{$query}" autocomplete="off" /></div>
                        <div class="col-md-5 col-xs-12">{html_options options=$statuses selected=$status name=status  class="form-control select"}</div>
                        <div class="col-md-2 col-xs-12 nopadding_right text-right"><input class="btn btn-primary" type="submit" value="{general:search}" /></div>
			        </div>
		        </div>
	        </form>
        </div>
    </div>
  
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover" id="customers">
            <thead>
              <tr>
                <th class="text-center" width="50">{customers:table:id}</th>
                <th class="text-center" width="50">{customers:table:date}</th>
                <th class="">{customers:table:login}</th>
                <th class="text-center" width="100">{general:status}</th>
                <th class="text-center" width="50">{general:action}</th>
              </tr>
            </thead>
              
              {if $customers}
              <tbody> 
              {foreach item=customer from=$customers name=customers}
					<tr id="customer-{$customer.userId}">
						<td class="text-center" nowrap="nowrap">{$customer.userId}</td>
						<td class="text-center" nowrap="nowrap">{$customer.registredOn nofilter}</td>
						<td class="">{$customer.login}</td>
						<td id="status-{$customer.userId}" class="text-center">{$customer.statusName  nofilter}{if $adminUser.accessLevel != 'writer' && ($customer.status eq 'waiting' or  $customer.status eq 'blocked')}<p class="act-deistvie action" onclick="return approveCustomer({$customer.userId});">({customers:approve})</p>{/if}
						</td>
						<td  class="btn-link-action">
							<a class="btn btn-rounded" href="customers.php?action[edit]=true&customer[userId]={$customer.userId}&page={$page}"><span class="fa fa-pen"></span></a>
							<a class="btn btn-danger btn-rounded" onclick="deleteCustomer({$customer.userId}, '{$customer.name nofilter}')"><span class="fa fa-trash"></span></a>
						</td>
					</tr>
					{/foreach}
					<tbody>
      				<tfoot>
    						<tr>
    							<td colspan="7" align="right">
    								{if $pageNums}
    								<table cellpadding="0" cellspacing="0" width="100%"><tr>
    									<td class="small">{general:results}</td>
    									<td align="right">
    										
    										{foreach from=$pageNums.pages item=number}
    											{if $number eq $page}
    												<a href="customers.php?page={$number}{if $query}&query={$query}{/if}{if $status}&status={$status}{/if}" class="pageNum">{$number}</a>
    											{elseif $number eq '...'}
    												...
    											{else}
    												<a href="customers.php?page={$number}{if $query}&query={$query}{/if}{if $status}&status={$status}{/if}" class="pageNum">{$number}</a>
    											{/if}
    										{/foreach}
    										
    									</td>
    								</tr></table>
    								{/if}
    							</td>
    						</tr>
      				</tfoot>
  						{else}
  						 <tbody><tr><td class="none" colspan="7" align="center">- {general:none} -</td></tr> </tbody>
  						{/if} 
  				  </tbody>
  				</table>
  		  </div>
  		</div>
    </div> 
	<script>{if $query || $status}showSearchForm(true);{/if}</script>                                                 
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
    maxFileSize: 1000
});
{/literal}
</script>
{include file="footer.tpl"}