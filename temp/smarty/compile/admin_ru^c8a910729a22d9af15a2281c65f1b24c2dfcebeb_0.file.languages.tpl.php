<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:45:12
  from 'C:\xampp\htdocs\admin\templates\languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb4b08cb9d69_80827431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a910729a22d9af15a2281c65f1b24c2dfcebeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\languages.tpl',
      1 => 1603794532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fb4b08cb9d69_80827431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"languages",'title'=>"Языки"), 0, false);
?>
<div class="page-content-wrap">
  
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick = "noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageName'], ENT_QUOTES, 'UTF-8', true);?>
» язык сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?>
  <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?><span id="deletedMessage" onclick = "noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageName'], ENT_QUOTES, 'UTF-8', true);?>
» язык удален.', layout: 'topRight', type: 'success'});"></span><?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick = "noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageName'], ENT_QUOTES, 'UTF-8', true);?>
» язык не сохранен.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['language_not_found']) {?><span id="languageNotFoundError" onclick = "noty({text: 'Язык не найден.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['languageName']) {?><span id="languageNameError" onclick = "noty({text: 'Введите название языка.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['codename']) {?><span id="codenameError" onclick = "noty({text: 'Введите кодовое обозначение языка.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['codenameExists']) {?><span id="codenameExistsError" onclick = "noty({text: 'Язык с таким кодовым обозначением уже существует.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?><span id="htaccessError" onclick = "noty({text: 'Невозможно сохранить файл ".htaccess".', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?><span id="serializationsError" onclick = "noty({text: 'Невозможно сохранить сериализационный файл.', layout: 'topRight', type: 'error'});"></span><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['codenameCharacters']) {?><span id="codenameCharactersError" onclick = "noty({text: 'Кодовое обозначение языка может содержать только строчные латинские буквы от a до z.', layout: 'topRight', type: 'error'});"></span><?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['errors']->value['languageNameCharacters']) {?><span id="languageNameCharactersError" onclick = "noty({text: 'Название языка может содержать только латинские буквы от A до z.', layout: 'topRight', type: 'error'});"></span><?php }?>
 
  <?php echo '<script'; ?>
>
  	
    $(document).ready(function () {
      
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?> $('#notSavedError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['language_not_found']) {?> $('#languageNotFoundError').click(); <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['languageName']) {?> $('#languageNameError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['codename']) {?> $('#codenameError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['codenameExists']) {?> $('#codenameExistsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['htaccess']) {?> $('#htaccessError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['serializations']) {?> $('#serializationsError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['codenameCharacters']) {?> $('#codenameCharactersError').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['errors']->value['languageNameCharacters']) {?> $('#languageNameCharactersError').click();<?php }?>
   
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?> $('#savedMessage').click();<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?> $('#deletedMessage').click();<?php }?>
      
    });
             
  <?php echo '</script'; ?>
>
  
<?php if ($_smarty_tpl->tpl_vars['action']->value['edit'] || $_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?>
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>Языки</h2></div>                                                   
			<div class="col-md-6 content-frame-body-left"> 
				<div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>
		  </div>
		</div>
	</div>

	<form action="languages.php" method="post" id="language">
    <input type="hidden" name="language[languageId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
" />
		<input type="hidden" name="action[save]" value="1" />
		<?php if ($_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?><input type="hidden" name="language[isDefault]" value="1" /><?php }?>
		<div class="col-md-12">   
			<div class="panel panel-default tabs ">                   
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?>Мультиязычный режим<?php } else { ?>Основное<?php }?></a></li>
        </ul> 
				<div class="panel-body tab-content nopadding">
          <div class="tab-pane active" id="general">
            <div class="panel panel-default">
            <?php if ($_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?>
              <div class="panel-heading"><h5 class="panel-title"> Для переключения в мультиязычный режим введите информацию о языке, который сейчас используется на вашем сайте.</h5></div>
            <?php } else { ?>
              <div class="panel-heading"><h5 class="panel-title"> Все поля, отмеченные звездочкой (<span class="fError">*</span>), должны быть заполнены.</h5></div>
            <?php }?>
            <div class="panel-body">  
              <?php if (!$_smarty_tpl->tpl_vars['language']->value['languageId']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Предустановленные языки</label></div>
                <div class="col-md-6 nopadding_right"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['languageOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['language']->value['codename'],'name'=>'languageOptions','onChange'=>"languageOptionChange(this)",'class'=>"form-control select"),$_smarty_tpl);?>
</div>
              </div>
              <?php }?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['languageName']) {?>fError<?php }?>">Язык</label><p>латинскими буквами, например: Russian, English, German, French</p></div>
                <div class="col-md-6 nopadding_right"><input class="form-control" autocomplete="off" id="languageName" type="text" name="language[languageName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageName'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
              </div>
              <?php if (!$_smarty_tpl->tpl_vars['language']->value['languageId']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['codename'] || $_smarty_tpl->tpl_vars['errors']->value['codenameExists'] || $_smarty_tpl->tpl_vars['errors']->value['codenameCharacters']) {?> fError<?php }?>">Код языка</label><p>2 латинские буквы, например: ru, en, de, fr</p></div>
                <div class="col-md-6 nopadding_right"><input class="form-control" autocomplete="off" id="codename" type="text" name="language[codename]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['codename'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
              </div>
              <?php }?>
              <?php if (!$_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?>
              <?php if (!$_smarty_tpl->tpl_vars['language']->value['languageId']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Используемый язык</label><p>Выберите язык, который будет использоваться при работе с системой</p></div>
                <div class="col-md-6 nopadding_right">    
                  <?php echo '<script'; ?>
 type="text/javascript">
                    lang2charset = {	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languageCharsets']->value, 'charset', false, 'lang', 'languageCharsets', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['charset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['charset']->value) {
$_smarty_tpl->tpl_vars['charset']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['total'];
?>"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8', true);?>
":"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['charset']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_languageCharsets']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> };
                  <?php echo '</script'; ?>
>
                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['adminLangs']->value,'name'=>'language[admin_language]','id'=>'adminLanguageOptions','class'=>"form-control select"),$_smarty_tpl);?>

                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Кодировка сайта</label><p>Кодировка сайта по-умолчанию (Unicode - UTF-8), желательно не менять</p></div>
                <div class="col-md-6 nopadding_right"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['charsetOptions']->value,'name'=>'language[charset]','id'=>'charsetOptions','class'=>"form-control select"),$_smarty_tpl);?>
</div>
              </div>
              <?php }?>
              <?php }?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Статус</label></div>
                <div class="col-md-6 nopadding_right"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuses']->value,'name'=>'language[status]','id'=>'status','selected'=>$_smarty_tpl->tpl_vars['language']->value['status'],'class'=>"form-control select"),$_smarty_tpl);?>
</div>
              </div>
		          <?php if ($_smarty_tpl->tpl_vars['language']->value['modifiedOn']) {?>
		          <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Изменено</label></div>
                <div class="col-md-6 nopadding_right">                                        
                  <div class="input-group">
                    <?php echo $_smarty_tpl->tpl_vars['language']->value['modifiedOn'];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['language']->value['modifiedBy']['loginName'])===null||$tmp==='' ? "Неизвестный пользователь" : $tmp);?>
)
                  </div>
                </div>
              </div>
              <?php }?>  
              <?php if ($_smarty_tpl->tpl_vars['language']->value['addedOn']) {?>
              <div class="form-group">
                <div class="col-md-6 nopadding_left"><label class="field_name">Создано</label></div>
                <div class="col-md-6 nopadding_right">                                           
                  <div class="input-group">
                    <?php echo $_smarty_tpl->tpl_vars['language']->value['addedOn'];?>
 (<?php echo (($tmp = @$_smarty_tpl->tpl_vars['language']->value['addedBy']['loginName'])===null||$tmp==='' ? "Неизвестный пользователь" : $tmp);?>
)
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>                          
		</div>
		<div class="clear"></div>
		<div align="center" class="col-md-12 main main_buttons">
			<input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" />
			<?php if (!$_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?> &nbsp;<input class="btn btn-primary" type="button" value="Отменить" onclick="javascript:document.location='languages.php'" /><?php }?>
		</div>
	</form>

	<?php echo '<script'; ?>
 type="text/javascript">
		document.getElementById('language').languageName.focus();
		<?php if ($_smarty_tpl->tpl_vars['action']->value['toMultilangMode']) {?>
		var website_language = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['website_language'], ENT_QUOTES, 'UTF-8', true);?>
';
		
		var languageOptions = document.getElementById('languageOptions').options;
		for(i = 0; i < languageOptions.length; i++){
			if(languageOptions[i].value == website_language){
				languageOptions[i].selected = true;
				languageOptionChange(languageOptions);
				break;
			}
		}
		
		<?php }?>
	<?php echo '</script'; ?>
>
	<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['confirmDelete']) {?>
	<div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><h2>Языки</h2></div></div>
	<div>
    <div class="col-md-2"></div>
		<div class="col-md-8">
      <div class="panel panel-colorful">
        <div class="panel-heading"></div>
        <div class="panel-body form_select_4" >
          <form action="languages.php" method="post" id="language">
            <input type="hidden" name="language[languageId]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="action[delete]" value="1" /> Удалить языковую версию сайта
            <div style="margin-top: 10px;">
              <?php if (!$_smarty_tpl->tpl_vars['language']->value['isDefault']) {?> При удалении языковой версии сайта так же будут удалены все картинки, файлы и таблицы с данными для этого языка. <?php }?>
              <div style="margin-top: 10px;">
                <input type="checkbox" onclick="document.getElementById('submitBtn').disabled = !this.checked;" id="confirmDelete" style="float:left;margin-right:5px;">
                <label for="confirmDelete" style="padding-top:1px;">Подтвердите ваше намерение удалить языковую версию сайта: <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageName'], ENT_QUOTES, 'UTF-8', true);?>
</b>
              </div>
            </div>
            <div align="center" class="main" style="margin-top:20px;">
              <input class="btn btn-primary" type="button" name="action[delete]" value="&nbsp; Удалить &nbsp;" id="submitBtn" disabled="disabled" onclick="this.form.submit()" />
              <input class="btn btn-primary" type="button" value="Отменить" onclick="javascript:document.location='languages.php'" />
            </div>
          </form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>       
	<?php } else { ?>
	<div class="content-frame" style="margin-bottom:10px;">
    
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding_left"><h2>Языки</h2></div> 
      <div class="col-md-6 content-frame-body-left" > 
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>          
      </div>
      <div class="col-md-3 nopadding_right">                                                 
        <div class="pull-right"> 
          <a class="btn btn-danger" href="languages.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="Добавить язык"><i class="fa fa-plus"></i></a>
          <?php if (count($_smarty_tpl->tpl_vars['LANGUAGES']->value) > 1) {?> &nbsp;&nbsp; 
            <span class="btn btn-danger" class="action" onclick="showChangeLangForm()">Изменить основной язык</span>
          <?php }?>       
        </div>
      </div>
    </div>
  </div>

  <div id="changeLangRow" style="display:none">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	    <form id="searchForm">
	    	<div class=" panel panel-colorful" >
          <div class="panel-heading"></div>
            <div class="panel-body">
              <form id="changeLangForm">
                <input class="form-control" type="hidden" name="action[changeDefaultLanguage]" value="true">
                <div class="col-md-9"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['defaultLanguageOptions']->value,'id'=>'defaultLang','name'=>"language[languageId]",'class'=>"form-control select"),$_smarty_tpl);?>
</div>
                <div class="col-md-3"><input style="float:right;" class=" btn btn-danger" type="button" value="Сделать основным" onclick="confirmLanguageChange(this)" /></div>
							</form>
            </div>
          </div>
        </form>
      </div>
    <div class="col-md-2"></div> 
  </div>

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body panel-body-table">
        <div class="table-responsive">
          <table class="table table-striped table-actions table-hover" id="languages">
            <thead>
              <tr>
                <th class="">Язык</th>
                <th class="text-center">Код языка</th>
                <th class="text-center">Статус</th>
                <th class="text-center">Действие</th>
              </tr>
            </thead>
            <tbody>   
              <?php if ($_smarty_tpl->tpl_vars['languages']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, NULL, 'languages', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
              <tr id="language-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
">
                <td style="padding-left:10px;" width="100%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['language']->value['languageTransName'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['navLang']->value['languageName'] : $tmp);
if ($_smarty_tpl->tpl_vars['language']->value['isDefault']) {?> (<b>По умолчанию</b>)<?php }?></td>
                <td class="data" align="center" nowrap="nowrap"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['codename'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                <td class="data" width="100%"><?php echo $_smarty_tpl->tpl_vars['language']->value['statusName'];?>
</td>
                <td class="data" align="center">
                  <table>
                    <tr>
                      <td><a class="btn btn-default btn-rounded" href="languages.php?action[edit]=true&language[languageId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="fa fa-pen"></span></a></td>
                      <td><a class="btn btn-green btn-rounded" alt="Переместить вверх" class="action" onclick="moveUpLanguage(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['language']->value['languageName'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
')"><span class="fa fa-arrow-up"></span></a></td>
                      <td><a class="btn btn-green btn-rounded" alt="Переместить вниз" class="action" onclick="moveDownLanguage(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['language']->value['languageName'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
')" hspace="2" /><span class="fa fa-arrow-down"></span></a></td>
                      <td>
                      <?php if (!$_smarty_tpl->tpl_vars['language']->value['isDefault'] || count($_smarty_tpl->tpl_vars['LANGUAGES']->value) < 2) {?>
                        <a href="languages.php?action[confirmDelete]=true&language[languageId]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['languageId'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></a>
                      <?php } else { ?>
                        <button class="btn btn-default btn-rounded"><span class="fa fa-trash"></span></button>
                      <?php }?>
                      </td>
                    </tr>
                  </table>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>   
              </tbody>
            </table>
          </div>
        </div>
      </div> 	
    </div>
	<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
