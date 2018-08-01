<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 14:18
 */
function trocaValor(&$a){
    $a+=50;
    return $a;

}
$a=10;
echo $a;
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;


?>