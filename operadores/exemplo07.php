<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 23:17
 */
$a=10;
echo "Pós-incremento --> Primeiro ele usa o valor da variável e depois ele soma +1<br/>";
echo $a++;
echo "<br/>";
echo $a;

echo "<br/><br/>";

$a=10;
echo "Pré-incremento --> Primeiro ele soma +1 e depois ele usa o valor da variável<br/>";
echo ++$a;
echo "<br/>";
echo $a;
?>