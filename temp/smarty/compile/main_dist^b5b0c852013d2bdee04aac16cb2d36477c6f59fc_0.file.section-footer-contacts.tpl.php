<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 14:43:30
  from 'C:\xampp\htdocs\themes\dist\templates\section-footer-contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60af93f25a57a0_33086129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b0c852013d2bdee04aac16cb2d36477c6f59fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\themes\\dist\\templates\\section-footer-contacts.tpl',
      1 => 1621860080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af93f25a57a0_33086129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.fetch_section.php','function'=>'smarty_function_fetch_section',),1=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.social.php','function'=>'smarty_function_social',),3=>array('file'=>'C:\\xampp\\htdocs\\includes\\smarty\\plugins\\function.bracket_regex.php','function'=>'smarty_function_bracket_regex',),));
?>
<!-- FOOTER -->
<?php echo smarty_function_fetch_section(array('assign'=>'footer','section'=>957),$_smarty_tpl);?>

		<footer id="footer" class="text-center-sm">
			<div class="container">
				<div class="footer-content">
					<div class="footer-logo">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/index.html">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/img/logo-white.png">
						</a>
					</div>
					<div class="footer-feedback">
						<div class="col-md-4 p-h-15">
							<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['footer']->value['summary'],"<p>","<div>"),"</p>","</div>");?>

						</div>
						<div class="col-md-5 p-h-15">
							<?php echo $_smarty_tpl->tpl_vars['footer']->value['content'];?>

						</div>
						<div class="col-md-3 p-h-15 text-right-md">
							<span class="btn-def">
								<a href="javascript:;" data-src="#form_def" data-fancybox><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer']->value['dop'], ENT_QUOTES, 'UTF-8', true);?>
 <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer']->value['section_icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i></a>
							</span>
						</div>
					</div>
					<div class="footer-info-items">
						<figure>
							<div class="img-content">
								<i class="icm icm-phone-receiver"></i>
							</div>
							<div class="desc-content">
								<span class="title-text">Контактные номера:</span>
								<h5><?php echo htmlspecialchars(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['config']->value['phone'],'(',''),')',''),'-',' '), ENT_QUOTES, 'UTF-8', true);?>
</h5>
							</div>
						</figure>
						<figure>
							<div class="img-content">
								<i class="icm icm-envelope-shape"></i>
							</div>
							<div class="desc-content">
								<span class="title-text">E-mail:</span>
								<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['feedback_email'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
							</div>
						</figure>
						<figure>
							<div class="img-content">
								<i class="icm icm-placeholder-filled-point"></i>
							</div>
							<div class="desc-content">
								<span class="title-text">Адрес:</span>
								<h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="color-1">Открыть карту</a>
							</div>
						</figure>

					</div>

				</div>
			</div>
			<div class="copy-content">
				<div class="container clearfix">
					<div class="row">
						<div class="copyright col-md-4 p-v-10 p-h-15">
							<p>© <time id="copydate"></time> Copyright</p>
							<?php echo '<script'; ?>
>copydate.innerText = new Date().getFullYear()<?php echo '</script'; ?>
>
						</div>
						<div class="footer-soc col-md-4 p-h-15 text-center">
							<ul class="list">
								 <?php echo smarty_modifier_replace(smarty_function_social(array(),$_smarty_tpl),'<a',"<a href='".((string)$_smarty_tpl->tpl_vars['THEME_URL']->value)."/' target='_blank'");?>

							</ul>
						</div>
						<div class="dev col-md-4 hidden-xs p-h-15 hidden-sm p-v-10 text-right-md">
			  <?php echo smarty_function_bracket_regex(array('from'=>$_smarty_tpl->tpl_vars['footer']->value['content_two']),$_smarty_tpl);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['regex']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <p>

                <a href="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
" class="link" title="Создание и продвижение сайтов"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['content'],"<strong>","<em><span class='color-1'>"),"</strong>",'</em></span>');?>
</a>

              </p>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>

		</footer>
	</div>
	<!-- SCRIPTS -->
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/js/scripts.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['THEME_URL']->value, ENT_QUOTES, 'UTF-8', true);?>
/js/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVUinUZqQAIM1NfbavWbOKtsc3l-XE_ag" async defer><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
		window.onload = function(){

			var mapDef =  $("#map-canvas")[0];
	  	var mapDefDotsArray = [
	  		{
	  			icon: "img/icons/map-marker.png",
	  			coordinates: [41.34765, 69.354354343],
	  			description: "<div class='window-content align-center'><p>м. Львов, вул. Мирзо Улугбек, 317</p></div>"
	  		}
	  	]

		  function initialize(mapEl, dotsArray) {
		  	if( !mapEl )
		  		return;
		  	var map;
		    var mapOptions = {
		      zoom: 15,
		      zoomControl: true,
		      zoomControlOptions: {
		        style: google.maps.ZoomControlStyle.DEFAULT,
		        position: google.maps.ControlPosition.DEFAULT
		      },
		      center: new google.maps.LatLng(41.34765, 69.354354343)
		    };

		    map = new google.maps.Map(mapEl, mapOptions);
		    map.setOptions({
		      //styles: mapStyles,
		      disableDefaultUI: true
		    });

		  	for (var i = 0; i < dotsArray.length; i++) {
		  		var el = dotsArray[i];
			    var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(el.coordinates[0], el.coordinates[1]),
			      map: map,
			      icon: el.icon,
			      title: 'marker'
			    });

			    var infowindow = new google.maps.InfoWindow({
			      content: el.description
			    });

			    google.maps.event.addListener(marker, 'click', function() {
			      infowindow.open(map, marker);
			    });
		    }
		  }


	  	/*Инициализация карт*/
	  	initialize(mapDef, mapDefDotsArray);

	  }
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
