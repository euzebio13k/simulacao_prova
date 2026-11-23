<?php
namespace App;
use PDO;
class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public function cadastrar(){
        return (new DataBase('produto'))->insert([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade
        ]);
    }
    public function alterar(){
        return (new DataBase('produto'))->update('id='.$this->id,[
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade
        ]);
    }
    public function excluir(){
        return (new DataBase('produto'))->delete('id='.$this->id);
    }
    public static function listar($where = null, $order = null, $limit = null){
        return (new DataBase('produto'))->select($where = null, $order = null, $limit = null)->fetchAll(PDO::FETCH_CLASS,self::class);
    }
    public static function buscarPorId($id){
        return (new DataBase('produto'))->select('id='.$id)->fetchObject(self::class);
    }
}