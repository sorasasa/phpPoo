<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
//atributos
    private $ligado;
    private $volume;
    private $tocando;
//metodos especiais
    public function __construct(){ 
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setLigado($ligado){
        $this-> ligado = $ligado;
    }
    private function setVolume($volume){
        $this-> volume = $volume;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
//implementação dos metodos abstratos
    public function ligar(){
        $this-> setLigado(true); //quando chamar uma dessas funçoes 
    }
    public function desligar(){
        $this-> setLigado(false);
    }
    public function abrirMenu(){
        echo "<h3>---------MENU---------</h3>";
        echo "<br/>Está ligado? : " . ($this->getLigado() ? "SIM":"NÃO"); //operador ternário fica em (), da uma lida nas documentaçoes
        echo "<br/>Está tocando? : " . ($this->getTocando() ? "SIM":"NÃO"); //vai responder uma dessas quando tiver sido chamado
        echo "<br/>Volume: " . $this->getVolume(); //quando chamado vai mostrar..
        for ($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|"; //adiconar mais uma barrinha
        }
        echo "<br/>";
    }
    public function fecharMenu(){
        echo "<br/>Fechando menu...";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 10); //apremder quando e qual usar entre get e set
        }else{
            echo "<p>ERRO! não posso aumentar o volume</p>";
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }else{
            echo "<p>ERRO! não posso diminuir o volume</p>";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){ //se tiver ligado e volume for maior q 0
            $this->setVolume(0); //o 0 fica dentro do parametro pra substuir o valor da variavel definida
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setvolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())) { //se tiver ligado e NÃO estiver tocando 
            $this-> setTocando(true); //vai definit tocando como true e vai apertar o play
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false); //vai definir como false e pausar 
        }
    }


}