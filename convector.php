<?php 
error_reporting(E_ERROR);


$val = $_GET['val']; // Присваение к переменной val значение из get запроса
$from = $_GET['from'];


$json = file_get_contents('http://cbu.uz/ru/arkhiv-kursov-valyut/json/'); // тут файл file_get_contents, метод полулчения содержимого. Он видит только содержимое. И присваивает в переменную. В данном случае в $json.
$json = json_decode($json,true); // json_decode - расшифровывает строку с json-ом в массив, тру - преоброзовать в массив. Т.к. по дефолту приходит объектом.

	// print_r($json);

foreach ($json as $key => $value) { // Цикл по массиву нашему получившемуся 
	$kursy[$value['Ccy']] = $value['Rate']; // создаём новый массив $kursy 
}

print_r($kursy);


$result = $val * $kursy[$from];

?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Конвертер валют</title>
 </head>
 <body>

 <form>
 	<input type="number" placeholder="" style="width:80px" value="" name="val">

 	<select name="from">
 		<option>USD</option>
 		<option>RUB</option>

 
 	</select>
 	<button>Гоу</button>
 </form>
<?php
if($val){
	echo("Из ".number_format($val)." $from выходит ".number_format($result)." сумм");
}
?>



 </body>
 </html>