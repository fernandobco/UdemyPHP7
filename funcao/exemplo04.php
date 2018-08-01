<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 13:58
 */
function ola(){
    $argumentos=func_get_args();
    $qtde=func_num_args();
    echo "Nesta execução a função ola() recebeu $qtde parametros.<br/>";
    return $argumentos;
}
echo "<pre>";
var_dump(ola("Bom dia",10,true,11.3,date("D, d/m/Y")));
echo "</pre>";
?>