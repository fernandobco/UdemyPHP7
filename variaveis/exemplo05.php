<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 20:54
 */
$nome="Gláucio";

function teste(){
    global $nome;
    echo $nome;
}
function teste2(){
    $nome="João";
    echo "<br/>".$nome." agora no teste2.";
}
teste();
teste2();
?>