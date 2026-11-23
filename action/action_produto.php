<?php
//phpinfo();
//exit;
include('../vendor/autoload.php');
use App\Produto;
$opcao = $_GET['opcao'];
$produto = new Produto();
switch($opcao){
    case 'cadastrar':
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->cadastrar();
        header('location: ../view/produto/listar.php');
    break;
    case 'alterar':
        $produto = Produto::buscarPorId($_GET['id']);
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->alterar();
        header('location: ../view/produto/listar.php');
    break;
    case 'excluir':
        $produto->id = $_GET['id'];
        $produto->excluir();
        header('location: ../view/produto/listar.php');
    break;    
}