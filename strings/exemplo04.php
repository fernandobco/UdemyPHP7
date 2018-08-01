<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 16:06
 */
$frase="A repetição é mãe da retenção.";
$palavra="mãe";
$q=strpos($frase,$palavra);
/*
 * Extrair do conteúdo da variável $frase os primeiros 17 caracteres partindo da posição 0, ou seja, da primeira letra.
 */
$texto=substr($frase, 0,$q);
var_dump($q);
echo "<br/>";
var_dump($texto);
echo "<br/>";
$texto2=substr($frase, $q+strlen($palavra),strlen($frase));
var_dump($texto2);


?>