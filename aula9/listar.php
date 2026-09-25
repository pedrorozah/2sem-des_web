<?php

include_once("Connection.php");

$conn = Connection::getConnection();

// teste da conexão com o banco, se retornar PDO object é porque a conexão foi realizada com sucesso
// print_r($conn);

$sql = "SELECT * FROM times";
$stmt = $conn->prepare($sql);
$stmt->execute();

// fetchAll retorna uma lista de arrays associativos nesse caso;
$times = $stmt->fetchAll();

print_r($times);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de times</title>
</head>

<body>

    <!-- Cabeçalho -->
    <h2>Listagem de times</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
        </tr>

        <!-- com foreach -->
        <?php foreach ($times as $time) : ?>
            <tr>
                <td><?= $time["id"] ?></td>
                <td><?= $time["nome"] ?></td>
                <td><?= $time["cidade"] ?></td>
                <td><a href="excluir.php?id=<?= $time["id"] ?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <a href="inserir.php?nome=Flamengo&cidade=Rio">Inserir</a>

</body>

</html>