{fetch_section assign=secondWorld section=989}
{fetch_articles assign=slides section=$secondWorld.sectionId status='visible'}

<section class="section section-about" id="about">
	<div class="decor-left"></div>
	<div class="decor-right"></div>
	<div class="container">
		<div class="slogan">
			{$secondWorld.summary nofilter}
		</div>
		<div class="about-content">
			<div class="row">
				<div class="col-6">
					<div class="position-relative pb-5 h-100">
						<div class="about-features-slider">
							{foreach from=$slides item=slide key=key name=s}
								<div class="slide">
									<div class="subtitle">
										<span class="text-muted">0{$key + 1} /</span>
										{$slide.title}
									</div>
									<div class="h3">
										{$slide.articul}
									</div>
									{$slide.summary nofilter}

								</div>
							{/foreach}
						</div>
						<div class="about-features-slider-arrows"></div>
					</div>
				</div>
				<div class="col-6">
					<div class="about-previews-slider">
					{foreach from=$slides item=slide key=key name=s}
						<div class="slide">
							<img src="{$slide.images.original.url}" width="332" height="453" alt="">
						</div>
					{{/foreach}}
						<div class="slide"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>