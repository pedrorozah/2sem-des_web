<?php

include_once("Connection.php");

$conn = Connection::getConnection();

// receber id do time
$id = 0;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

// validar se o id existe
if ($id == 0 || !is_numeric($id)) {
    echo "Valor de ID inválido, redirecionando para página principal...<br>";
    echo "<a href='listar.php'>Voltar</a>";
    // para a requisição
    exit;
}

// excluir do time do banco de dados
$sql = "DELETE FROM times WHERE id = " . $id;

// converte string para sql
$stmt = $conn->prepare($sql);

// executa no banco
$stmt->execute();

// redirecionar para a listagem
header("location: listar.php");
