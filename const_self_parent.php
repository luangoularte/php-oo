<?php 

class Pessoa1 {
    const nome = "Luan";

    public function exibirNome() {
        echo self::nome;
    }
}

class Rodrigo extends Pessoa1 {
    const nome = "Oliveira";

    public function exibirNome() {
        echo self::nome;
        //echo parent::nome;
    }
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();