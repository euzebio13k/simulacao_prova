<?php

use App\Produto;
include('../../vendor/autoload.php');
$id = $_GET['id'];
$produto = Produto::buscarPorId($id);
?>
<form method="post" action="../../action/action_produto.php?opcao=alterar&id=<?= $id ?>">
    Nome: <input name="nome" type="text" value="<?= $produto->nome ?>"><br>
    Descrição: <input name="descricao" type="text" value="<?= $produto->descricao ?>"><br>
    Preço: <input name="preco" type="text" value="<?= $produto->preco ?>"><br>
    Quantidade: <input name="quantidade" type="number" value="<?= $produto->quantidade ?>"><br>
    <button type="submit">Editar</button>
</form>