<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 22:49
 */
$a=NULL;
$b="casa";
$c=3;
echo "O valor de A: ";
var_dump($a);
echo "<br/><br/>";
echo "O valor de B: ";
var_dump($b);
echo "<br/><br/>";
echo "O valor de C: ";
var_dump($c);
echo "<br/><br/>";
echo "Se A não for NULL, retorne A, senão, se B não for NULL, retorne B, senão, se C não for NULL retorne C";
echo "<br/><br/>";
echo "Resultado: ";
echo $a ?? $b ?? $c;
echo "<br/>";
echo "var_dump: ";
var_dump($a ?? $b ?? $c);

?>