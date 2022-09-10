{fetch_section assign=roadmap section=984}
{fetch_articles assign=items section=$roadmap.sectionId status='visible' type_content="products" orderBy="publishedOn ASC"}

<section class="section section-roadmap" id="roadmap">
	<div class="decor-left"></div>
	<div class="decor-right"></div>
	<div class="decor-bottom"></div>
	<div class="development-roadmap">
		<div class="container">
			<div class="h2">{$roadmap.name}</div>
			<p>{$roadmap.dop}</p>
		</div>
	</div>
	<div class="container">
		<div class="roadmap row">


			{php}

			$already = false;
            $we_are_here = false;
			$_smarty_tpl->assign("already", $already );
			$_smarty_tpl->assign("we_are_here", $we_are_here );
  
			{/php}

			{foreach from=$items item=item key=key name=roadmapCycle  }

				<div class="roadmap-item col {if !$already } highlight{/if}">
				{if $item.avail == true } {$already = true} {/if}
					{if $item.avail == true && !$we_are_here }
						{$we_are_here = true}
						<div class="we-are-here">
							{$item.title}
						</div>
					{/if}
					<div class="d-flex flex-column h-100">

						<div class="roadmap-item-info">
							{bracket_regex from=$item.summary }
							{foreach from=$regex item=item}
								<div class="roadmap-item-date">
									<div class="mt-n3 whitespace-pre-line">
										{$item.code|strip_tags}
									</div>
									<div class="roadmap-item-date-year">
										{$item.content nofilter}
									</div>
								</div>
							{/foreach}

							<div class="roadmap-item-phase">
								<span class="position-relative z-1">
									{$item.articul}
								</span>
							</div>
						</div>

						<div class="roadmap-item-description">
							<ul>
								{bracket_regex from=$item.content }
								{foreach from=$regex item=item}
									<li>{$item.content nofilter}</li>
								{/foreach}
							</ul>
						</div>
					</div>
				</div>


			{/foreach}
		</div>
	</div>
</section>