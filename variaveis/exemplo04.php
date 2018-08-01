<?php
$nome=(int)$_GET['a'];
//var_dump($nome);
$ip=$_SERVER['REMOTE_ADDR'];
$NArqu=$_SERVER['SCRIPT_NAME'];
echo $ip;
echo "<br/>";
echo $NArqu;
echo "<br/>";

?>