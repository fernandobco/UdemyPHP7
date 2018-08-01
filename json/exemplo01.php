<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 19:06
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
echo json_encode($pessoas);

?>