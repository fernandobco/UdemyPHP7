<?php
/**
 * Created by PhpStorm.
 * User: Suporte
 * Date: 23/07/2018
 * Time: 09:58
 */
class carro{
    private $modelo;
    private $motor;
    private $ano;
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function getMotor(){
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor=$motor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function SetAno($ano){
        $this->ano=$ano;
    }
    public function exibe(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}
$car=new carro();
$car->SetModelo("Gol GTI");
$car->SetMotor("1.6");
$car->SetAno("2017");
$carros=$car->exibe();
//var_dump($car);
foreach ($carros as $key=>$value){
    echo $key.": ".$value."<br/>";
}