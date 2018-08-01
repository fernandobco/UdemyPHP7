<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 23:30
 */
//$resultado=(10+3)/2;
//echo $resultado;
$resultado=(10+3)/2 > 5 && 10+5 < 3;
var_dump($resultado);

echo "<br/>";

$resultado=(10+3)/2 > 5 || 10+5 < 3;
var_dump($resultado);
?>