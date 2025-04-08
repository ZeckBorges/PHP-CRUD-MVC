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

    <form id="formPesquisa">
        <input id="inputFiltro" type="text" placeholder="Digite sua busca">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        <tr>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Plataforma</th>
            <th>Qdade</th>
            <th>Editar</th>
            
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr <?php if ($item->quantidade == 0): ?> style="background-color:red" <?php endif?>>
            <td><?= $item->nome ?></td>
            <td><?= $item->descricao ?></td>
            <td>R$<?= number_format($item->preco, 2, ",",".") ?></td>
            <td><?= $item->plataforma ?></td>
            <td> <?= $item->quantidade ?></a></td>
            <td>
                <a href="/produto/edit/<?= $item->id_produto ?>">editar</a>
            </td>
            <td hidden><?= $item->tipo?></td>
            <td hidden><?= $item->categoria?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>

    <script>
        const inputFiltro = document.getElementById('formPesquisa');

        inputFiltro.addEventListener('submit', function(event) {

            event.preventDefault();

            const filtro = document.getElementById('inputFiltro').value.toUpperCase();
            const tabela = document.querySelector('table');
            const linhas = tabela.getElementsByTagName('tr');

            for (let i = 1; i < linhas.length; i++) {
                const celulas = linhas[i].getElementsByTagName('td');
                
                let encontrouFiltro = false;
                for (let j = 0; j < celulas.length; j++) {
                    const textoCelula = celulas[j].textContent || celulas[j].innerText;
                    if (textoCelula.toUpperCase().indexOf(filtro) > -1) {
                        encontrouFiltro = true;
                        break;
                    }
                }

                if (encontrouFiltro) {
                    linhas[i].style.display = '';
                } else {
                    linhas[i].style.display = 'none';
                }
            }
        });
    </script>
    
</body>
</html>