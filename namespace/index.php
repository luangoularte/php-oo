<?php 

require_once "classes/Produto.php";
require_once "models/Produto.php";

use classes\Produto as ProdutoModel;

$produto = new \models\Produto;
$produto->mostrarDetalhes();

$produto2 = new ProdutoModel();
$produto2->mostrarDetalhes();