<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 14:19:21
  from 'C:\xampp\htdocs\admin\templates\settings-social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa39c9359878_50679993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ddc4597eb36d8cf3fa92d277e77cb40d300a6c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\settings-social.tpl',
      1 => 1603860620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fa39c9359878_50679993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"settings-social",'title'=>"Социальные сети"), 0, false);
?>
<div class="page-content-wrap">

    <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick="noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
» сохранен.', layout: 'topRight', type: 'success'});"></span><?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?><span id="nameError" onclick="noty({text: 'Введите название Социальной сети.', layout: 'topRight', type: 'error'});"></span><?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?><span id="notSavedError" onclick="noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
» НЕ сохранен или не были изменены', layout: 'topRight', type: 'error'});"></span><?php }?>

    <?php echo '<script'; ?>
>
        
        $(document).ready(function() {
         
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['name']) {?>$('#nameError').click(); <?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['errors']->value['not_saved']) {?>$('#notSavedError').click(); <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?>$('#savedMessage').click(); <?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['messages']->value['deleted']) {?>$('#deletedMessage').click(); <?php }?> 
        
        });

        function deleteSocialMessage() {noty({text: '«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
» удален.', layout: 'topRight', type: 'success'})} 
        
    <?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['action']->value['edit']) {?>
    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>Социальные сети</h2></div>
            <div class="col-md-4 content-frame-body-left"><div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div></div>
        </div>
    </div>

    <div class="col-md-12">
        <form action="settings-social.php" method="post" id="social">
            <input type="hidden" name="social[social_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['social_id'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="action[save]" value="1" />
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#status" data-toggle="tab" aria-expanded="true">Статусы</a></li>
                </ul>
                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="status">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title"> Все поля, отмеченные звездочкой (<span class="fError">*</span>), должны быть заполнены.</h5>
                            </div>
                            <div class="panel-body" id="generalPane">
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left">Название</div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="name" type="text" name="social[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left"><label class="field_name <?php if ($_smarty_tpl->tpl_vars['errors']->value['fileName']) {?>fError<?php }?>">Псевдоним</label></div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="fileName" type="text" name="social[fileName]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left"><label class="field_name">Иконка</label></div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="icon" type="text" name="social[icon]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left"><label class="field_name">Ссылка</label></div>
                                    <div class="col-md-9 nopadding_right"><input class="form-control" autocomplete="off" id="url" type="text" name="social[url]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left"><label class="field_name">Отобразить иконку и текст</label></div>
                                    <div class="col-md-9 nopadding_right">
                                        <div class="checkbox-material">
                                            <input type="checkbox" id="visible_text" name="social[visible_text]" value="1" <?php if ($_smarty_tpl->tpl_vars['social']->value['visible_text']) {?>checked<?php }?>/>
                                            <label for="visible_text" style="top: 7px;"><span class="chk-span"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 nopadding_left"><label class="field_name">Статус</label></div>
                                    <div class="col-md-9 nopadding_right"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['statuses']->value,'name'=>'social[status]','id'=>'status','selected'=>$_smarty_tpl->tpl_vars['social']->value['status'],'class'=>"form-control select"),$_smarty_tpl);?>
</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 main main_buttons text-center">
                <input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" />
                <a class="btn btn-primary" href="settings-social.php">Отменить</a>
            </div>
        </form>
    </div>

    <?php } else { ?>

    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>Социальные сети</h2></div>
            <div class="col-md-4 content-frame-body-left"><div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div></div>
            <div class="col-md-4"><div class="pull-right"> <a class="btn btn-danger" href="settings-social.php?action[edit]=true" data-original-title="Добавить"><i class="fa fa-plus"></i></a></div></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-striped table-actions table-hover" id="socials">
                        <thead>
                            <tr>
                                <th>Социальные сети</th>
                                <th>Ссылка</th>
                                <th class="text-center"> Статус</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['socials']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['socials']->value, 'social', false, NULL, 'socials', array (
));
$_smarty_tpl->tpl_vars['social']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social']->value) {
$_smarty_tpl->tpl_vars['social']->do_else = false;
?>
                            <tr id="social-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['social_id'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <td class="" width="100%"><?php echo $_smarty_tpl->tpl_vars['social']->value['name'];?>
</td>
                                <td class="" align="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                <td style="" class="" align="center"><?php echo $_smarty_tpl->tpl_vars['social']->value['status'];?>
</td>
                                <td class="btn-link-action text-center">
                                    <a class="btn btn-rounded" href="settings-social.php?action[edit]=true&social[social_id]=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['social_id'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="fa fa-pen"></span></a>
                                    <a class="btn btn-danger btn-rounded" alt="Удалить" onclick="deleteSocial(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['social_id'], ENT_QUOTES, 'UTF-8', true);?>
, '<?php echo $_smarty_tpl->tpl_vars['social']->value['name'];?>
');"><span class="fa fa-trash"></span></a>
                                </td>
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
