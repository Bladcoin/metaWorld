<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

function smarty_modifier_format_date($string, $format = 'r')
{
    if($string != '') {
        return date($format, strtotime($string));
    } else {
        return;
    }
}

/* vim: set expandtab: */

?>