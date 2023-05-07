<?php 
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        }else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    function tampar() {
        $this->tampada = true; //$this significa o objeto que chamou, no caso o $c1
    }
    function destampar() {
        $this->tampada = false;
    }
}
