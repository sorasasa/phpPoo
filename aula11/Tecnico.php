<?php
require_once 'Aluno.php';
final class Tecnico extends Aluno{
    
    private $registroProfissonal;

    public function praticar(){
        echo '<p>Estou praticando</p>';
    }
    public function getRegistroProfissonal(){
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($registroProfissonal){
        $this->registroProfissional = $registroProfissonal;
    }
}