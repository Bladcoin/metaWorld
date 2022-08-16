<?php

function smarty_modifier_plural_form($n,$r1='',$r2='',$r3='')
{
	if(!$r1 || !$r2 || !$r3) return "Укажите слова в атрибутах функции. 1 голос, 2 голоса, 5 голосов";
	return $n%10==1&&$n%100!=11?$r1:($n%10>=2&&$n%10<=4&&($n%100<10||$n%100>=20)?$r2:$r3);
	// $tmp = substr($n,-1);
 //  if($tmp == 1) return $r1;
 //  if($tmp >= 2 && $tmp <= 4) return $r2;
 //  else return $r3;
}

?>
