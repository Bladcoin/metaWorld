{include file="header.tpl" activeItem="orders" title="{orders:title}"}
<div class="page-content-wrap">
  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{orders:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
	<script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $messages.saved} $('#savedMessage').click();{/if}

      {literal}
    });
    function deleteOrderMessage(){noty({text: '{/literal}{orders:messages:1}{literal}',layout: 'topRight',type: 'success'})}
  {/literal}           
  </script>
  
{if $action.edit}	
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">
      <div class="col-md-4"><h2>{orders:invoce} #{$order.orderId}</h2></div> 
      <div class="col-md-4 content-frame-body-left">
        <div id="ajaxStatus"> </div> 
      </div>                              
    </div>
  </div>
	<div class="row">
    <div class="col-md-12">
      <form action="orders.php" method="post" id="brand">
			<input type="hidden" name="order[orderId]" value="{$order.orderId}"/>
			<input type="hidden" name="action[save]" value="1"/>
      <div class="panel panel-default">
        <div class="panel-body">                            
{*             <div class="push-down-10 pull-right"><button class="btn btn-default"><span class="fa fa-print"></span> Print</button></div> *}
            <div class="invoice">
              <div class="row">
                <div class="col-md-4">
                  <div class="invoice-address">
                    <h5>Продавец</h5>
                    <h6>{$config.company_name}</h6>
                    <p>Адрес: {$config.address}</p>
                    <p>Телефон: {$config.phone}</p>
                    <p>Email: {$config.email}</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="invoice-address">
                    <h5>Заказчик</h5>
                    <h6>{$order.userName}</h6>
                    <p>Email: <a href="mailto:{$order.userEmail}">{$order.userEmail}</a></p>
                    <p>Телефон: {$order.userPhone}</p>
                  </div>                                        
                </div>
                <div class="col-md-4">
                  <div class="invoice-address">
                    <h5>Заказ</h5>
                    <table class="table table-striped">
                      <tr><td width="200">Номер заказа:</td><td class="text-right">#{$order.orderId}</td></tr>
                      <tr><td>Дата заказа:</td><td class="text-right">{$order.createdBy|smarty:nodefaults}</td></tr>
                      <tr><td><strong>Итого:</strong></td><td class="text-right"><strong>{if $order.totalAmount ne 0}{$order.totalAmount|number_format:2:".":","} сум.{/if}</strong></td></tr>
                    </table>
                  </div>                                        
                </div>
              </div>
                    
              <div class="table-invoice">
                <table class="table">
                  <tr>
                    <th>Наименование товара</th>
                    <th class="text-center">Цена за товар</th>
                    <th class="text-center">Кол-во</th>
                    <th class="text-center">Итого за товар</th>
                  </tr>
                  {foreach from=$orderProducts item=orderProduct}
                  <tr>
                    <td>{$orderProduct.productName} {if $orderProduct.serviceName}<br />{$orderProduct.serviceName|smarty:nodefaults}{/if} </td>
                    <td class="text-center">{$orderProduct.productPrice|number_format:2:".":","} сум.</td>
                    <td class="text-center">{$orderProduct.productCount}</td>
                    <td class="text-center">{$orderProduct.productCountPrice|number_format:2:".":","} сум.</td>
{*
                    <td class="text-center">{foreach from=$quantitys item=quantity key=key} {if $orderProduct.articleId eq $key}{$quantity}{/if}{/foreach}</td>
                    <td class="text-center">{foreach from=$quantitys item=quantity key=key} {if $orderProduct.articleId eq $key}{$orderProduct.price*$quantity|number_format:2:".":","}{/if}{/foreach} сум.</td>
*}
                  </tr>
                  {/foreach}
                </table>
              </div>
                    
              <div class="row">
                <div class="col-md-6">
                  <h4>Комментарий к заказу</h4>
                  <p>{$order.message|smarty:nodefaults}</p>
                </div>
                <div class="col-md-6">
                  <h4>Сумма к оплате</h4>
                  <table class="table table-striped">
{*                     <tr><td width="200"><strong>Sub Total:</strong></td><td class="text-right">$2,533.00</td></tr> *}
                         
                    {*  <tr><td><strong>Discount (2%):</strong></td><td class="text-right">$50.66</td></tr> *}
                    <tr class="total"><td>Общая сумма:</td><td class="text-right">{if $order.totalAmount ne 0}{$order.totalAmount|number_format:2:".":","} сум.{/if}</td></tr>
                      </table>  
                      <div class="form-group">{orders:status}{html_options options=$statuses|smarty:nodefaults name=order[status] id=brand selected=$order.status class="form-control select"}</div>                                              
                  </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="pull-right push-down-20">
                    <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Изменить статус заказа &nbsp;" />
                    <a class="btn btn-primary" href="orders.php">Вернуться к списку</a></div>
                </div>
              </div>
          </div>
                <!-- END INVOICE -->

            </div>
        </div>
      </form>
    </div>
</div>


	{else}

	<div class="content-frame" style="margin-bottom:10px;">
  	<div class="content-frame-top">
    	<div class="col-md-6"><h2>{brands:title}</h2></div> 
      <div class="col-md-6"><div class="pull-right"> <a class="btn btn-danger" href="brands.php?action[edit]=true" data-original-title="{brands:add}"><i class="fa fa-plus"></i></a></div></div>                           
	  </div>
	</div>
	
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body panel-body-table">
				<div class="table-responsive">
					<table class="table table-striped table-actions table-hover" id="orders">
            <thead>
              <tr>
                <th class="data small">{orders:general}</th>
                <th class="data small" width="100%">Покупатель </th>
                <th class="data small" width="100%">Сумма </th>
                <th class="data small" width="100%">Дата </th>
                <th class="text-center" width="100">{general:status}</th>
								<th class="data small">{general:action}</th>
              </tr>
            </thead>
            {if $orders}
            <tbody>
              {foreach item=order from=$orders name=orders}
							<tr id="order-{$order.orderId}">
								<td class="" align="center">{$order.orderId}</td>
								<td class="" width="100%">{$order.userName|smarty:nodefaults}</td>
								<td class="" nowrap="nowrap">{if $order.totalAmount ne 0}{$order.totalAmount|number_format:2:".":","} сум.{/if}</td>
								<td class=""  nowrap="nowrap">{$order.createdBy}</td>
								<td style="min-width: 120px;" class="data" align="center">{$order.status|smarty:nodefaults}</td>
								<td class="data" align="center">
									<table>
										<tr>
											<td><a class="btn btn-rounded" href="orders.php?action[edit]=true&order[orderId]={$order.orderId}"><span class="fa fa-pen"></span></a></td>
											<td><button class="btn btn-danger btn-rounded" onclick="deleteOrder({$order.orderId}, '{$order.orderId}');"><span class="fa fa-trash"></span></button></td>
										</tr>
									</table>
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
                        <li class="active"><a href="orders.php?page={$number}">{$number}</a></li>
                        {elseif $number eq '...'}
                          ...
                        {else}
                        <li><a href="orders.php?page={$number}">{$number}</a></li>
                        {/if}
                      {/foreach}
                      </ul>  
                    {/if}
                    </td>
                  </tr>
                </table>
              </tfoot>
            {else}
            <tbody><tr class="odd"><td class="data none" colspan="7" align="center">- {general:none} -</td></tr></tbody>
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