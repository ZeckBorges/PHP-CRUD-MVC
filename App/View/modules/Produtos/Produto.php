<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            
            background-color: #f9f9f9;
            padding: 0px;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>

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
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>