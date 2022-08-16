{include file="header.tpl" title=$section.meta_title keywords=$section.keywords description=$section.description}
<main>
			<div class=" leadership-wrapper">
				{include file="modules/you-are-here.tpl"}
				<div class="container-2">
					<div class="row">
						<div class="page-main-content col-md-9">
							{php}
							//<?
							$tmp = $_smarty_tpl->getTemplateVars('section');
							$i = 0;
							$regex = array();
							$new = preg_replace_callback("/<h2>(.*?)<\/h2>/", function($matches) use(&$i, &$regex)
							{
									$regex[] = $matches[1];
									$result = "
									<div class=\"main-entry-header\" id=\"first-part-$i\" style=\"margin-top:40px\">
										<h2>$matches[1]</h2>
									</div>
									";
									$i++;
							    return $result;
							}
							, $tmp['content']);

							$_smarty_tpl->assign('content',$new);
							$_smarty_tpl->assign('sections',$regex);
							{/php}

							{$content nofilter}
						</div>
						<div class="page-aside col-md-3">
							<div class="theiaStickySidebar">
								<div class="sidebar-links">
									{foreach from=$sections item=item key=key}	
									<a href="{$article.url}#first-part-{$key}" data-scroll>{$item}</a>
									{/foreach}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
{include file="footer.tpl"}