<?php 

abstract class Banco {
    protected $saldo;
    protected $limite_saque;
    protected $juros;

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($sacar);
    abstract protected function Depositar($depositar);

}

class Itau extends Banco {

    public function Sacar($sacar) {
        $this->saldo -= $sacar;
        echo "<hr> Sacou: " . $sacar;
    }

    public function Depositar($depositar) {
        $this->saldo += $depositar;
        echo "<hr> Depositou : " . $depositar;
    }
}


$itau = new Itau;
$itau->setSaldo(1000);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: " . $itau->getSaldo();
$itau->Depositar(400);
echo "<hr> Saldo: " . $itau->getSaldo();

