{include file="components/doctype.tpl"}

{fetch_section assign=whitepaper section=1000 }
{fetch_sections assign=categories from=$whitepaper.sectionId status="visible" orderBy="publishedOn ASC"}

<body>
	<div class="whitepaper">
		<div class="left-col">
			<div class="h6 text-center">{$whitepaper.name}</div>
			<div class="navigation">
				<ul>
					{php}
					$i = 1;
					$all_categories = [];
					$_smarty_tpl->assign("i", $i);
					{/php}
					{foreach from=$categories item=category key=key name=name}
						{fetch_sections assign=subCategories from=$category.sectionId status="visible" orderBy="publishedOn ASC" }
						{if $subCategories}
							<li>
								<a href="#block{$i++}">{$category.name}</a>
								<ul>
									{foreach from=$subCategories item=subCategory key=index name=cycle}

										<li>
											<a href="#block{$i++}">{$subCategory.name}</a>
										</li>

									{/foreach}
								</ul>
							</li>
						{else}
							<li>
								<a href="#block{$i++}">{$category.name}</a>
							</li>
						{/if}
					{/foreach}

					{$i = 1}

				</ul>
			</div>
		</div>
		<div class="right-col">

			<div class="blocks">

				{foreach from=$categories item=category key=key name=name}
					{fetch_sections assign=subCategories from=$category.sectionId status="visible" orderBy="publishedOn ASC" }
					<div class="whitepaper-block" id="block{$i++}">
						<div class="whitepaper-title">
							{$category.name}
						</div>
						<div class="whitepaper-content">
							<p>{$category.summary nofilter}</p>
						</div>
					</div>
					{if $subCategories}
						{foreach from=$subCategories item=subCategory key=index name=cycle}
							<div class="whitepaper-block" id="block{$i++}">
								<div class="whitepaper-title">
									{$subCategory.name}
								</div>
								<div class="whitepaper-content">
									<p>{$subCategory.summary nofilter}</p>
								</div>
							</div>
						{/foreach}
					{/if}
				{/foreach}
			</div>

			<div class="row nav-buttons">
				<div class="col-6">
					<button type="button" class="nav-button nav-prev">
						<span class="row mx-0 pointer-events-none">
							<span class="col-auto opacity-50">
								previous
							</span>
							<span class="col nav-button-text">
								<!--								Экономический/градостроительный симулятор-->
							</span>
						</span>
					</button>
				</div>
				<div class="col-6">
					<button type="button" class="nav-button nav-next">
						<span class="row mx-0 pointer-events-none">
							<span class="col nav-button-text">
								<!--								Экономический/градостроительный симулятор-->
							</span>
							<span class="col-auto opacity-50">
								next
							</span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="curzr" hidden></div>
</body>

</html>