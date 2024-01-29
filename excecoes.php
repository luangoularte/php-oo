<?php 

//Message(), Code(), File(), Line()

class Newsletter {
    public function cadstrarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é invalído", 1);
        } else {
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newsletter = new Newsletter();

try {
    $newsletter->cadstrarEmail("contato@");
} catch(Exception $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Código: " . $e->getCode() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}