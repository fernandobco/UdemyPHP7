<?php
    /**
    * Created by PhpStorm.
    * User: Suporte
    * Date: 20/07/2018
    * Time: 11:01
    */
    echo "As variáveis são divididas em 3 grupos: Básica, Composta e Especiais.<br/>";
    echo "Grupo das variáveis Básicas<br/>";
    echo "As variáveis Básicas podem assumir os seguintes tipos: String, Número Inteiro, Número Ponto flutuante e Boleano.<br/>";

    echo "<br/><strong>Strings</strong><br/>";
    echo "As strings representam todos os caracteres alfanuméricos: letras, números, símbolos, caracteres especiais.<br/>";
    echo "Todos podem ser armazenados em uma variável do tipo string.<br/>";
    echo "Números no formato de string não podem ser usados para efetuar cálculos.<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$nome="Fernando";<br/>';
    echo '$sobrenome="Bragança Camargo de Oliveira";<br/>';
    echo '$nomeCompleto=$nome." ".$sobrenome;<br/>';
    echo 'echo "Nome: $nome&lt;br/&gt;";<br/>';
    echo 'echo "Sobrenome: $sobrenome&lt;br/&gt;";<br/>';
    echo 'echo "Nome Completo: $nomeCompleto&lt;br/&gt;";<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo "Ele foi usado para gerar o resultado abaixo:<br/><br/>";
    $nome="Fernando"; //String
    $sobrenome="Bragança Camargo de Oliveira"; //String
    $nomeCompleto=$nome." ".$sobrenome; //Concatenando Strings
    echo "Nome: $nome<br/>"; //Exibe o nome na tela
    echo "Sobrenome: $sobrenome<br/>"; //Exibe o sobrenome na tela
    echo "Nome Completo: $nomeCompleto<br/><br/>"; //Exibe o nome completo que é o resultado da concatenação do nome + um espaço em branco + o sobrenome
    echo "var_dump: <br/>";
    var_dump($nome);
    echo "<br/>";
    var_dump($sobrenome);
    echo "<br/>";
    var_dump($nomeCompleto);
    echo "<br/>";

    echo "<br/><strong>Inteiro</strong><br/>";
    echo "Os números inteiros são todos os números que podem ser usados para cálculo e não possuem a parte decimal<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$anoAtual=2018;<br/>';
    echo '$anoNascimento=1977;<br/>';
    echo '$idade=$anoAtual-$anoNascimento;<br/>';
    echo 'echo "A minha idade é ".$idade." anos&lt;br/&gt;&lt;br/&gt;";<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo "Ele foi usado para gerar o resultado abaixo:<br/><br/>";
    $anoAtual=2018; //Número Inteiro
    $anoNascimento=1977; //Número Inteiro
    $idade=$anoAtual-$anoNascimento;
    echo "A minha idade é ".$idade." anos.<br/><br/>";
    echo "var_dump: <br/>";
    var_dump($anoAtual);
    echo "<br/>";
    var_dump($anoNascimento);
    echo "<br/>";
    var_dump($idade);
    echo "<br/>";

    echo "<br/><strong>Ponto flutuante</strong><br/>";
    echo "Os números de ponto flutuante são aqueles que possuem casas decimais e também podem ser usados para cálculo.<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$salario=1567.65;<br/>'; //Número Ponto flutuante
    echo 'echo "Salário: $salario&lt;br/&gt;&lt;br/&gt;";<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo "Ele foi usado para gerar o resultado abaixo:<br/><br/>";
    $salario=1567.65; //Número Ponto flutuante
    echo "Salário: $salario<br/><br/>";
    echo "var_dump: <br/>";
    var_dump($salario);
    echo "<br/>";

    echo "<br/><strong>Boleano</strong><br/>";
    echo "Variáveis boleanas são usadas para representar os estados lógicos verdadeiro(true) ou falso(false).<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$bloqueado=false;<br/>'; //Boleano
    echo 'echo "Bloqueado: $bloqueado&lt;br/&gt;&lt;br/&gt;";<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo "Ele foi usado para gerar o resultado abaixo:<br/><br/>";
    $bloqueado=false; //Boleano
    echo "Bloqueado: $bloqueado<br/><br/>";
    echo "var_dump: <br/>";
    var_dump($bloqueado);
    echo "<br/>";

    echo "<br/><br/>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br/>";
    echo "Grupo das variáveis Compostas<br/>";
    echo "As variáveis Compostas podem asumir os seguintes tipos: Array, Objeto.<br/><br/>";
    echo "<br/><strong>Array</strong><br/>";
    echo "Array's são variáveis compostas que podem armazenar vários conteúdos, inclusive de tipos diferentes.<br/>";
    echo "É como se fosse uma grande caixa que você usa para transportar informação.<br/>";
    //echo "Exemplo:<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$frutas=array("abacaxi","laranja","manga");<br/>';
    echo 'echo $frutas[0]."  ";<br/>';
    echo 'echo $frutas[1]."  ";<br/>';
    echo 'echo $frutas[2]."  ";<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo 'Ele foi usado para gerar o resultado exibido abaixo:<br/><br/>';
    $frutas=array("abacaxi","laranja","manga");
    echo $frutas[0]."  ";
    echo $frutas[1]."  ";
    echo $frutas[2]."  ";
    echo "<br/><br/>";
    echo "var_dump: <br/>";
    var_dump($frutas);
    echo "<br/>";

    echo "<br/><strong>Objeto</strong><br/>";
    echo "";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$nascimento= new DateTime();';
    echo "<br/><br/>";
    echo "</code>";
    echo "</pre>";
    echo 'Ele foi usado para gerar o resultado exibido abaixo:<br/><br/>';
    $nascimento= new DateTime();
    echo "var_dump: <br/>";
    var_dump($nascimento);
    echo "<br/>";
    echo "<br/><br/>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br/>";
    echo "Grupo das variáveis Especiais<br/>";
    echo "As variáveis Especiais pode assumir os seguintes tipos: NULL e Resource<br/>";
    echo "<br/><strong>NULL</strong><br/>";
    echo "As variáveis quando possuem tipo NULL não existem na memoria do servidor.<br/>";
    echo "Não confundir com vazio. Uma variavel vazia existe na memoria do servidor mas está sem nenhum conteúdo.<br/>";
    echo "Observe o trecho de código:<br/><br/>";
    echo "<pre>";
    echo "<code>";
    echo '$nulo=NULL;<br/>'; //cria uma variavel NULL
    echo '$vazio="";<br/>'; //Cria uma variavel vazia
    echo 'echo $nulo;<br/>';
    echo 'echo $vazio;<br/><br/>';
    echo "</code>";
    echo "</pre>";
    echo 'Ele foi usado para gerar o resultado exibido abaixo:<br/><br/>';
    $nulo=NULL;
    $vazio="";
    echo $nulo;
    echo "<br/>";
    echo $vazio;
    echo "<br/>";
    echo 'Observe que não foi gerado nenhuma saída porque a variável $nulo não está alocada na memória do servidor.<br/>';
    echo 'E a variável $vazio está alocada na memória, mas não possui nenhum conteúdo para poder exibir.<br/>';
    echo "var_dump: <br/>";
    var_dump($nulo);
    echo "<br/>";
    var_dump($vazio);
    echo "<br/>";

    echo "<br/><strong>Resource</strong><br/>";
    echo "";
    echo "Observe o trecho de código:<br/><br/>";
    $arquivo=fopen("tiposegrupos.php","r");
    echo "var_dump: ";
    var_dump($arquivo);
?>