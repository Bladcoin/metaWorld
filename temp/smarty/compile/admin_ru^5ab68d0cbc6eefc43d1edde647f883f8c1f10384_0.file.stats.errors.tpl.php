<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 12:05:54
  from 'C:\xampp\htdocs\admin\templates\stats.errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa1a82a01524_72222066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ab68d0cbc6eefc43d1edde647f883f8c1f10384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.errors.tpl',
      1 => 1603860888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:stats.error-code-selector.tpl' => 1,
    'file:stats.date-selector.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fa1a82a01524_72222066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"errors",'title'=>"Ошибки - Статистика"), 0, false);
?>
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>Ошибки</h2></div>                           
    </div>
</div>
<div class="form-group main">                                        
    <div class="col-md-12">
        <?php $_smarty_tpl->_subTemplateRender("file:stats.error-code-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"stats.errors.php"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:stats.date-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<div class="clear"></div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body panel-body-table">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-actions">
                    <thead>
                        <tr>
                            <th class="text-center" width="100">Код</th>
                            <th class="text-center">Запрашиваемый URI</th>
                            <th class="text-center" width="100">Просмотры</th>
                            <th  class="text-center" width="100">Просмотреть</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                	<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even','advance'=>false),$_smarty_tpl);?>
" onmouseover="this.oldClassName=this.className; this.className='<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
Hov'" onmouseout="this.className=this.oldClassName">
						<td class="data small code<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
" align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value['errorCode'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="data small" width="100%"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value['requestUri'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate(urldecode($_smarty_tpl->tpl_vars['error']->value['requestUri']),80), ENT_QUOTES, 'UTF-8', true);?>
</a></td>
						<td class="data small action" style="cursor: pointer;" onClick="window.open('stats.error.php?requestUri=<?php echo urlencode($_smarty_tpl->tpl_vars['error']->value['requestUri']);?>
')" align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value['totalVisits'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="data action" style="cursor: pointer;" onClick="window.open('stats.error.php?requestUri=<?php echo urlencode($_smarty_tpl->tpl_vars['error']->value['requestUri']);?>
')" align="center"><span class="fa fa-eye"></span></td>
					</tr>
                	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  	<tr>
	                  	<td colspan="4">
	                    <table cellpadding="0" cellspacing="0" width="100%"><tr>
	                 	 	<td class="small">Результаты с <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['startIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> по <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['endIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> из <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['totalItems'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
					 	 	<td align="right">
					 	 	<?php if ($_smarty_tpl->tpl_vars['pageNums']->value) {?>             
		                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
		                           
		                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageNums']->value['pages'], 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
		                                <?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
		                                    <li class="active"><a href="stats.errors.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterErrorCode']->value) {?>&filterErrorCode=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterErrorCode']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		                                <?php } elseif ($_smarty_tpl->tpl_vars['number']->value == '...') {?>
		                				   <li><a>... </a></li>
		                                <?php } else { ?>
		                				    <li><a href="stats.errors.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterErrorCode']->value) {?>&filterErrorCode=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterErrorCode']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		                                <?php }?>
		                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		                        </ul>  
							<?php }?>
	                    </tr></table>
                   		</td>
                   	</tr>
                   	<tr>
	                   	<td colspan="4">
		                   	<table width="100%" cellpadding="5" cellspacing="0">
						   		<tr>
							   		<td class="small">
								   		<span class="code404">404</span> - Страница не найдена, 
								   		<span class="code503">503</span> - Сервис недоступен, 
								   		<span class="code301">301</span> - Перемещено
								   	</td>
								</tr>
							</table>
	                   	</td>
                   	</tr>
                    <?php } else { ?>
                   	<tr class="odd">
                  		<td class="data none" colspan="4" align="center">- Не найдено -</td>
                   	</tr>
                   	<tr><td colspan="3">&nbsp;</td></tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>                                
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
