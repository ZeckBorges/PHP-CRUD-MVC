<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../../Style/home.css">

    </head>
    <body>
        <h1>Site</h1>

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