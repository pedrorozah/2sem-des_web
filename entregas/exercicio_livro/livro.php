<?php

include_once("funcoes_persistencia.php");

// Verifica se pasta existe, se não cria.
if (!is_dir(DIR_JSON)) {
    mkdir(DIR_JSON, 0777, true);
}

// verifica se arquivo json existe, se não cria.
if (!file_exists(DIR_JSON . "/livros.json")) {
    file_put_contents(DIR_JSON . "/livros.json", "[]");
}

$livros = buscarDados("livros.json");

// Verifica se o usuário enviou o formulário
if (isset($_POST["titulo"])) {
    $titulo = trim($_POST["titulo"]);
    $genero = trim($_POST["genero"]);
    $qtdPag = trim($_POST["qtd-paginas"]);

    $livro = [
        "id" => uniqid(),
        "titulo" => $titulo,
        "genero" => $genero,
        "qtd-paginas" => $qtdPag
    ];

    array_push($livros, $livro);

    salvarDados($livros, "livros.json");

    //Não permite reenvio do formulário, sem dados duplicados.
    header("location: livro.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante de Livros</title>
    <style>
        span {
            display: block;
        }
    </style>
</head>

<body>
    <!-- formulário -->
    <h3>Cadastro de livros</h3>
    <form action="" method="post">
        <label for="titulo">
            <span>Título</span>
            <input type="text" name="titulo">
        </label>
        <br><br>
        <label for="genero">
            <span>Gênero</span>
            <select name="genero">
                <option value="">---Selecione o gênero---</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </label>
        <br><br>
        <label for="qtd-paginas">
            <span>Quantidade de páginas</span>
            <input type="number" name="qtd-paginas">
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
    <!-- tabela de registros -->

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Gênero</th>
            <th>Quantidade de páginas</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($livros as $l): ?>

                <tr>
                    <td>
                        <?php
                        echo $l["id"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $l["titulo"];
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($l["genero"] == "D") {
                            echo "Drama";
                        } else if ($l["genero"] == "R") {
                            echo "Romance";
                        } else if ($l["genero"] == "F") {
                            echo "Ficção";
                        } else if ($l["genero"] == "O") {
                            echo "Outro";
                        } else {
                            echo "Unknow";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $l["qtd-paginas"];
                        ?>
                    </td>
                    <td>
                        <a href="excluir_livro.php?id=<?php echo $l["id"] ?>">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>