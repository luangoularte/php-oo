<?php

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


    function Logar() {
        if ($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso";
        } else {
            echo "Não logado";
        }


    }
}

$logar = new Login("teste@teste.com", "123456", "Lucas");


$logar->Logar();

echo "<br>";
echo $logar->getEmail() . "<br>";
echo $logar->getSenha() . "<br>";
echo $logar->getNome();