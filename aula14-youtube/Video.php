<?php
require_once 'AcoesVideo.php'; //encapsulamento junto com getter & setter
class Video implements AcoesVideo{ //sobrescrição
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){ //se informa somente 1 atributo fica assim (revise dps)
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function play(){ //polimorfismo
        $this->reproduzindo = true;
    }
    public function pause(){
        $this->reproduzindo = false;
    }
    public function like(){
        $this->curtidas ++;
    }
//getters
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function getViews(){
        return $this->views;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
//setters
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao){
        //atributo E parametro, sao diferentes
        $media = ($this->avaliacao + $avaliacao)/$this->views; //dividir a avaliação dada pela quantidade de views é a media
        $this->avaliacao = $media;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }


}