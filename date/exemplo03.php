<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 19:41
 */
date_default_timezone_set('America/Sao_Paulo');  //Define o fuso horário
setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese"); // Altera as configurações de data e hora para o formato brasileiro
echo strftime("%A, %d/%m/%Y"); //Exibe a data e a hora no formato especificado
echo "<br/>";
echo "<br/>";
echo strftime("%a, %d/%m/%y");
echo "<br/>";
echo "<br/>";
$ts=strtotime("1977-07-19");
echo strftime("%a, %d/%m/%Y",$ts);
echo "<br/>";
echo "<br/>";
echo "Hoje é o ".strftime("%j")."º dia do ano de ".strftime("%Y");
echo "<br/>";
echo "<br/>";
echo date_default_timezone_get(); //Exibe o fuso horário atual
echo "<br/>";
echo strftime("%d/%b/%y");
echo "<br/>";
echo "<br/>";
echo "Hoje é ".strftime("%A, %d de %B de %Y");
echo "<br/>";
echo "<br/>";
echo "Hoje é ".strftime("%a, %d/%b/%y H");
?>