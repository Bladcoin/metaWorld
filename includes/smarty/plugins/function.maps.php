<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							 @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_maps($params, &$smarty)
{
	global $config, $maps;
	$THEME_URL = fetch_getParam('turl', $params, NULL);
  $icon = fetch_getParam('icon', $params, NULL);
        // if(empty($THEME_URL)){
        //         $smarty->_trigger_fatal_error('maps: "TURL" must not be empty');
        //         return;
        // }
	$result = '';
	    

	
	if ($maps['maps_down'] == '1') {
    if($THEME_URL){
        if(!$icon){
          $icon = "/img/icons/map-marker.png";
        }
                $result = '
        <!-- Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=' . $maps['api_key'] . '"></script>
        <script type="text/javascript">
          window.onload = function(){

                        var mapDef =  $("#map-canvas")[0];
                var mapDefDotsArray = [
                        {
                                icon: "'.$THEME_URL.$icon.'",
                                coordinates: ['.$maps['lat'].', '.$maps['lng'].'],
                                description: "<div class=\'window-content align-center\'><p>'.$config['address'].'</p></div>"
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
                      center: new google.maps.LatLng('.$maps['lat'].', '.$maps['lng'].')
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
                              title: \'marker\'
                            });

                            var infowindow = new google.maps.InfoWindow({
                              content: el.description
                            });

                            google.maps.event.addListener(marker, \'click\', function() {
                              infowindow.open(map, marker);
                            });
                    }
                  }


                /*Инициализация карт*/
                initialize(mapDef, mapDefDotsArray);

          }   
        </script>  
        <!-- / Maps -->
        ';
      } else {
        $result = "
<!-- Maps -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=$maps[api_key]\"></script>
    <script type=\"text/javascript\">
    if (document.getElementById(\"map-canvas\")) {
    var map;

    function initialize() {

      var mapOptions = {
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      zoom: $maps[zoom],
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.DEFAULT,
        position: google.maps.ControlPosition.DEFAULT
      },
      panControl: true,
      panControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      },
      streetViewControl: false,
      scaleControl: false,
      overviewMapControl: false,
      center: new google.maps.LatLng($maps[lat], $maps[lng])
      };

      map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

      map.setOptions({
      disableDefaultUI: true
      });

      var transitLayer = new google.maps.TransitLayer();
      transitLayer.setMap(map);

      var bicyclingLayer = new google.maps.BicyclingLayer();
      bicyclingLayer.setMap(map);

      var infoContent = '<div class=\"window-content align-center\">' +
      '<p>$config[address]</p>' +
      '</div>';

      var infowindow = new google.maps.InfoWindow({
      content: infoContent
      });

      var icon = {
      path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
      anchor: new google.maps.Point(16.5, 51),
      fillColor: '$maps[fillColor]',
      fillOpacity: $maps[fillOpacity],
      strokeWeight: 0,
      scale: $maps[scale]
      };

      var marker = new google.maps.Marker({
      position: new google.maps.LatLng($maps[lat], $maps[lng]),
      map: map,
      title: 'marker'
      });

      google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    function checkResize() {
      var center = map.getCenter();
      google.maps.event.trigger(map, 'resize');
      map.setCenter(center);
    }

    window.onresize = checkResize;
    }
  </script>
        ";
      }

	}

	return $result;
}

function smarty_help_function_maps() {
	?>
	<h3><?php echo __('What does this tag do?') ?></h3>
	<p><?php echo __('Displays the yandex metrika code.') ?></p>
	<h3><?php echo __('How do I use it?') ?></h3>
	<p><?php echo __('Just insert the tag into your template like:') ?> <code>{maps}</code></p>
	<h3><?php echo __('What parameters does it take?') ?></h3>
	<ul>
		<li><em>(<?php echo __('None') ?>)</em></li>
	</ul>
	<?php
}

function smarty_about_function_maps() {
}
?>