<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>

    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e1e1e1;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #dcdcdc;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        td[colspan="5"] {
            text-align: center;
        }

    </style>
</head>
<body>

    <table>
        <tr>
            
            <th>Id</th>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Plataforma</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>

            <td><?= $item->id_produto ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->descricao ?></td>
            <td>R$<?= number_format($item->preco, 2, ",",".") ?></td>
            <td><?= $item->plataforma ?></td>
            <td>
                <a href="/produto/form?id=<?= $item->id_produto ?>">editar</a>
            </td>
            <td>
                <a href="/funcionario/delete?id=<?= $item->id_produto ?>">X</a>
            </td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>