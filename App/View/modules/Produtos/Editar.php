<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet", href="../../../Style/produto.css">
</head>
<body>
    <fieldset>
        <legend>Editar Produto</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id_produto ?>" name="id" />
            
            <label for="nome">Produto:</label>
            <input type="text" value="<?= $model->nome?>" name="nome" id="nome" required><br>

            <label for="descricao">Descrição:</label>
            <input type="text" value="<?= $model->descricao?>" name="descricao" id="descricao" required><br>

            <label for="preco">Preço:</label>
            <input type="number" placeholder="R$0,00" step="0.01" min="0" value="<?= $model->preco?>" name="preco" id="preco" required><br>

            <label for="plataforma">Plataforma:</label>
            <input type="text" value="<?= $model->plataforma?>" name="plataforma" id="plataforma" required><br>

            <label for="categoria">Categoria:</label>
            <input type="text" value="<?= $model->categoria?>" name="categoria" id="categoria" required><br>

            <label for="quantidade">Quantidade:</label>
            <input type="text" value="<?= $model->quantidade?>" name="quantidade" id="quantidade" required><br>

            <label for="tipo">Genêro:</label>
            <input type="text" value="<?= $model->tipo?>" name="tipo" id="tipo" required><br>
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>