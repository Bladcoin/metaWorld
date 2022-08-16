{include file="header.tpl" activeItem="subscribe" title="Рассылка письма"}
<div class="page-content-wrap">
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>Рассылка письма</h2></div>
      <div class="col-md-6 content-frame-body-left">
        {if $sent_success} 
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
          {$sent_success_message}
        </div> 
        {/if}
      </div>
    </div>
  </div>
	
  <div class="col-md-12">
    <form action="subscribe.php" method="post" enctype="multipart/form-data">
      <div class="panel panel-default tabs ">                   
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Написать письмо</a></li>
        </ul> 
				<div class="panel-body tab-content nopadding">
					<div class="tab-pane active" id="tab1">
						<div class="panel panel-default">
							<div class="panel-heading"><h5 class="panel-title">Письма рассылаются только зарегистрированным пользователям</h5></div>
							<div class="panel-body" id="generalPane">                                                                        
                <div class="form-group">                                        
                  <label class="field_name"> Тема</label>
                  <input class="form-control" type="text" name="subject"/>
                </div>		                        
								<div class="form-group"><textarea name="message" class="description"></textarea> </div>
							</div>
						</div> 
					</div> 
				</div>	
		 	</div>
		 	<div  class="col-md-12 main main_buttons text-center">
        <input class="btn btn-primary" type="submit" value="&nbsp; Разослать &nbsp;" />
      </div> 
		</form>
	</div>
</div>	
	


{include file="footer.tpl"}