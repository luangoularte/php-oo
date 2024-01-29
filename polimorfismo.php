<?php 

class Animal {

    public function Andar() {
        echo "O animal andou";
    }
}

class Cavalo extends Animal {
    public function Andar() {
        echo "O cavalo correu";
    }
}

$cavalo = new Cavalo;
$cavalo->Andar();
