<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    
    private $matricula;
    private $curso;

    public function pagarMensa(){
        echo "<p>Pagando mensalidade de <strong>$this->nome</strong></p>";
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }


}