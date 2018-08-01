<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 20/07/2018
 * Time: 23:47
 */
echo "Observe o trecho de código:<br/>";
echo "<pre>";
echo "<code>";
echo '$nome="joão rangel";<br/>';
echo 'echo &lsquo;Este é o valor inicial recebido pela variável $nome: &rsquo;;<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "Agora estou usando a função strtoupper() para converter as letras em maiúscula: ";<br/>';
echo '$nome=strtoupper($nome);<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "Observe que a função strtoupper() não funciona para caracteres acentuados.";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "Removendo acentuação tudo funciona como deveria: ";<br/>';
echo '$nome="joao rangel";<br/>';
echo '$nome=strtoupper($nome);<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo &lsquo;Agora todos os caracteres da variável $nome estão em maiúscula, vamos usar a função strtolower() para converter todas as letras em minúscula: &rsquo;;<br/>';
echo '$nome=strtolower($nome);<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "Agora que o nome está todo em minúsculo, vamos colocar a primeira letra de todas as palavras que compoem o nome em maiúscula usando a função ucwords(): ";<br/>';
echo '$nome=ucwords($nome);<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "Se você quiser colocar apenas a primeira letra da frase em maiúscula use a função ucfirst(): ";<br/>';
echo '$nome=ucfirst(strtolower($nome));<br/>';
echo 'echo $nome;<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo 'echo "&lt;br/&gt;";<br/>';
echo "</code>";
echo "</pre>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Agora vamos ver o resultado da execução do trecho de código acima.";
echo "<br/>";
echo "<br/>";
echo "<br/>";
$nome="joão rangel";
echo 'Este é o valor inicial recebido pela variável $nome: ';
echo $nome;
echo "<br/>";
echo "<br/>";
echo 'Agora estou usando a função strtoupper() para converter as letras em maiúscula: ';
$nome=strtoupper($nome);
echo $nome;
echo "<br/>";
echo "Observe que a função strtoupper() não funciona para caracteres acentuados.";
echo "<br/>";
echo "Removendo acentuação tudo funciona como deveria: ";
$nome="joao rangel";
$nome=strtoupper($nome);
echo $nome;
echo "<br/>";
echo "<br/>";
echo 'Agora todos os caracteres da variável $nome estão em maiúscula, vamos usar a função strtolower() para converter todas as letras em minúscula: ';
$nome=strtolower($nome);
echo $nome;
echo "<br/>";
echo "<br/>";
echo "Agora que o nome está todo em minúsculo, vamos colocar a primeira letra de todas as palavras que compoem o nome em maiúscula usando a função ucwords(): ";
$nome=ucwords($nome);
echo $nome;
echo "<br/>";
echo "<br/>";
echo "Se você quiser colocar apenas a primeira letra da frase em maiúscula use a função ucfrist(): ";
$nome=ucfirst(strtolower($nome));
echo $nome;
echo "<br/>";
echo "<br/>";
?>