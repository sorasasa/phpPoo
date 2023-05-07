<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
//atributos
    private $setor;
    private $trabalhando;
//metodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando; //inversor
    }
//metodos especiais
    public function getSetor(){
        return $this->setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }
    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }

}