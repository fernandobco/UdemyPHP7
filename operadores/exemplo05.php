<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 22:30
 */

$a=50;
$b=60 ;
echo "<strong>O valor de A é $a</strong>";
echo "<br/>";
echo "<strong>O valor de B é $b</strong>";
echo "<br/><br/>";
echo "Se A for maior que B, retorna 1";
echo "<br/>";
echo "Se A for igual à B, retorna 0";
echo "<br/>";
echo "Se A for menor que B, retorna -1";
echo "<br/>";
echo "Resultado: ";
var_dump($a<=>$b); // retorna 1, se $a é maior que $b; retorna 0, se $a é igual a $b; Retorna -1, $a é menor que $b

?>