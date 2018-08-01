<?php
/**
 * Created by PhpStorm.
 * User: Suporte
 * Date: 23/07/2018
 * Time: 09:28
 */
require_once "bibliotecas.php";
class Pessoa{
    public $nome; //atributo
    public $sobrenome;
    private $nomeCompleto;
    public $endereço;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $telefone;
    public $email;
    public $dataNasc;
    private $dataNow;
    private $idade;
    private $senha;
    public function falar(){//metodo
        return "O meu nome é ".$this->nome;
    }

    private function setNomeCompleto(){
        $this->nomeCompleto=$this->nome." ".$this->sobrenome;
    }
    public function getNomeCompleto(){
        $this->setNomeCompleto();
        return $this->nomeCompleto;
    }

    private function setDataNow(){
        $this->dataNow=date("d/m/Y");
    }

    public function getDataNow(){
        $this->setDataNow();
        return $this->dataNow;
    }
    private function setIdade(){
        $anoA=desmembraData($this->dataNow);
        $anoN=desmembraData($this->dataNasc);
        $this->idade=$anoA['ano']-$anoN['ano'];
    }
    public function  getIdade(){
        $this->setIdade();
        return $this->idade;
    }
    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getSenha(){
        return $this->senha;
    }
}
$classe=new Pessoa();
$classe->nome="Fernando";
$classe->sobrenome="Bragança Camargo de Oliveira";
$classe->endereco="Rua Bárbara Heliodora, 18 ap 102 Ed. D. Pedro II";
$classe->bairro="Itapoã";
$classe->cidade="Vila Velha";
$classe->cep="29101-520";
$classe->dataNasc="19/07/1977";
echo $classe->falar();
echo "<br/>";
echo $classe->getNomeCompleto();
echo "<br/>";
echo $classe->getDataNow();
echo "<br/>";
echo $classe->getIdade();
echo "<br/>";
$classe->setSenha("gvt12345");
echo $classe->getSenha();

?>