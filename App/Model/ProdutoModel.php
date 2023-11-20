<?php

class ProdutoModel
{

    public $id_produto, $nome, $descricao, $preco, $plataforma, $categoria, $quantidade, $tipo;

    public $rows;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO(); 

        if(empty($this->id_produto))
        {
            $dao->insert($this);

        } else {

            $dao->update($this); // Como existe um id, passando o model para ser atualizado.
        }        
    }

    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';
        
        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel(); // Operador Ternário

    }

    public function delete(int $id)
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}