{include file="header.tpl" activeItem="settings-content" title="{settings_content:title}"}
<div class="page-content-wrap">
    {if $messages.saved}<span id="savedMessage" onclick="{literal}noty({text: '{/literal}{settings_content:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
    <script>{literal}$(document).ready(function() {{/literal}{if $messages.saved}$('#savedMessage').click(); {/if} {literal}}); {/literal}</script>
    <div class="content-frame" style="margin-bottom:10px;"><div class="content-frame-top"><div class="col-md-12"><h2>{settings_content:title}</h2></div></div></div>
    <div class="col-md-12">
        <form action="settings-content.php" method="post" id="settings">
            <div class="panel panel-default tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#tabsections" data-toggle="tab" aria-expanded="true">{settings_content:tabs:sections}</a></li>
                    <li class=""><a href="#tabsliders" data-toggle="tab" aria-expanded="false">{settings_content:tabs:slider}</a></li>
                    {foreach from=$typeContents item=typeContent key=key}
                    <li class=""><a href="#tab{$key}" data-toggle="tab" aria-expanded="false">{$typeContent}</a></li>
                    {/foreach}
                    <li class=""><a href="#tabmenu" data-toggle="tab" aria-expanded="false">{settings_content:tabs:settingsMenu}</a></li>
                </ul>

                <div class="panel-body tab-content nopadding">
                    <div class="tab-pane active" id="tabsections">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:sections:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_name" name="fieldcontent[section_name]" value="1" {if $conf.section_name}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:sections:name}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_fileName" name="fieldcontent[section_fileName]" value="1" {if $conf.section_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_alias" name="fieldcontent[section_alias]" value="1" {if $conf.section_alias}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:sections:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="section_parent" name="fieldcontent[section_parent]" value="1" {if $conf.section_parent}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:sections:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="section_images" name="fieldcontent[section_images]" value="1" {if $conf.section_images}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:sections:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:five}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="section_icon" name="fieldcontent[section_icon]" value="1" {if $conf.section_icon}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:sections:icon}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sectionsInfo:six}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabSection -->

                    <!-- tabSlider -->
                    <div class="tab-pane" id="tabsliders">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:slider:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_title" name="fieldcontent[slider_title]" value="1" {if $conf.slider_title}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:title}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_fileName" name="fieldcontent[slider_fileName]" value="1" {if $conf.slider_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="slider_section" name="fieldcontent[slider_section]" value="1" {if $conf.slider_section}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_alias" name="fieldcontent[slider_alias]" value="1" {if $conf.slider_alias}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_text" name="fieldcontent[slider_text]" value="1" {if $conf.slider_text}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:text}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:eight}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_link" name="fieldcontent[slider_link]" value="1" {if $conf.slider_link}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:link}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:nine}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_icon" name="fieldcontent[slider_icon]" value="1" {if $conf.slider_icon}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:icon}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:five}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_images" name="fieldcontent[slider_images]" value="1" {if $conf.slider_images}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:six}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="slider_summary" name="fieldcontent[slider_summary]" value="1" {if $conf.slider_summary}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:slider:summary}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:sliderInfo:seven}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabSlider -->

                    <!-- tabArticle -->
                    <div class="tab-pane" id="tabarticles">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:articles:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_title" name="fieldcontent[article_title]" value="1" {if $conf.article_title}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:title}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_fileName" name="fieldcontent[article_fileName]" value="1" {if $conf.article_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_section" name="fieldcontent[article_section]" value="1" {if $conf.article_section}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_alias" name="fieldcontent[article_alias]" value="1" {if $conf.article_alias}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_images" name="fieldcontent[article_images]" value="1" {if $conf.article_images}checked{/if}  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:six}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_summary" name="fieldcontent[article_summary]" value="1" {if $conf.article_summary}checked{/if}  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:summary}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:seven}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="article_content" name="fieldcontent[article_content]" value="1" {if $conf.article_content}checked{/if}  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:content}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:eight}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_gallery" name="fieldcontent[article_gallery]" value="1" {if $conf.article_gallery}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:gallery}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:nine}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_featured" name="fieldcontent[article_featured]" value="1" {if $conf.article_featured}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:featured}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:ten}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="article_comments" name="fieldcontent[article_comments]" value="1" {if $conf.article_comments}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:articles:comments}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:articlesInfo:eleven}</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ tabArticle -->

                    <!-- tabTiding -->
                    <div class="tab-pane" id="tabnews">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:tidings:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_title" name="fieldcontent[tiding_title]" value="1" {if $conf.tiding_title}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:title}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_fileName" name="fieldcontent[tiding_fileName]" value="1" {if $conf.tiding_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="tiding_section" name="fieldcontent[tiding_section]" value="1" {if $conf.tiding_section}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_alias" name="fieldcontent[tiding_alias]" value="1" {if $conf.tiding_alias}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_images" name="fieldcontent[tiding_images]" value="1" {if $conf.tiding_images}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:six}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_summary" name="fieldcontent[tiding_summary]" value="1" {if $conf.tiding_summary}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:summary}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:seven}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_content" name="fieldcontent[tiding_content]" value="1" {if $conf.tiding_content}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:content}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:eight}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_gallery" name="fieldcontent[tiding_gallery]" value="1" {if $conf.tiding_gallery}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:gallery}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:nine}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_featured" name="fieldcontent[tiding_featured]" value="1" {if $conf.tiding_featured}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:featured}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:ten}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="tiding_comments" name="fieldcontent[tiding_comments]" value="1" {if $conf.tiding_comments}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:tidings:comments}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:tidingsInfo:eleven}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabTiding -->

                    <!-- tabGallery -->
                    <div class="tab-pane" id="tabgallerys">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:galleries:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_title" name="fieldcontent[gallery_title]" value="1" {if $conf.gallery_title}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:title}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_fileName" name="fieldcontent[gallery_fileName]" value="1" {if $conf.gallery_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_section" name="fieldcontent[gallery_section]" value="1" {if $conf.gallery_section}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_alias" name="fieldcontent[gallery_alias]" value="1" {if $conf.gallery_alias}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_images" name="fieldcontent[gallery_images]" value="1" {if $conf.gallery_images}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:six}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="gallery_gallery" name="fieldcontent[gallery_gallery]" value="1" {if $conf.gallery_gallery}checked{/if}  disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:gallery}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:nine}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_summary" name="fieldcontent[gallery_summary]" value="1" {if $conf.gallery_summary}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:summary}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:seven}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_content" name="fieldcontent[gallery_content]" value="1" {if $conf.gallery_content}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:content}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:eight}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_featured" name="fieldcontent[gallery_featured]" value="1" {if $conf.gallery_featured}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:featured}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:ten}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="gallery_comments" name="fieldcontent[gallery_comments]" value="1" {if $conf.gallery_comments}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:galleries:comments}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:galleriesInfo:eleven}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabGallery -->

                    <!-- tabGallery -->
                    <div class="tab-pane" id="tabproducts">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:availableFields}<br> <small>{settings_content:products:availableFieldsText}</small></h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_title" name="fieldcontent[product_title]" value="1" {if $conf.product_title}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:title}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_fileName" name="fieldcontent[product_fileName]" value="1" {if $conf.product_fileName}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:fileName}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:two}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small disabled">
                                                    <input type="checkbox" id="product_section" name="fieldcontent[product_section]" value="1" {if $conf.product_section}checked{/if} disabled="disabled"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:parent}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:three}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_alias" name="fieldcontent[product_alias]" value="1" {if $conf.product_alias}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:alias}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:four}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_articul" name="fieldcontent[product_articul]" value="1" {if $conf.product_articul}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:articul}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:five}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_price" name="fieldcontent[product_price]" value="1" {if $conf.product_price}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:price}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:six}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_sale" name="fieldcontent[product_sale]" value="1" {if $conf.product_sale}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:sale}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:seven}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_orderBy" name="fieldcontent[product_orderBy]" value="1" {if $conf.product_orderBy}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:orderBy}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:twelve}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_images" name="fieldcontent[product_images]" value="1" {if $conf.product_images}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:images}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:fifteen}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_tags" name="fieldcontent[product_tags]" value="1" {if $conf.product_tags}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:tags}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:sixteen}</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_featured" name="fieldcontent[product_featured]" value="1" {if $conf.product_featured}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:featured}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:nineteen}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="product_comments" name="fieldcontent[product_comments]" value="1" {if $conf.product_comments}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:products:comments}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:productsInfo:twenty}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ tabGallery -->

                    <!-- tabMenu -->
                    <div class="tab-pane" id="tabmenu">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading">
                                <h5 class="panel-title">{settings_content:settingsMenuFields}</h5>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_comments" name="fieldcontent[menu_subscribe]" value="1" {if $conf.menu_subscribe}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:settingsMenu:subscribe}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:settingsMenuInfo:ten}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_comments" name="fieldcontent[menu_comments]" value="1" {if $conf.menu_comments}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:settingsMenu:comments}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:settingsMenuInfo:one}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_banners" name="fieldcontent[menu_banners]" value="1" {if $conf.menu_banners}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:settingsMenu:banners}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:settingsMenuInfo:three}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_currency" name="fieldcontent[menu_currency]" value="1" {if $conf.menu_currency}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:settingsMenu:currency}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:settingsMenuInfo:five}</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="check_block_box">
                                            <div class="check_box">
                                                <label class="switch switch-small">
                                                    <input type="checkbox" id="menu_site_users" name="fieldcontent[menu_site_users]" value="1" {if $conf.menu_site_users}checked{/if}><span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <label class="col-md-3 col-xs-12 control-label label_block_box">{settings_content:settingsMenu:siteUsers}</label>
                                        <div class="col-md-8 info_block_box">{settings_content:settingsMenuInfo:nine}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ tabMenu -->
                    </div>
                </div>
                <!-- panel -->
            </div>
            <div align="center" class="col-md-12 main main_buttons"><input class="btn btn-primary" type="submit" name="action[save]" value="&nbsp; {general:save} &nbsp;" /></div>
        </form>
    </div>
</div>

{include file="footer.tpl"}