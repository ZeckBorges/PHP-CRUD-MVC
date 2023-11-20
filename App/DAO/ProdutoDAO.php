<?php

class ProdutoDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=estoque";

        try {
            $this->conexao = new PDO($dsn, 'root', '2468');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Conexão estabelecida com sucesso
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }


    public function insert(ProdutoModel $model)
    {
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare
        $sql = "INSERT INTO produto (nome, descricao, preco, plataforma, categoria, quantidade, tipo) VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->descricao);
            $stmt->bindValue(3, $model->preco);
            $stmt->bindValue(4, $model->plataforma);
            $stmt->bindValue(5, $model->categoria);
            $stmt->bindValue(6, $model->quantidade);
            $stmt->bindValue(7, $model->tipo);


            // Executamos a consulta preparada.
            $stmt->execute();
            echo "Inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro no banco de dados: " . $e->getMessage();
        }
    }

    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, descricao=?, preco=?, plataforma=?, categoria=? WHERE id_produto=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->plataforma);
        $stmt->bindValue(5, $model->categoria);
        $stmt->bindValue(6, $model->id_produto);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM produto WHERE id_produto = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id_produto = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}