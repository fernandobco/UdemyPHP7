<?php
/**
 * Created by PhpStorm.
 * User: Suporte
 * Date: 23/07/2018
 * Time: 13:24
 */

//Ajusta o fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');

//Converte data do formato d/m/Y para Y/m/d para usar com a função strtotime().
function inverteData($data){
return $data=substr($data,6)."/".substr($data,3,2)."/".$data=substr($data,0,2);

}

//Cria um array com índices dia, mes e ano
function desmembraData($data){
    $st=strtotime(inverteData($data));
    $dia=date("d",$st);
    $mes=date("m",$st);
    $ano=date("Y",$st);
    return array(
        'dia'=>$dia,
        'mes'=>$mes,
        'ano'=>$ano
    );
}

?>