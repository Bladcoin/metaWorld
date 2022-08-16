<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 09:11:39
  from 'C:\xampp\htdocs\admin\templates\stats.visitors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb432bcc1603_55955295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10e5600897bf1e92a1c3cf801e018e69200c891' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\stats.visitors.tpl',
      1 => 1603860986,
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
function content_62fb432bcc1603_55955295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"visitors",'title'=>"Посетители - Статистика"), 0, false);
?>
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>Посетители</h2></div>                           
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
                            <th class="text-center">Первый визит</th>
                            <th class="text-center">Источник</th>
                            <th class="text-center">Просмотры</th>
                            <th class="text-center">Просмотреть</th>
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
                   	<tr class="">
                  		<td nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['visitor']->value['firstVisitOn'];?>
</td>
                  		<td class="" width="100%">
	                  		<?php if ($_smarty_tpl->tpl_vars['visitor']->value['refererWebsite']) {?>
	                  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['referer'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['refererWebsite'],30), ENT_QUOTES, 'UTF-8', true);?>
</a>
	                  			<?php if ($_smarty_tpl->tpl_vars['visitor']->value['searchPhrase']) {?> (<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['searchPhrase'],50), ENT_QUOTES, 'UTF-8', true);?>
)<?php }?>
	                  		<?php } elseif ($_smarty_tpl->tpl_vars['visitor']->value['refererUrl']) {?>
	                  			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['refererUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['visitor']->value['refererUrl'],80), ENT_QUOTES, 'UTF-8', true);?>
</a>
	                  		<?php }?>
	                  	</td>
                  		<td class="data action" style="cursor: pointer;" onClick="window.open('stats.visitor.php?visitorId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['visitorId'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>')" align="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['totalVisits'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  		<td class="data action" style="cursor: pointer;" onClick="window.open('stats.visitor.php?visitorId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visitor']->value['visitorId'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}?>')" align="center"><span class="fa fa-eye"></span></td>
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageNums']->value['pages'], 'number');
$_smarty_tpl->tpl_vars['number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$_smarty_tpl->tpl_vars['number']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['number']->value == $_smarty_tpl->tpl_vars['page']->value) {?>
                                    <li class="active"><a href="stats.visitors.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}
if ($_smarty_tpl->tpl_vars['domain']->value) {?>&domain=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                <?php } else { ?>
                				    <li><a href="stats.visitors.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['filterTypeId']->value) {?>&filterTypeId=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterTypeId']->value, ENT_QUOTES, 'UTF-8', true);
}
if ($_smarty_tpl->tpl_vars['domain']->value) {?>&domain=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="pageNum"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>  
                    <?php }?>
                    </tr></table>
                   	</td></tr>
                    <?php } else { ?>
                   	<tr class="odd"><td class="data none" colspan="4" align="center">- Не найдено -</td></tr>
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
