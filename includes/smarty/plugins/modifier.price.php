<?php

function smarty_modifier_price($price)
{
	global $activeCurrency;
	return $price * $activeCurrency['course'] . ' ' . $activeCurrency['codeName'];
}

?>