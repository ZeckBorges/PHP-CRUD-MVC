<?php


class ProdutoController 
{

    public static function index()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.
        
        $model = new ProdutoModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

        include 'View/modules/Produtos/Home.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }
    
    public static function list()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.
        
        $model = new ProdutoModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

        include 'View/modules/Produtos/ListaProdutos.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }

    public static function cad()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.
        $model = new ProdutoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Produtos/Produto.php'; // Include da View. Note que a variável $model está disponível na View.
    }

    public static function edit()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.
        $model = new ProdutoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']);

        include 'View/modules/Produtos/Editar.php'; // Include da View. Note que a variável $model está disponível na View.
    }

    public static function save()
    {
       include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

       //var_dump($_POST);

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $model = new ProdutoModel();

       $model->id_produto =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->descricao = $_POST['descricao'];
       $model->preco = $_POST['preco'];
       $model->plataforma = $_POST['plataforma'];
       $model->categoria = $_POST['categoria'];
       $model->quantidade = $_POST['quantidade'];
       $model->tipo = $_POST['tipo'];

       $model->save(); // chamando o método save da model.

       header("Location: /produtos"); // redirecionando o usuário para outra rota.
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

        var_dump(true);

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /produtos"); // redirecionando o usuário para outra rota.
    }

}