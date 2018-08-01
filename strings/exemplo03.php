<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 21/07/2018
 * Time: 16:02
 */
echo 'Valor inicial da variável $empresa: ';
$empresa="Hcode";
echo $empresa;
echo "<br/><br/><br/>";
echo 'A letra <strong>o</strong> do conteúdo da variável $empresa foi alterada para <strong>0</strong>. ';
echo "<br/>";
echo 'Houve também a alteração da letra <strong>e</strong> para <strong>3</strong>. Veja o resultado: ';
$empresa=str_replace("o","0",$empresa);
$empresa=str_replace("e","3",$empresa);
echo $empresa;



?>