<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Vizualizacao {
    private $espectador;
    private $filme;

 //nao esquece do construct
    public function __construct($espectador, $filme){
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);//vai definir uma view em setViews //Video.php
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1); //Gafanhoto.php

    }
//funcoes
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorce($porce){ //porcentagem
        $nova = 0;
        if($porce <= 20){
            $nova = 3;
        }elseif($porce <= 50){
            $nova = 5;
        }elseif($porce <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
//getters
    public function getEspectador(){
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
//setters
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }

}