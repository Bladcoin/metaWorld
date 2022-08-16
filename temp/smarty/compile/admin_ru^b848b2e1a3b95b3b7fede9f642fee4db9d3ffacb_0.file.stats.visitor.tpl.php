<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-12 17:14:07
  from 'C:\xampp\htdocs\admin\templates\stats.visitor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604b934f965b07_67227970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b848b2e1a3b95b3b7fede9f642fee4db9d3ffacb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.visitor.tpl',
      1 => 1603860974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:stats.type-selector.tpl' => 1,
    'file:stats.date-selector.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_604b934f965b07_67227970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"visitor",'title'=>"Посетитель"), 0, false);
?>
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>Посетитель</h2></div>                           
    </div>
</div>
<div class="form-group main">                                        
    <div class="col-md-12">
        <?php $_smarty_tpl->_subTemplateRender("file:stats.type-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"stats.visitor.php?visitorId=".((string)$_smarty_tpl->tpl_vars['visitorId']->value)), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:stats.date-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<div class="clear"></div>
<div class="col-md-12">
	<div class="col-md-4 nopadding">
	    <div class="panel panel-default">
	        <div class="panel-body panel-body-table">
	            <div class="table-responsive">
	                <table class="table table-bordered table-striped table-actions">
	                    <thead>
	                        <tr>
	                            <th colspan="2" class="data text-center" nowrap="nowrap">Информация о посетителе</th>
	                        </tr>
	                    </thead>
	                    <tbody>                                            
							<?php echo smarty_function_cycle(array('values'=>'odd,even','assign'=>'class'),$_smarty_tpl);?>

							<?php if ($_smarty_tpl->tpl_vars['class']->value != 'even') {
echo smarty_function_cycle(array('values'=>'odd,even','assign'=>'class'),$_smarty_tpl);
}?>
							
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" width="120">ID посетителя:</td>
								<td class="data">
									<form autocomplete="off" method="get" action="stats.visitor.php">
										<div class="col-md-8 nopadding"><input type="text" name="visitorId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitorId']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="5" class="form-control" /></div>
										<div class="col-md-4"><input type="submit" value="Сменить" class="btn btn-warning" /></div>
									</form>
								</td>
							</tr>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" width="120">Источник:</td>
								<td class="data">
									<?php if ($_smarty_tpl->tpl_vars['visitor']->value['refererUrl']) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['refererUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
											<?php if ($_smarty_tpl->tpl_vars['visitor']->value['refererWebsite']) {?>
												<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['refererWebsite'],50), ENT_QUOTES, 'UTF-8', true);?>

											<?php } else { ?>
												<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['refererUrl'],50), ENT_QUOTES, 'UTF-8', true);?>

											<?php }?>
										</a>
									<?php } else { ?>
										<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['referer'],50), ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
								</td>
							</tr>
							
							<?php if ($_smarty_tpl->tpl_vars['visitor']->value['searchPhrase']) {?>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" nowrap="nowrap">Поисковый запрос:</td>
								<td class="data small"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['searchPhrase'],50), ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
							<?php }?>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" nowrap="nowrap">IP посетителя:</td>
								<td class="data small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['visitorIp'], ENT_QUOTES, 'UTF-8', true);?>
 (<a href="http://whois.domaintools.com/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['visitorIp'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">whois</a>)</td>
							</tr>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right">Агенты:</td>
								<td class="data small" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['userAgent'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['userAgent'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							</tr>
	                    </tbody>
	                </table>
	                <table class="table table-bordered table-striped table-actions">
	                    <thead>
	                        <tr>
	                            <th colspan="2" class="data text-center" nowrap="nowrap">Первый визит</th>
	                        </tr>
	                    </thead>
	                    <tbody>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" width="120">Дата:</td>
								<td class="data" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['visitor']->value['firstVisitOn'];?>
</td>
							</tr>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" nowrap="nowrap" width="120">Тип:</td>
								<td class="data">
								<?php if ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 6) {?>
									<span class="code<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
">Ошибка <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeName']) {?>
									<?php echo $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeName'];?>

								<?php }?>
								</td>
							</tr>
							<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
								<td class="data" align="right" width="120">Страница:</td>
								<td class="data">
								<?php if ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 1) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/" target="_blank">Домашняя страница</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 2 && $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['name']) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['name'],50), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 3 && $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['title']) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['title'],50), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 4) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/search.php?query=<?php echo rawurlencode($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['searchQuery']);?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['searchPage'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['searchQuery'],50), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 6) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['requestUri'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['requestUri'],50), ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php if ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['refererUrl']) {?>(<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['refererUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(strtolower("Источник"), ENT_QUOTES, 'UTF-8', true);?>
</a>)<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 7) {?>
									<?php if (!$_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['section']) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/rss.xml" target="_blank">Основной RSS</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['section']) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['section']['path'], ENT_QUOTES, 'UTF-8', true);?>
/rss.xml" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['section']['name'],35), ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php } else { ?>
										неизвестно
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 8) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/sitemap.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['file_extension'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">Основная карта сайта</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 9) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/sitemap.xml" target="_blank">Карта сайта в XML</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 11) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['title'] : $tmp),45), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 12) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['title'] : $tmp),45), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['typeId'] == 13) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visitor']->value['firstVisit']['title'] : $tmp),45), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } else { ?>
									неизвестно
								<?php }?>
								</td>
							</tr>                   	
			
		
	                    </tbody>
	                </table>
	            </div>                                
	        </div>
	    </div>
	</div>
	<div class="col-md-8 nopadding">
	    <div class="panel panel-default">
	        <div class="panel-body panel-body-table">
	            <div class="table-responsive">
	                <table class="table table-bordered table-striped table-actions">
	                    <thead>
	                        <tr>
	                            <th class="text-center" style="min-width:120px;">Дата</th>
								<th class="text-center" style="min-width:100px;">Тип</th>
								<th class="text-center">Просмотр</th>
	                        </tr>
	                    </thead>
	                    <tbody>                                            
	                    <?php if ($_smarty_tpl->tpl_vars['visits']->value) {?>
						<?php echo smarty_function_cycle(array('values'=>'odd,even','assign'=>'class'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['class']->value != 'even') {
echo smarty_function_cycle(array('values'=>'odd,even','assign'=>'class'),$_smarty_tpl);
}?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['visits']->value, 'visit', false, NULL, 'visits', array (
));
$_smarty_tpl->tpl_vars['visit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->do_else = false;
?>
						
	                   	<tr id="visit-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['visitId'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['visit']->value['isHidden']) {?>style="display:none"<?php }?>>
	                  		<td class="data small text-center" align="right" nowrap="nowrap">
		                  		<?php echo $_smarty_tpl->tpl_vars['visit']->value['visitDate'];?>

		                  	</td>
	                  		<td>
		                  		<?php if ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 6) {?>
									<span class="code<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
">Ошибка <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
</span>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['visit']->value['typeName'];?>

								<?php }?>
		                  	</td>
	                  		<td class="data" width="100%">
		                  		<?php if ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 1) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/" target="_blank">Домашняя страница</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 2 && $_smarty_tpl->tpl_vars['visit']->value['name']) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visit']->value['name'],60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 3 && $_smarty_tpl->tpl_vars['visit']->value['title']) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visit']->value['title'],60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 4) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/search.php?query=<?php echo rawurlencode($_smarty_tpl->tpl_vars['visit']->value['searchQuery']);?>
&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['searchPage'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visit']->value['searchQuery'],60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 6) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['requestUri'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visit']->value['requestUri'],60), ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php if ($_smarty_tpl->tpl_vars['visit']->value['refererUrl']) {?>(<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['refererUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars("Источник", ENT_QUOTES, 'UTF-8', true);?>
</a>)<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 7) {?>
									<?php if (!$_smarty_tpl->tpl_vars['visit']->value['section']) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/rss.xml" target="_blank">Основной RSS</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['section']) {?>
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['section']['path'], ENT_QUOTES, 'UTF-8', true);?>
/rss.xml" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visit']->value['section']['name'],60), ENT_QUOTES, 'UTF-8', true);?>
</a>
									<?php } else { ?>
										неизвестно
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 8) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/sitemap.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['file_extension'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">Основная карта сайта</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 9) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/sitemap.xml" target="_blank">Карта сайта в XML</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 10) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visit']->value['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visit']->value['title'] : $tmp),60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 11) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visit']->value['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visit']->value['title'] : $tmp),60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 12) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visit']->value['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visit']->value['title'] : $tmp),60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['visit']->value['typeId'] == 13) {?>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visit']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate((($tmp = @$_smarty_tpl->tpl_vars['visit']->value['alias'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visit']->value['title'] : $tmp),60), ENT_QUOTES, 'UTF-8', true);?>
</a>
								<?php } else { ?>
									неизвестно
								<?php }?>
	                  		</td>
	                   	</tr>
	                   	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					   	<tr>
					   		<td colspan="3" align="right">
								<?php if ($_smarty_tpl->tpl_vars['pageNums']->value) {?>
								<table cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<td class="small">Результаты с <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['startIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> по <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['endIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> из <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['totalItems'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
										<td class="small" align="right">
											<ul class="pagination pagination-sm pull-right push-down-10 push-up-10">	
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageNums']->value['pages'], 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
												<li class="active">
													<a href="stats.visitor.php?visitorId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitorId']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
												</li>
												<?php } elseif ($_smarty_tpl->tpl_vars['number']->value == '...') {?>
													...
												<?php } else { ?>
												 <li>
													<a href="stats.visitor.php?visitorId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitorId']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>&page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
												 </li>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                                </ul>  
										</td>
									</tr>
								</table>
								<?php }?>
							</td>
						</tr>
						<?php } else { ?>
							<tr class="odd">
								<td class="data none" colspan="3" align="center">- Не найдено -</td>
							</tr>
							<tr><td colspan="3">&nbsp;</td></tr>
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
