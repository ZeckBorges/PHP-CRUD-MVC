<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../../Style/home.css">

    </head>
    <body>
        <h1>Site</h1>

        <table>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Plataforma</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
                <tr>
                    <td><?= $item->nome ?></td>
                    <td><?= $item->descricao ?></td>
                    <td>R$<?= number_format($item->preco, 2, ",",".") ?></td>
                    <td><?= $item->plataforma ?></td>
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