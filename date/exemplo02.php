<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 19:00
 */
//  echo strtotime("2011-09-11");
//$ts=strtotime("2001-09-11");
$ts=strtotime("+1 day");
echo date("l, d/m/Y",$ts);


?>