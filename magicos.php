<?php 


class Pessoa4 {
    private $dados = array();

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa4();
$pessoa->nome = "Luan";
$pessoa->idade = 20;
$pessoa->sexo = "M";

echo $pessoa();  //invoke //tostring
