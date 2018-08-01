<?php
/**
 * Created by PhpStorm.
 * User: fbco_
 * Date: 22/07/2018
 * Time: 09:05
 */
define("BANCO_DE_DADOS",[
        "127.0.0.1",
        "root",
        "password",
        "test"
]);
print_r(BANCO_DE_DADOS);
echo "<br/>Versão do PHP: ".PHP_VERSION;
echo "<br/>".DIRECTORY_SEPARATOR;
echo "<br/>".PHP_MAJOR_VERSION;
echo "<br/>".PHP_MINOR_VERSION;
echo "<br/>".PHP_RELEASE_VERSION;
echo "<br/>".PHP_VERSION_ID;
echo "<br/>".PHP_EXTRA_VERSION;
echo "<br/>".PHP_DEBUG;
echo "<br/>O tamanho máximo do nome de um arquivo (incluindo seus diretórios) suportado nesta versão do PHP: ".PHP_MAXPATHLEN;
echo "<br/>Sistema Operacional: ".PHP_OS;
echo "<br/>Família do Sistema Operacional: ".PHP_OS_FAMILY;
echo "<br/>O nome da Server API para esta compilação do PHP: ".PHP_SAPI;
echo "<br/>O simbolo correto de 'Fim de linha' para esta plataforma. Disponível a partir do PHP 5.0.2: ".PHP_EOL;
echo "<br/>O maior inteiro suportado nesta compilação do PHP. Geralmente int(2147483647). Disponível a partir do PHP 5.0.5: ".PHP_INT_MAX;
echo "<br/>O menor inteiro suportado nesta compilação do PHP. Geralmente int(-2147483648) em sistemas 32 bits e int(-9223372036854775808) em sistemas 64 bit. Disponível a partir do PHP 7.0.0: ".PHP_INT_MIN;
echo "<br/>O tamanho de um inteiro em bytes nesta compilação do PHP. Disponível a partir do PHP 5.0.5: ".PHP_INT_SIZE;
echo "<br/>Diretório padrão de INCLUDE: ".DEFAULT_INCLUDE_PATH;