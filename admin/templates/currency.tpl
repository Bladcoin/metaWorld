{include file="header.tpl" activeItem="currency" title="{currency:title}"}
<div class="page-content-wrap">
  
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{currency:messages:saved}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.deleted}<span id="deletedMessage" onclick = "{literal}noty({text: '{/literal}{currency:messages:deleted}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  
  {if $errors.titleNull}<span id="titleNullError" onclick = "{literal}noty({text: '{/literal}{currency:errors:titleNull}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.codeNameNull}<span id="codeNameNullError" onclick = "{literal}noty({text: '{/literal}{currency:errors:codeNameNull}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $errors.course}<span id="courseError" onclick = "{literal}noty({text: '{/literal}{currency:errors:courseNull}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	
 
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.titleNull} $('#titleNullError').click();{/if}
      {if $errors.codeNameNull} $('#codeNameNullError').click(); {/if}
      {if $errors.course} $('#courseError').click(); {/if}
      
      {if $messages.saved} $('#savedMessage').click();{/if}
      {if $messages.deleted} $('#deletedMessage').click();{/if}
      {literal}
    });
  {/literal}           
  </script>
  
{if $action.edit}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>{currency:title}</h2></div>
      <div class="col-md-9 content-frame-body-left">
      </div>
    </div>
  </div>
	
	<div class="col-md-12">
    <form action="currency.php" method="post">
      <input type="hidden" name="action[save]" value="true" />
		 	<input type="hidden" name="currency[id]" value="{$currency.id}" />
		 	<div class="panel panel-default tabs ">                   
			 	<ul class="nav nav-tabs nav-justified">
			 		<li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">{currency:tabs:general}</a></li>
			 </ul> 
				<div class="panel-body tab-content nopadding">
					<div class="tab-pane active" id="tab1">
						<div class="panel panel-default" style="margin-bottom: 0px;">
							<div class="panel-body" id="generalPane">                                                                        
                <div class="form-group">
                  <div class="col-md-3 nopadding_left">{currency:form:title}</div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="currency[title]" value="{$currency.title}"/></div>
                </div>
								<div class="form-group">                                        
                  <div class="col-md-3 nopadding_left">{currency:form:codeName}</div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="currency[codeName]" value="{$currency.codeName}"/></div>
                </div>
								<div class="form-group">                                        
                  <div class="col-md-3 nopadding_left">{currency:form:course}</div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="currency[course]" value="{$currency.course}"/></div>
                </div>
							</div>
						</div> 
					</div> 
				</div>	
		 	</div>
		 	
			<div align="center" class="col-md-12 main main_buttons">
        <input class="btn btn-primary" type="submit" value="&nbsp; {general:save} &nbsp;" />
        <input class="btn btn-primary" type="button" value="{general:cancel}" onclick="javascript:document.location='currency.php'" />
      </div>    
		</form>
	</div>
	
	{else}

	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>{currency:title}</h2></div>
      <div class="col-md-6 content-frame-body-left">
        <div id="ajaxStatus"> </div>  
      </div>
      <div class="col-md-3 nopadding">                                                 
        <div class="pull-right"> 
          <a class="btn btn-danger" href="currency.php?action[edit]=true"data-original-title="{currency:add}"> <i class="fa fa-plus"></i></a>
					{if $currencyList|@count > 0}
					<a class="btn btn-danger" href="javascript: void(0);" onclick="showChangeDefaultCurrencyForm();">{currency:setDefaultCurrency}</a>
          {/if}
        </div>
      </div>
    </div>
	</div>
	
	<div id="changeDefaultCurrencyRow" style="display:none">
		<div class="col-md-2"></div>
		<div class="col-md-8">
      <div class=" panel panel-colorful" >
        <div class="panel-heading"></div>
        <div class="panel-body">
          {if $currencyList|@count > 0}
          <form method="post" onsubmit="return confirmSetDefaultCuttency();">
            <input type="hidden" name="action[setDefaulrCurrency]" value="true" />
            <div class="col-md-6">
              <select class="form-control select" name="currency[id]" id="currencyDefaultPretindents" style="width:200px">
								{foreach from=$currencyList item=currency}{if $currency.isDefault == 0}
                <option value="{$currency.id}" label="{$currency.title}">{$currency.title}</option>
                {/if}{/foreach}
							</select>
					  </div>
            <div class="col-md-6"><input class="btn btn-danger" type="submit" value="{currency:buttons:changeDefaultCurrency}"/> </div>
					</form>
					{/if}
			  </div>
			</div>
		</div>
		<div class="col-md-2"></div> 
	</div>

  <div class="col-md-12">
    <form action="" method="post" >
      <div class="panel panel-default">
        <div class="panel-body panel-body-table">
          <div class="table-responsive">
            <table class="table table-striped table-actions table-hover" id="banners">
              <thead>
                <tr>
                  <th class="data small" nowrap="nowrap">{currency:form:title}</th>
                  <th class="data small" nowrap="nowrap">{currency:form:codeName}</th>
                  <th class="data small" nowrap="nowrap">{currency:form:course}</th>
                  <th class="data small" nowrap="nowrap">{general:action}</th>
                </tr>
              </thead>
              <tbody>   
                {if $currencyList}{foreach from=$currencyList item="currency"}
                <tr id="currency-{$currency.id}" class="{cycle values='odd,even' advance=false}" onmouseover="this.oldClassName=this.className; this.className='{if $language.isHidden}{cycle values='odd,even' advance=false}{else}{cycle values='odd,even'}{/if}Hov'" onmouseout="this.className=this.oldClassName; this.oldClassName=''" ondblclick="window.location.href = window.location.href + '?action[edit]=true&currency[id]={$currency.id}'">
                  <td class="data{if $currency.isDefault} strong{/if}" width="100%">{$currency.title} {if $currency.isDefault} (<b>{currency:default}</b>){/if}</td>
                  <td class="data" width="100%">{$currency.codeName}</td>
                  <td class="data" width="100%">{$currency.course}</td>
                  <td  class="btn-link-action">
                    <a class="btn btn-rounded" href="currency.php?action[edit]=true&currency[id]={$currency.id}"><span class="fa fa-pen"></span></a>
                    <a class="btn btn-danger btn-rounded" href="javascript: void(0);" onclick="deleteCurrency({$currency.id}, '{$currency.title}');" id="{$user.userId}" ><span class="fa fa-trash"></span></a>
                  </td>	
                </tr>
                {/foreach}
                {else}
                <tr class="odd"><td class="data none" colspan="5" align="center">- {general:none} -</td></tr>
                {/if}   
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </form> 	
	</div>
	<script type="text/javascript">
	
		var lang = Array();
		lang['confirmDelete'] = '{currency:messages:confirmDelete}';
		lang['confirmSetDefaultCurrency'] = '{currency:messages:confirmSetDefaultCurrency}'; 
		
	{literal}
		
		function deleteCurrency(currencyId, currencyTitle){
		   if (confirm(lang['confirmDelete'] + ' "' + currencyTitle + '"')){
		       window.location.href = window.location.href + '?action[delete]=true&currency[id]=' + currencyId; 
		   }
		}
		
		function showChangeDefaultCurrencyForm(){
	        document.getElementById('changeDefaultCurrencyRow').style.display = 'inline';        
	    }
	    
	    function confirmSetDefaultCuttency(){
	        var currencyTitle = document.getElementById('currencyDefaultPretindents').options[document.getElementById('currencyDefaultPretindents').selectedIndex].label;
	        return confirm(lang['confirmSetDefaultCurrency'] + ' "' + currencyTitle + '"?');
	    }
		
	{/literal}
	
	</script>
{/if}

</div>


{include file="footer.tpl"}