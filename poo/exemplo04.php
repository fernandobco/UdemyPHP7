<?php
/**
 * Created by PhpStorm.
 * User: Suporte
 * Date: 24/07/2018
 * Time: 10:50
 */
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    public function __construct($a,$b,$c)
    {
        $this->logradouro=$a;
        $this->numero=$b;
        $this->cidade=$c;
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        //var_dump("DESTRUIR");
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }
}
$meuendereço=new Endereco("Rua Bárbara Heliodora","18","Vila Velha");
//var_dump($meuendereço);
echo "<br/>";
echo $meuendereço;
?>