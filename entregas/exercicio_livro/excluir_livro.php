<?php

include_once("funcoes_persistencia.php");

if (isset($_GET['id'])) {
    //1- Rebeceber o ID do livro
    $idAlvo = $_GET['id'];

    //2- Buscar os livros existentes no arquivo JSON
    $livros = buscarDados("livros.json");

    //3- Encontrar o índice do livro a ser excluir
    //4- Executar a função para excluir do array
    //array_splice( , )
    $livros = excluirLivro($idAlvo, $livros);

    //5- Salvar os dados no arquivo JSON
    salvarDados($livros, "livros.json");

    //6- Redirecionar para o livros.php
    header('Location: livro.php');
    exit;
}
