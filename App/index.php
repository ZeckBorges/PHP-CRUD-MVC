<!DOCTYPE html>
<html>
<head>
    <title>Barra de Navegação</title>
    <style>
        /* Estilos CSS */
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin-right: 10px;
        }

        li a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
        }

        li a:hover {
            background-color: #555;
        }

        form {
            margin-top: 20px;
            /*text-align: center;*/
        }

        input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
            margin-right: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/produtos">Lista de Produtos</a></li>
            <li><a href="/produto/cadastro">Adicionar Produto</a></li>
        </ul>
    </nav>

</body>
</html>

<?php

include 'Controller/ProdutoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//var_dump($_SERVER['REQUEST_URI']);

    switch ($url) {

        case '/home':
            ProdutoController::index();
        break;

        case '/produtos':
            ProdutoController::list();
            break;

        case '/produto/cadastro':
            ProdutoController::cad();
            break;
        
        case '/produto/edit':
            ProdutoController::edit();
            break;
            
        case '/produto/form/save':
            ProdutoController::save();
            break;
        
        case '/produto/delete':
            ProdutoController::delete();
            break;
        
        default:
            echo "Erro 404";
            break;
    }
?>



