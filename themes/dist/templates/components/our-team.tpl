{fetch_section assign=ourTeam section=1003}
{fetch_articles assign=items section=$ourTeam.sectionId status='visible' type_content="products" orderBy="publishedOn ASC"}

<section class="section section-team">
	<div class="container">
		<div class="h2">{$ourTeam.name}</div>
		<div class="row pt-5">

			{foreach from=$items item=item key=key name=name}

				<div class="col team-color-{$item.articul}">
					<div class="team-photo">
						<img src="{$item.images.original.url}" class="img-fluid" alt="">
					</div>
					<div class="h4">{$item.title}</div>
					<div class="team-description">{$item.summary nofilter}
					</div>
				</div>

			{/foreach}

		</div>
	</div>
</section>