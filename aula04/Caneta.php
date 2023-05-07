<?php

class Caneta {
    private $modelo; //var é como se fosse public como padrao
    private $ponta;
    private $cor;
    private $tampada;

    public function __construct($m,$c,$p){ //modelo construtor
       $this -> modelo = $m; //ou $this->setModelo($m)
       $this -> cor = $c;
       $this -> ponta = $p;
       $this -> tampar();
    }
    public function tampar(){
        $this -> tampada = true;
    }
    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($m){
        $this -> modelo = $m;
    }
    public function getPonta(){
        return $this -> ponta;
    }
    public function setPonta($p){
        $this -> ponta = $p;
    }
}