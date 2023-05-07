<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
//atributos
    private $titulo;
    private $autor; 
    private $totPaginas;
    private $pagAtual; //todo livro começa com 0
    private $aberto; //e começa fechado
    private $leitor; //o leitor é uma Pessoa 
//metodos 
    public function detalhes(){
        echo "<hr/>Livro " .$this->titulo. " escrito por " .$this->autor;
        echo "<br/> Páginas: " .$this->totPaginas. " atual ". $this->pagAtual;
        echo "<br/>Sendo lido por: " . $this->leitor->getNome(); //pra converter pra string adicone o nome definido em Pessoa.php
    }
//metodos especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
// metodos abstratos que sao obrigatorios quando faz implementação
    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancarPag(){
        $this->pagAtual ++;
    }
    public function voltarPag(){
        $this->voltarPag --;
    }
    

}