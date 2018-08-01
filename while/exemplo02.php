<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 18:30
 */
$total=150;
$desconto=0.9;
do{
    $total*=$desconto;
}while($total>100);
echo $total;


?>