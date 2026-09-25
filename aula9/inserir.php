<?php

include_once("Connection.php");
$conn = Connection::getConnection();


// Receber o nome e cidade do time (GET)
$cidade = "";
$nome = "";

if (isset($_GET['nome'], $_GET['cidade'])) {
    $cidade = $_GET['cidade'];
    $nome = $_GET['nome'];
}

// validar os dados
if ($nome == "" || $cidade == "") {
    echo "Valores inválidos, informe os parâmetros...<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
}

// inserir o time no banco de dados
$sql = "INSERT INTO times (nome, cidade) VALUES ('$nome', '$cidade')";
$stmt = $conn->prepare($sql);
$stmt->execute();

// redirecionar para tela principal
header("location: listar.php");
