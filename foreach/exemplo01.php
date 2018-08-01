<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 17:47
 */

$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
foreach ($meses as $index => $mes) {
    echo "Índice: ".$index."<br/>";
    echo "O mês é: ".$mes."<br/><br/>";
}
//unset($mes,$meses,$index);
echo "<br/><br/><br/><br/>";


foreach ($meses as $mes) {
    echo "O mês é: ".$mes."<br/>";
}

?>