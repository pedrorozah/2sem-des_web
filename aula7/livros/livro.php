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

$msgErro = "";
$livros = buscarDados("livros.json");

// Verifica se o usuário enviou o formulário
if (isset($_POST["titulo"])) {
    // descarta espaços em branco no início e no final da string
    $titulo = trim($_POST["titulo"]);
    $genero = trim($_POST["genero"]);
    $qtdPag = trim($_POST["qtd-paginas"]);
    $autor  = trim($_POST["autor"]);
    $erros = array();


    // Validação dos dados
    if (empty($titulo)) {
        array_push($erros, "Informe o título do livro");
    }

    if (empty($genero)) {
        array_push($erros, "Informe o gênero do livro");
    }

    if (empty($qtdPag)) {
        array_push($erros, "Informe a quantidade de páginas");
    }

    if (empty($autor)) {
        array_push($erros, "Informe o autor do livro");
    }

    if (count($erros) == 0) {
        $livro = [
            "id" => uniqid(),
            "titulo" => $titulo,
            "autor" => $autor,
            "genero" => $genero,
            "qtd-paginas" => $qtdPag
        ];

        array_push($livros, $livro);

        salvarDados($livros, "livros.json");
        //Não permite reenvio do formulário, sem dados duplicados.
        header("location: livro.php");
    } else {
        $i = 0;
        foreach ($erros as $erro) {
            if ($i != 0) {
                $erro[0] = strtolower($erro[0]);
                $erros[$i] = ", " . $erro;
            }
            $i++;
        }

        $msgErro = implode($erros);
    }
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
    <!-- <form action="" method="post" onsubmit="return validar()"> -->

    <form action="" method="post">
        <label for="titulo">
            <span>Título</span>
            <input type="text" name="titulo" id="titulo">
        </label>
        <br><br>
        <label for="genero">
            <span>Gênero</span>
            <select name="genero" id="genero">
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
            <input type="number" name="qtd-paginas" id="qtd-paginas" min="1">
        </label>
        <br><br>

        <label for="autor">
            <span>Autor</span>
            <input type="text" name="autor" id="autor">
        </label>
        <br><br>

        <button type="submit">Enviar</button>
        <br><br>
    </form>

    <div id="divErro" style="color: red;">
        <?= $msgErro ?>
    </div>

    <!-- tabela de registros -->

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Quantidade de páginas</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($livros as $l): ?>

                <tr>
                    <td>
                        <?= $l["id"] ?>
                    </td>
                    <td>
                        <?php
                        echo $l["titulo"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $l["autor"];
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
                        <a href="excluir_livro.php?id=<?php echo $l["id"] ?>" onclick="confirm('Deseja confirmar a exclusão do livro?')">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="validacao.js"></script>
</body>



</html>