<?php
interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($p); //tem q dizer a pagina
    public function avancarPag();
    public function voltarPag();
}