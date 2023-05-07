<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
//atributos
    private $especialidade;
    private $salario;
//metodos
    public function receberAumento($aum){
        $this->salario += $aum; //soma o valor de $aum ao $salario
    }
//metodos especiais
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    
}