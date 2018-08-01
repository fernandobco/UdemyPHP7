<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 13:45
 */
function ola($texto="mundo", $periodo="Bom dia"){
    return "Olá $texto! $periodo!<br/>";
}

echo ola();
echo "<br/>";
$frase=ola("Glaucio","Boa tarde");
echo $frase;
echo strlen($frase);

?>