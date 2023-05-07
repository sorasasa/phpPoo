<?php

//atributos
class ContaBanco{
    public $numConta;
    protected $tipo; //cc->150 cp->50
    private $nome;
    private $saldo;
    private $status;

//metodos
    public function abrirConta($t){ //declarar parametros
        $this -> setTipo($t);
        $this -> setStatus(true);
        if ($t =="CC") {
            $this-> saldo = 50;
        }else if ($t =="CP"){
            $this-> saldo = 150;
        }
    }
    public function fecharConta(){
        if ($this-> saldo > 0){
            echo "<p>essa conta tem dinheiro, nao pode fechar<p>";
        }else if ($this -> saldo < 0 ){
            echo "<p>essa conta está em debito, nao pode fechar<p>";
        }else {
            $this-> setStatus(false);
            echo "<p>Conta de ". $this->getNome()." fechada com sucesso</p>";
        }
    }
    public function depositar($v){ //?? uma variavel pra depositar
        if ($this-> status == true){
            $this-> saldo = $this->saldo + $v; // || setSaldo(getSaldo() + $v);
            echo "<p>Depósito de R$$v na conta de ". $this->getNome()."</p>";
        }else {
            echo "<p>impossivel depositar!</p>";
        }
    }
    public function sacar($v){//var pro Valor(dinheiro)
        if ($this->getStatus()) { //ou só (getStatus())
            if ($this -> saldo >= $v){
                $this -> saldo = $this-> saldo - $v; //setsaldo(getSaldo() - $v);
                echo "<p>Saque de R$$v autorizado na conta de ". $this->getNome() ."</p>";
            }else {
                echo "<p>saldo insuficiente</p>";
            }
        }else {
            echo "<p>impossivel sacar!<p/>";
        }
    }
    public function mensalidade(){
        if ($this-> tipo == "CC"){
            $v = 12;
        }else if ($this->tipo == "CP"){
            $v = 20;
        }
        if ($this-> status == true){ //(getStatus())
            if($this-> saldo > $v){
                $this-> saldo = $this->saldo - $v; //setSaldo(getSaldo() - $v);
                echo "<p>Mensalidade de R$$v debitada na conta de ".$this->getNome()."</p>";
            }else {
                echo "<p>saldo insuficiente</p>";
            }
        }
    }
//metodos especiais
    public function __construct(){
        $this-> status = false;
        $this-> saldo = 0;
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function getNumConta(){ ////////////////
        return $this->numConta;
    }
    public function setNumConta($numConta){ 
        $this -> numConta = $numConta;
    }
    public function getTipo(){////////////////////
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this-> tipo = $tipo;
    }
    public function getNome(){////////////////////
        return $this->nome;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function getSaldo(){//////////////////
        return $this -> saldo;
    }
    public function setSaldo($saldo){
        $this -> saldo = $saldo;
    }
    public function getStatus(){/////////////////
        return $this -> status; 
    }
    public function setStatus($status){
        $this -> status = $status;
    }
}
