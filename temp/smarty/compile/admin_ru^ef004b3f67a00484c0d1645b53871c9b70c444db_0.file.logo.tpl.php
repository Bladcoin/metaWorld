<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 14:19:17
  from 'C:\xampp\htdocs\admin\templates\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa39c53c7350_49297791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef004b3f67a00484c0d1645b53871c9b70c444db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\logo.tpl',
      1 => 1596453698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fa39c53c7350_49297791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"logo",'title'=>"Логотип сайта"), 0, false);
echo '<script'; ?>
>

$(document).ready(function () {
  function readImage ( input ) {
    if (input.files && input.files[0]) {	
      var reader = new FileReader();
			reader.onload = function (e) {$('#preview').attr('src', e.target.result);}
	  	reader.readAsDataURL(input.files[0]);
    }
  }
 
  $('#image').change(function(){ readImage(this); });
 
  $('#upload-image').on('submit',(function(e) {
    e.preventDefault();
		var formData = new FormData(this);
		var form = $(this);

    $.ajax({
      type:$(form).attr('method'), 
	  	url: $(form).attr('action'), 
	  	cache:false, 
	  	contentType: false,
	  	processData: false,
	  	data: formData, 
	  	dataType: 'json',
	  	success: function(data) {
		  	if(data['success']) {
          $('#result').removeClass('alert alert-danger').addClass('alert alert-success').text(data['message']).fadeIn(500);
          setTimeout(function() { $('#result').fadeOut(500);}, 3000);
          setTimeout(function() {location.reload()},3500);
        }else{
          $('#result').removeClass('alert alert-success').addClass('alert alert-danger').text(data['message']).fadeIn(500);
          setTimeout(function() { $('#result').fadeOut(500); }, 5000);
        }
      },
	  });
  }));
});

<?php echo '</script'; ?>
>
<div class="page-content-wrap">
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-4 "><h2>Логотип сайта</h2></div>
      <div class="col-md-4 content-frame-body-left"><div id="result" class="result"> </div></div>
      <div class="col-md-4"></div>                      
    </div>
	</div>
	
	<div class="col-md-12">			
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover" id="logos">
            <thead>
              <tr>
                <th class="text-center">Логотип</th>
                <th class="text-center">Имя файла</th>
                <th class="text-center">Путь</th>
                <th class="text-center">Формат файла</th>
                <th class="text-center">Выберите файл</th>
              </tr>
            </thead>
            <tbody>   
              <?php if ($_smarty_tpl->tpl_vars['allLogos']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allLogos']->value, 'logo');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
              <tr class="logo_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoId'], ENT_QUOTES, 'UTF-8', true);?>
">
                <td><img id="preview" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoUrl'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" style="max-width: 200px;max-height: 100px;"></td>
                <td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoName'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td nowrap="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoUrl'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoType'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td class="text-center" width="100%">
                  <form id="upload-image" action="logo.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
						  				<div class="form-group">
						  					<input class="fileinput btn-danger" type="file" name="image" id="image" title="Выберите логотип">
						  					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						  					<?php if (($_smarty_tpl->tpl_vars['SITE_LANG']->value == $_smarty_tpl->tpl_vars['language']->value['codename']) || (!$_smarty_tpl->tpl_vars['SITE_LANG']->value && $_smarty_tpl->tpl_vars['language']->value['isDefault'])) {?>
						  					<input type="hidden" name="logo[lang]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['codename'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <input type="hidden" name="logo[logoName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoName'], ENT_QUOTES, 'UTF-8', true);?>
">
						  					<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						  				</div>
						  		  </div>
                    <div class="col-md-6">
                      <input type="hidden" name="logo[logoId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoId'], ENT_QUOTES, 'UTF-8', true);?>
">
                      <input type="submit" class="btn btn-primary" value="Заменить">
                    </div>
                  </form>
                </td>
              </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
              <tr class="odd">
                <td class="data none" colspan="6" align="center">
                  <form id="upload-image" action="logo.php" method="post" enctype="multipart/form-data">
		                <div class="col-md-6">
  		                <div class="form-group">
                        <input class="fileinput btn-danger" type="file" name="image" id="image" title="Выберите логотип">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <?php if (($_smarty_tpl->tpl_vars['SITE_LANG']->value == $_smarty_tpl->tpl_vars['language']->value['codename']) || (!$_smarty_tpl->tpl_vars['SITE_LANG']->value && $_smarty_tpl->tpl_vars['language']->value['isDefault'])) {?>
                        <input type="hidden" name="logo[lang]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['codename'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <input type="hidden" name="logo[logoId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['logoId'], ENT_QUOTES, 'UTF-8', true);?>
">
											<input type="submit" class="btn btn-primary" value="Загрузить">
										</div>
								  </form>
								</td>
						  </tr>
              <?php }?>   
            </tbody>
          </table>
        </div>                                
      </div>
    </div>							
	</div>	
		
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
