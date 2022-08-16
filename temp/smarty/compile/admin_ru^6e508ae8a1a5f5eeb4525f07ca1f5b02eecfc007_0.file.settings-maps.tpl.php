<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-15 14:19:23
  from 'C:\xampp\htdocs\admin\templates\settings-maps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fa39cb45b392_14355520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e508ae8a1a5f5eeb4525f07ca1f5b02eecfc007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin\\templates\\settings-maps.tpl',
      1 => 1555960414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62fa39cb45b392_14355520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.maps.php','function'=>'smarty_function_maps',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activeItem'=>"settings-maps",'title'=>"Настройки - Управление"), 0, false);
?>
<div class="page-content-wrap">
    <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?><span id="savedMessage" onclick="noty({text: 'Настройки сохранены.', layout: 'topRight', type: 'success'});"></span><?php }?>
    <?php echo '<script'; ?>
>$(document).ready(function() { <?php if ($_smarty_tpl->tpl_vars['messages']->value['saved']) {?>$('#savedMessage').click(); <?php }?> }); <?php echo '</script'; ?>
>

    <div class="content-frame" style="margin-bottom:10px;">
        <div class="content-frame-top">
            <div class="col-md-4"><h2>Настройки карты</h2></div>
            <div class="col-md-4 content-frame-body-left">
                <div id="ajaxStatus" class="alert alert-warning info-box-img" role="alert"></div>
                <div class="upload-image alert message" role="alert"></div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="col-md-12">
        <form action="settings-maps.php" method="post" id="settings_maps" autocomplete="off">
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#contactInfo" data-toggle="tab" aria-expanded="true">Настройки карты</a></li>
                </ul>

                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="contactInfo">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="field_name"><?php if ($_smarty_tpl->tpl_vars['maps']->value['maps_down'] == '1') {?>Отключить карту<?php } else { ?>Включить карту<?php }?></label>
                                        <div class="checkbox-material">
                                            <input type="checkbox" id="maps_down" name="maps[maps_down]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['maps_down'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['maps']->value['maps_down']) {?>checked<?php }?>/>
                                            <label for="maps_down" id="visible_maps" style="top: 7px;" <?php if ($_smarty_tpl->tpl_vars['maps']->value['maps_down'] == '1') {?>data-val="0" <?php } else { ?>data-val="1" <?php }?>>
                                                <span class="chk-span"></span>
                                                <i><?php if ($_smarty_tpl->tpl_vars['maps']->value['maps_down'] == 1) {?>Отключить карту<?php } else { ?>Включить карту<?php }?></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">API ключ карты <i data-toggle="tooltip" data-placement="top" data-original-title="Удалять не рекомендуется (если Вам уже настроили карту)" class="fa fa-question-circle"></i></label>
                                        <input class="form-control" type="text" name="maps[api_key]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['api_key'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">Широта <i data-toggle="tooltip" data-placement="top" data-original-title="Latitude" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[lat]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['lat'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">Долгота <i data-toggle="tooltip" data-placement="top" data-original-title="Longitude" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[lng]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['lng'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">Маштаб карты <i data-toggle="tooltip" data-placement="top" data-original-title="Рекомендуемы параметры маштабирования карты (от 12 до 20)" class="fa fa-question-circle"></i></label>
                                        <input class="mask_zoom form-control" type="text" name="maps[zoom]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['zoom'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">Ширина карты <i data-toggle="tooltip" data-placement="top" data-original-title="Параметры карты по ширине ( для отображения на сайте ) указывать в процентах ( % )" class="fa fa-question-circle"></i></label>
                                            <input class="form-control" type="text" name="maps[maps_wight]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['maps_wight'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">Высота карты <i data-toggle="tooltip" data-placement="top" data-original-title="Параметры карты по высоте ( для отображения на сайте ) указывать в пиксилях ( px )" class="fa fa-question-circle"></i></label>
                                            <input class="mask_maps_height form-control" type="text" name="maps[maps_height]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['maps_height'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_left">
                                        <div class="form-group">
                                            <label class="field_name">Цвет маркера</label>
                                            <input class="form-control" type="text" name="maps[fillColor]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['fillColor'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6 nopadding_right">
                                        <div class="form-group">
                                            <label class="field_name">Прозрачность маркера </label>
                                            <input class="form-control" type="text" name="maps[fillOpacity]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['fillOpacity'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="field_name">Размер маркера </label>
                                        <input class="form-control" type="text" name="maps[scale]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maps']->value['scale'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <?php if ($_smarty_tpl->tpl_vars['maps']->value['maps_down'] == '1') {?>
                                        <div class="block_maps">
                                            <div id="map-canvas"></div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center" class="col-md-12 main main_buttons"><input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; Сохранить &nbsp;" /></div>
        </form>
    </div>
</div>



<?php echo smarty_function_maps(array(),$_smarty_tpl);?>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
