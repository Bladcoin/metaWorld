<?php
/* Smarty version 3.1.34-dev-7, created on 2022-08-16 12:11:52
  from 'C:\xampp\htdocs\themes\dist\templates\components\chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62fb6d689c1713_49686482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf259ebb9fa49416cef8bfc870b7b05314df3b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\components\\chart.tpl',
      1 => 1660641734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fb6d689c1713_49686482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),));
echo smarty_function_fetch_section(array('assign'=>'whitepaper','section'=>1000),$_smarty_tpl);?>

<section class="section section-chart d-flex flex-column justify-content-center">
	<div class="container">
		<div class="chart">
			<video src="/video/water.mp4" autoplay muted loop></video>
			<canvas id="chart"></canvas>
		</div>
		<?php echo '<script'; ?>
>
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
		<?php echo '</script'; ?>
>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['whitepaper']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-primary btn-sm ml-4 px-5">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['whitepaper']->value['section_icon'], ENT_QUOTES, 'UTF-8', true);?>

		</a>
	</div>
</section><?php }
}
