<?php
	include('../includes/overall.inc.php');

	session_name($adminSessionName);
	session_start();
	
    $quality = 75;
    $width = 150;				//Ширина изображения
    $height = 40;				//Высота изображения
    $font_size = 19;   			//Размер шрифта
    $count = 6;			//Количество символов, которые нужно набрать
    $fon_let_amount = 10;		//Количество символов на фоне
    $font = GLOBAL_ROOT.'/admin/images/ARIALBD.TTF';	//Путь к шрифту
 
                                                
    $letters = array("a","b","c","d","e","f","g","h","j","k","l",
                     "m","n","p","q","r","s","t","u","v","w","x","v","z",
                     '0','1','2','3','4','5','6','7','8','9');		//набор символов

    $colors = array(0,29,75,113,155,205,125,360,310,218);	//цвета
 
    $image = imagecreatetruecolor($width,$height);	//создаем изображение				
    $fon = imagecolorallocate($image,255,255,255);	//создаем фон
    imagefill($image,0,0,$fon);						//заливаем изображение фоном
 
      for($j=0; $j<$fon_let_amount; $j++) {                // Заливка фона случайными точками
       for($i=0; $i<($height*$width)/600; $i++) {
         // Генерируем случайный цвет
         $color = imagecolorallocatealpha($image,
                  $digital_data[rand(0,count($digital_data)-1)],
                  $digital_data[rand(0,count($digital_data)-1)],
                  $digital_data[rand(0,count($digital_data)-1)],
                  rand(10,30));
         // Выводим случайную точку
         imagesetpixel($image, rand(0,$width), rand(0,$height), $color);
       }
    }

  
     
    for($i=0;$i < $count;$i++)		//то же самое для основных букв
    {
       $color = imagecolorallocatealpha($image,$colors[rand(0,sizeof($colors)-1)],
       		$colors[rand(0,sizeof($colors)-1)],
       		$colors[rand(0,sizeof($colors)+1)],rand(10,40)); 
       $letter = $letters[rand(0,sizeof($letters)-1)];       // Генерируем случайный символ
       $size = rand($font_size*1-1,$font_size*1+1);
       $x = ($i+1)*$font_size + rand(1,5);		//даем каждому символу случайное смещение
       $y = (($height*1)/2) + rand(10,5);							
       $text[] = $letter;   						//запоминаем код
       imagettftext($image,$size,rand(0,15),$x,$y,$color,$font,$letter);
    }
     
    $text = implode("",$text);					//переводим код в строку





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