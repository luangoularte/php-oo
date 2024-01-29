<?php

class Login1 {
    public static $user;

    public static function verificaLogin() {
        echo "O usuário " . self::$user . " está logado!"; 
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}


Login1::$user = "Luan";
Login1::verificaLogin();

$login = new Login1();
$login->sairSistema();