<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 12:05:53
  from 'C:\xampp\htdocs\admin\templates\stats.bots.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa1a811e7961_61535372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638a760b03fb2a118157ec7b5b22ee6ebff12995' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.bots.tpl',
      1 => 1603860784,
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
function content_62fa1a811e7961_61535372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"bots",'title'=>"Боты - Статистика"), 0, false);
?>
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>Боты</h2></div>                           
    </div>
</div>
<div class="form-group main">                                        
    <div class="col-md-12">
        <?php $_smarty_tpl->_subTemplateRender("file:stats.type-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"stats.visitors.php"), 0, false);
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
                            <th class="text-center" width="100">Агенты</th>
                            <th class="text-center">Просмотры</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['visitors']->value) {?>
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['visitors']->value, 'visitor');
$_smarty_tpl->tpl_vars['visitor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['visitor']->value) {
$_smarty_tpl->tpl_vars['visitor']->do_else = false;
?>
                	<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even','advance'=>false),$_smarty_tpl);?>
" onmouseover="this.oldClassName=this.className; this.className='<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
Hov'" onmouseout="this.className=this.oldClassName">
                		<td class="data small" width="100%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['visitor']->value['botName'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['visitor']->value['userAgent'] : $tmp);?>
</td>
                		<td class="data small action" align="center" onClick="return openWindow('stats.bot.php?visitorId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['visitorId'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>', 800, 610)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['totalVisits'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                	</tr>
                	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  	<tr>
                    <table cellpadding="0" cellspacing="0" width="100%"><tr>
                 	 <td class="small">Результаты с <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['startIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> по <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['endIteration'], ENT_QUOTES, 'UTF-8', true);?>
</b> из <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['totalItems'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
                     <td align="right">
          		     <?php if ($_smarty_tpl->tpl_vars['pageNums']->value) {?>             
                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                            <?php if ($_smarty_tpl->tpl_vars['pageNums']->value['previousPage']) {?>
                                <li><a href="stats.bots.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['previousPage'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum">&laquo; Предыдущая</a></li>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageNums']->value['pages'], 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                                    <li class="active"><a href="stats.bots.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['number']->value == '...') {?>
                				    ...
                                <?php } else { ?>
                				    <li><a href="stats.bots.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['pageNums']->value['nextPage']) {?>
                                <li><a href="stats.bots.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageNums']->value['nextPage'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>">Следующая &raquo;</a></li>
                            <?php }?>
                        </ul>  
                    <?php }?>
                    </tr></table>
                   	</td></tr>
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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
