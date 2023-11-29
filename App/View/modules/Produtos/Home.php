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

        <div class="produtos">
            <?php foreach($model->rows as $item): ?>
                <div class="produto">
                    <p><strong>Produto:</strong> <?= $item->nome ?></p>
                    <p><strong>Descrição:</strong> <?= $item->descricao ?></p>
                    <p><strong>Preço:</strong> R$<?= number_format($item->preco, 2, ",",".") ?></p>
                    <p><strong>Plataforma:</strong> <?= $item->plataforma ?></p>
                    <p>
                        <?php if ($item->quantidade > 0): ?>
                            <strong>Status:</strong> Disponível
                        <?php else: ?>
                            <strong>Status:</strong> Indisponível
                        <?php endif; ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>

            
            <?php if(count($model->rows) == 0): ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>

        </table>

        <script>
            const formPesquisa = document.getElementById('formPesquisa');
            const produtos = document.querySelectorAll('.produto');

            formPesquisa.addEventListener('submit', function(event) {
                event.preventDefault();
                const filtro = document.getElementById('inputFiltro').value.toUpperCase();

                produtos.forEach(produto => {
                    const camposProduto = produto.querySelectorAll('p');
                    let encontrouFiltro = false;

                    camposProduto.forEach(campo => {
                        const textoCampo = campo.textContent || campo.innerText;
                        if (textoCampo.toUpperCase().indexOf(filtro) > -1) {
                            encontrouFiltro = true;
                        }
                    });

                    if (encontrouFiltro) {
                        produto.style.display = '';
                    } else {
                        produto.style.display = 'none';
                    }
                });
            });
        </script>
    </body>
</html>