<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 18:25
 */

$condicao=true;
while($condicao){
    $numero=rand(1,10);
    if($numero===3){
        echo "TRÊS!!!";
        $condicao=false;
    }
    echo $numero." ";
}

?>