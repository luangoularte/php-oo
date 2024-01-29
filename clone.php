<?php 


class Pessoa2 {
    public $idade;

    public function __clone()
    {
        echo "Clonagem de objetos";
    }
}

$pessoa = new Pessoa2();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;
