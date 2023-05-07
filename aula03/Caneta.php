<?php 
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        }else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    public function tampar() {
        $this->tampada = true; //$this significa o objeto que chamou, no caso o $c1
    }
    public function destampar() {
        $this->tampada = false;
    }
}
