<?php 

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}

class Carro extends Veiculo {
    public function liparLimpador(){
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Dando grau em 321";
    }

}


$carro = new Carro;
$carro->modelo = "911";
$carro->cor = "Prata";
$carro->ano = 2022;
$carro->Andar();
var_dump($carro);


$moto = new Moto;
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
$moto->darGrau();
var_dump($moto);