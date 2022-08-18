<footer id="footer">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-auto">
				<div class="d-flex align-items-center">

					{bracket_regex from=$section.summary }
					<span class="mt-1">{$section.dop}</span>
					{foreach from=$regex item=item key=key name=name}
						<a href="{$item.code|strip_tags}" target="_blank" class="ml-3"><img
								src="{$THEME_URL}{$item.content|strip_tags|replace:' ':'' nofilter}" width="16" height="17" alt=""></a>
					{/foreach}
				</div>
			</div>
			<div class="col-auto">
				<div class="row">
					<div class="col-auto px-4">
						<div class="d-flex align-items-center">
							{bracket_regex from=$section.content }
							<span class="text-muted mr-2">{$section.section_icon}</span>
							{foreach from=$regex item=item key=key name=name}


								<a href="{$item.code|strip_tags}" target="_blank" class="mx-2"><img
										src="{$THEME_URL}{$item.content|strip_tags|replace:' ':'' nofilter}" width="20" height="21" alt=""></a>

							{/foreach}
						</div>
					</div>
					{bracket_regex from=$section.content_two }
					{foreach from=$regex item=item key=key name=name}
						{if $key == 0 }

							<div class="col-auto border-left px-4">
							{elseif $key % 2 == 0 && $key != 0 }
							</div>
							<div class="col-auto border-left px-4">

							{/if}


							<a href="{$item.code|strip_tags}" target="_blank" class="mx-2"><img
									src="{$THEME_URL}{$item.content|strip_tags|replace:' ':'' nofilter}" width="20" height="21" alt=""></a>


						{/foreach}

					</div>
				</div>
			</div>
		</div>
</footer>
</div>
{include file="components/loginModal.tpl"}

{include file="components/forgotPassword.tpl"}

{* {include file="components/registrationModal.tpl"} *}

{include file="components/newsModal.tpl"}



<div class="curzr" hidden></div>
</body>

</html>