{fetch_section assign=whitepaper section=1000 }
<section class="section section-chart d-flex flex-column justify-content-center">
	<div class="container">
		<div class="chart">
			<video src="/video/water.mp4" autoplay muted loop></video>
			<canvas id="chart"></canvas>
		</div>
		<script>
			new Chart('chart', {
				type: 'doughnut',
				data: {
					labels: [
						'ONE',
						'TWO',
						'THREE',
						'FOUR',
						'FIVE',
						'SIX',
						'SEVEN',
						'EIGHT',
						'NINE',
					],
					datasets: [{
						backgroundColor: [
							'#FF3784',
							'#36A2EB',
							'#4BC0C0',
							'#F77825',
							'#9966FF',
							'#00A8C6',
							'#379F7A',
							'#CC2738',
							'#8B628A',
						],
						data: [11, 12, 13, 14, 15, 16, 17, 18, 19],
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
		</script>
		<a href="{$whitepaper.url}" class="btn btn-primary btn-sm ml-4 px-5">
			{$whitepaper.section_icon}
		</a>
	</div>
</section>