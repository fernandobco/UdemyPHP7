<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 14:26
 */
$pessoa=array('nome'=>'João','idade'=>20);
foreach ($pessoa as &$value){
    if(gettype($value)==='integer') $value+=10;
    echo $value."<br/>";
}

print_r($pessoa);



?>