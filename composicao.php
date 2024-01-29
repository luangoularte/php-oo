<?php 


class Pessoa3 {
    public function atribuiNome($nome) {
        return "O nome da pessoa é " . $nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa3();
        $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa->atribuiNome($this->nome);
    }

}

$this->pessoa = new Pessoa3;

$exibe = new Exibe("Luan");
$exibe->exibeNome();