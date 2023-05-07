<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
//atributos
    private $matri;
    private $curso;
//metodos
    public function cancelarMatr(){
        echo '<p>Matricula será cancelada</p>';
    }
//metodos especiais
    public function getMatri(){
        return $this->matri;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatri($matri){
        $this->matri = $matri;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }

}