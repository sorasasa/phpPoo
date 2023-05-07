<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{ //herança

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);//chamada ao construtor da superclasse
        $this->login = $login;
        $this->totAssistido = 0;
    }
//getter
    public function getLogin(){
        return $this->login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
//setter
    public function setLogin($login){
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }
//metodo
    public function assistirMaisUm(){
        $this->totAssistido ++;
    }

    
}