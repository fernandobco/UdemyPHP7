<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 21:52
 */
$a=55.0;
$b=55;
echo "<strong>O valor de A é $a</strong>";
echo "<br/>";
echo "<strong>O valor de B é $b</strong>";
echo "<br/><br/><br/>";
echo "A&gt;B --> A é maior que B? ";
var_dump($a>$b);
echo "<br/><br/>";
echo "A&lt;B --> A é menor que B? ";
var_dump($a<$b);
echo "<br/><br/>";
echo "A==B --> A é igual à B? Possuem o mesmo valor, mesmo que sejam de tipos diferentes? ";
var_dump($a==$b);
echo "<br/><br/>";
echo "A===B --> A é idêntico à B? Possuem o mesmo valor e tipo? ";
var_dump($a===$b);
echo "<br/><br/>";
echo "A!=B --> A é não é igual à B? Possuem o valor diferente, mesmo que os tipos sejam iguais? ";
var_dump($a!=$b);
echo "<br/><br/>";
echo "A!==B --> A não é identico a à B? Possuem o mesmo valor e tipo? ";
var_dump($a!==$b);
echo "<br/><br/>";
echo "A>=B --> A é maior ou igual à B? ";
var_dump($a>=$b);
echo "<br/><br/>";
echo "A<=B --> A é menor ou igual à B? ";
var_dump($a<=$b);
echo "<br/><br/>";
?>