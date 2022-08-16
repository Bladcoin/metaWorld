<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 14:21:25
  from 'C:\xampp\htdocs\admin\templates\banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa3a45a9a7e2_81193831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627bcc64024b233ff9d68c638fc3dd4764c3fa3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\banners.tpl',
      1 => 1603793594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fa3a45a9a7e2_81193831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"banners",'title'=>"Управление рекламными баннерами"), 0, false);
?>
<div class="page-content-wrap">
	<?php if ($_smarty_tpl->tpl_vars['bannerDeleted']->value) {?>
		<p align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['banners']['deleted'], ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['bannerSaved']->value) {?>
		<p align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['banners']['saved'], ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php }?>

  <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: 'Баннер &laquo;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerName'], ENT_QUOTES, 'UTF-8', true);?>
&raquo; сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?><span id="deletedMessage" onclick = "noty({text: 'Баннер удален.', layout: 'topRight', type: 'success'});"></span><?php }?> 
 
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['access_denied']) {?><span id="accessDeniedError" onclick = "noty({text: 'Доступ запрещен', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: 'Баннер &laquo;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerName'], ENT_QUOTES, 'UTF-8', true);?>
&raquo; не сохранен', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error']->value['fileType']) {?><span id="fileTypeError" onclick = "noty({text: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['banners']['errorFileType'], ENT_QUOTES, 'UTF-8', true);?>
', layout: 'topRight', type: 'error'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['error']->value['bannerName']) {?> <span id="bannerNameError" onclick = "noty({text: 'Введите название банера', layout: 'topRight', type: 'error'});"></span><?php }?>
  <?php echo '<script'; ?>
>
  	
    $(document).ready(function () {
      
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['access_denied']) {?> $('#accessDeniedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?> $('#notSavedError').click(); <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['error']->value['fileType']) {?> $('#fileTypeError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['error']->value['bannerName']) {?> $('#bannerNameError').click();<?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?> $('#deletedMessage').click();<?php }?>
      
    });
             
  <?php echo '</script'; ?>
>
  
  
<?php if ($_smarty_tpl->tpl_vars['action']->value['edit']) {?>
  <div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"> 
      <div class="col-md-3 nopadding"><h2>Управление рекламными баннерами</h2></div>
      <div class="col-md-6 content-frame-body-left" >
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>
				
		  </div>
		</div>
	</div>
	<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
      <?php if ($_smarty_tpl->tpl_vars['error']->value['fileType']) {?><p align="center" style="color:red"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['banners']['errorFileType'], ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?>
      
      <div class="panel panel-default tabs">                   
        <ul class="nav nav-tabs nav-justified"><li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">Общие</a></li></ul> 
  			<div class="panel-body tab-content nopadding">
  				<div class="tab-pane active" id="general">
            <div class="panel-body" id="generalPane"> 
              <div class="col-md-8 col-xs-12">                                                                        
                <div class="form-group">
                  
                  <div class="col-md-3 nopadding_left"><label class="field_name">Баннер активен</label></div>
                  <div class="col-md-9 nopadding_right">
                    <div class="check_block_box">
                      <div class="check_box">
                        <label class="switch switch-small">
                          <input type="checkbox" name="banner[isActive]" value="1" <?php if ($_smarty_tpl->tpl_vars['banner']->value['isActive']) {?>checked="checked"<?php }?>><span></span>
                        </label>
                      </div>
                    </div>	
                  </div>
                </div>
  					  	<div class="form-group">
    					  	<div class="col-md-3 nopadding_left"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['error']->value['bannerName']) {?>fError<?php }?>">Баннер</label></div>
    					  	<div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[bannerName]" value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerName'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
"/></div>
    					  </div>
                <div class="form-group">
                  <div class="col-md-3 nopadding_left"><label class="field_name">URL для нажатия</label></div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[bannerUrl]" value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerUrl'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="http://" /></div>
                </div>
                <div class="form-group">
                  <div class="col-md-3 nopadding_left"><label class="field_name">Альтернативный текст</label></div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[alternativeText]" value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['alternativeText'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                </div>
              </div>
              <div class="col-md-4 col-xs-12">
                
                <div class="form-group" style="text-align:center;padding: 20px 0px;"><div class="col-md-12 col-xs-12 banners_images"><?php echo $_smarty_tpl->tpl_vars['banner']->value['generatedCode'];?>
</div></div>
                <div class="form-group"><input type="file" name="file" class="btn btn-danger btn-file fileinput" data-filename-placement="inside" title="Выберите файл"></div>
              </div>
            
            </div>
          </div>
        </div> 
  		</div>                        
  		<!-- END TABS -->		
      <div align="center" class="col-md-12 main main_buttons">
        <input type="hidden"  name="banner[bannerId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden"  name="banner[bannerWidth]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerWidth'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden"  name="banner[bannerHeight]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerHeight'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden"  name="banner[bannerType]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerType'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden"  name="banner[fileUrl]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['fileUrl'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input class="btn btn-primary" type="submit"  name="action[save]" value="&nbsp; Сохранить &nbsp;" />
        <input class="btn btn-primary" type="button" value="Отменить" onclick="javascript:document.location='banners.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
'" />
  		</div>
    </form>
  </div>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['confirmDelete']) {?>

  <div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"><div class="page-title"><h2>Управление рекламными баннерами</h2></div></div>
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="" method="post">
      <div class="panel panel-colorful">
        <div class="panel-heading"></div>
        <div class="panel-body">Вы действительно хотите удалить баннер "<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerName'], ENT_QUOTES, 'UTF-8', true);?>
</b>" ?</div>
        <div class="panel-footer">
          <input class="btn btn-danger" type="submit" name="action[delete]" value=" Да ">
          <input class="btn btn-primary pull-right" type="button" onclick="location.href='banners.php'"  value=" Нет ">
        </div>
      </div>
      <input type="hidden" name="banner[bannerId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
" />
	  </form>
  </div>
  <div class="col-md-4"></div> 
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['generateCode']) {?>

  <table align="center">
	  <tr><td><b>Прямой код:</b><br /><textarea cols="100" rows="5"><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['frame'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
</textarea></td></tr>
    <tr><td><input type="button" onclick="location.href='banners.php'" value="Список баннеров"></td></tr>
  </table>
	
<?php } else { ?>
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>Управление рекламными баннерами</h2></div> 
      <div class="col-md-6 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div> 
      </div>
      <div class="col-md-3 nopadding">                                                 
        <a class="btn btn-danger pull-right" href="banners.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="Добавить баннер"><i class="fa fa-plus"></i></a>
      </div>
    </div>
	</div>
	

  <div class="col-md-12">
    <form action="" method="post" >
      <div class="panel panel-default">
        <div class="panel-body panel-body-table">
          <div class="table-responsive">
            <table class="table table-striped table-actions table-hover" id="banners">
              <thead>
                <tr>
                  <th class="text-center" width="50">Id</th>
                  <th class="">Заголовок баннер</th>
                  <th class="text-center" width="110">Действие</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($_smarty_tpl->tpl_vars['adBanners']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adBanners']->value, 'banner');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
                <tr>
                  <td class="data" align="center"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value, ENT_QUOTES, 'UTF-8', true);?>
 </td>
                  <td class="data" nowrap="nowrap" width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerName'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <td  class="btn-link-action">
                    <a class="btn btn-rounded" href="banners.php?action[edit]=true&banner[bannerId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="fa fa-pen"></span></a>
                    <a class="btn btn-danger btn-rounded" href="banners.php?action[confirmDelete]=true&banner[bannerId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['bannerId'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['userId'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="fa fa-trash"></span></a>
                  </td>	
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                <tr class="odd"><td class="data none" colspan="5" align="center">- Не найдено -</td></tr>
                <?php }?>   
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </form> 	
</div>
<?php }?>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
