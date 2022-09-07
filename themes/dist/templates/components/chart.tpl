{fetch_section assign=whitepaper section=1000 }


{append var='periods' value='' index=0}
{append var='data' value='' index=0}
{append var='colors' value='' index=0}

{bracket_regex from=$whitepaper.summary}
{foreach from=$regex item=periodItem key=key name=name}
	{$periods[$key] = $periodItem.code|strip_tags}
	{$data[$key] = $periodItem.content|strip_tags}

{/foreach}

{bracket_regex from=$whitepaper.content_two}
{foreach from=$regex item=colorItem key=key name=name}
	{$colors[$key] = $colorItem.content|strip_tags}
{/foreach}



<section class="section section-chart d-flex flex-column justify-content-center">
	<div class="container">
		<div class="chart">
			<div class="video">
				<video src="{$THEME_URL}/video/water.mp4" pip="false" autoplay muted loop></video>
			</div>
			<canvas id="chart"></canvas>

			<script>
				let periods = [{foreach from=$periods item=period key=key name=name}"{$period|strip_tags|replace:" ": ""}"
					{if !$smarty.foreach.name.last},
					{/if}
				{/foreach}];
				let colors  = [{foreach from=$colors item=color key=key name=name}"{$color|strip_tags|replace:" ": ""}"
					{if !$smarty.foreach.name.last},
					{/if}
				{/foreach}];
				let data  = [{foreach from=$data item=item key=key name=name}"{$item|strip_tags|replace:" ": ""}"
					{if !$smarty.foreach.name.last},
					{/if}
				{/foreach}].map(item => +item);

				{literal}
					new Chart('chart', {
						type: 'doughnut',

						data: {
							labels: periods,
							datasets: [{
								backgroundColor: colors,
								data: data,
							}]
						},

						options: {
							cutout: '55%',
							borderWidth: 0,
							aspectRatio: 4 / 3,
							layout: {
								padding: 100
							},
							plugins: {
								legend: false,
								tooltip: false,
								outlabels: {
									text: '%l %p',
									color: 'white',
									padding: {
										top: 9,
										right: 10,
										bottom: 6,
										left: 10
									},
									length: 80,
									font: {
										resizable: true,
										lineHeight: 1,
										minSize: 14,
										maxSize: 20
									}
								}
							}
						}
					})
				{/literal}
			</script>
			<a href="{$whitepaper.url}" class="btn btn-primary btn-sm ml-4 px-5">
				{$whitepaper.section_icon}
			</a>
		</div>
</section>