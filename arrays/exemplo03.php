<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 18:54
 */
$pessoas=array();

array_push($pessoas,array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoas,array(
    'nome'=>'Glaucio',
    'idade'=>25
));
print_r($pessoas);
print_r($pessoas[0]['nome']);

?>