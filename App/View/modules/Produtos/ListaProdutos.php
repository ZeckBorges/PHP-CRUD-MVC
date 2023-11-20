<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>

    <link rel="stylesheet", href="../../../Style/listaprodutos.css">
</head>
<body>

    <table>
        <tr>
            
            
            <th>Produto</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Plataforma</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>

            
            <td><?= $item->nome ?></td>
            <td><?= $item->descricao ?></td>
            <td>R$<?= number_format($item->preco, 2, ",",".") ?></td>
            <td><?= $item->plataforma ?></td>
            <td>
                <a href="/produto/edit?id=<?= $item->id_produto ?>">editar</a>
            </td>
            <td>
                <a href="/produto/delete?id=<?= $item->id_produto ?>">X</a>
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