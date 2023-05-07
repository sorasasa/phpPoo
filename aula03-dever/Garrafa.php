<?php
class Garrafa {
    var $tamanho;
    var $agua;
    var $cor;
    var $tomar;

    function beber(){
        if ($this-> tomar) {
            echo 'glub glub glub';
        } else {
            echo 'boca seca';
        }
    }

    function hidratado(){
        $this-> tomar = true;
    }
    function desidratado(){
        $this-> tomar = false;
    }
}