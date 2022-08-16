<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty make_array modifier plugin
 *
 * Type:     modifier<br>
 * Name:     make_array<br>
 * Purpose:  make an array out of a delimited string. Default delimiter is ,
 * @param string
 * @param string
 * @return array
 */
function smarty_modifier_make_array($string, $delimiter = ',')
{
    return explode($delimiter, $string);
}

?>