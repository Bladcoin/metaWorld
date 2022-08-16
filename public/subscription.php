<?php
	include('../includes/overall.inc.php');

	session_name($visitorSessionName);
	session_start();
	
	$count   = 4;
	$font    = GLOBAL_ROOT.'/admin/images/arlrdbd.ttf';
	$quality = 75;
	$iWidth  = $count * 24;
	$iHeight = 36;
	$cWidth  = $iWidth / $count;
	$text    = '';
	
	$image   = imagecreate($iWidth, $iHeight);
	$bgcolor = imagecolorallocate($image, 255, 255, 255);
	for($i = 0; $i < $count; $i++){
		$char  = rand(0, 9);
		$text .= $char;
		$size  = rand(14, 24);
		$angle = rand(-20, 20);
		$posX  = $cWidth * $i + 3 + rand(0, $cWidth*(1 - $size / 24));
		$posY  = rand(30 * $size / 24, 30);
		$red   = rand(0, 255);
		$green = rand(0, 255);
		$blue  = rand(0, min(510 - $red - $green, 255));
		$color = imagecolorallocate($image, $red, $green, $blue);
		imagettftext($image, $size, $angle, $posX, $posY, $color, $font, $char);
	}

	if (function_exists("imagegif")) {
		header("Content-type: image/gif");
		imagegif($image);
	} elseif (function_exists("imagejpeg")) {
		header("Content-type: image/jpeg");
		imagejpeg($image, "", $quality);
	} elseif (function_exists("imagepng")) {
		header("Content-type: image/png");
		imagepng($image);
	} else {
		die("No image support in this PHP server");
	}
	imagedestroy($image);

	$_SESSION['captcha'] = md5($text);
?>