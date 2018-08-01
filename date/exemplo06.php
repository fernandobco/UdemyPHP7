<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 23:12
 */
$periodo= new DateInterval("P15D"); //Cria uma instancia da classe DateInterval chamada $periodo e define o valor de 15 dias

$dt= new DateTime();
$dtz=$dt->getTimezone();
echo $dtz->getName();
echo "<br/>";
$dt->setTimezone(new DateTimeZone('America/Sao_Paulo'));// Define o fuso horário usado
$dtz=$dt->getTimezone(); //Pega o fusohorário atual e armazena na variável $dtz
echo $dtz->getName(); //Exibe o fuso horário atual que está na variável $dtz
echo "<br/>";
echo $dt->format("d/m/Y H:i:s");
echo "<br/>";
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");
?>