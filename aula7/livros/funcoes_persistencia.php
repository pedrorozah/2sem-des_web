<?php

//Crio uma constante para guardar o caminho do diretório JSON.
define("DIR_JSON", "json");

// Função que salva as informações do livro no array no arquivo.
function salvarDados(array $dadosLivro, string $nomeArquivo)
{
    //Converte arrays para string
    $json = json_encode($dadosLivro, JSON_PRETTY_PRINT);
    //Escreve dados de uma string em um arquivo.
    file_put_contents(DIR_JSON . "/" . $nomeArquivo, $json);
}

// Função que carrega os dados já existentes no array ao abrir a página PHP
function buscarDados(string $nomeArquivo): array
{
    $dadosLivros = [];

    //Verifica se existe o arquivo no diretório
    if (file_exists(DIR_JSON . "/" . $nomeArquivo)) {
        //Pega o texto do arquivo e armazena como string na variável
        $json = file_get_contents(DIR_JSON . "/" . $nomeArquivo);
        //Pega a string e formnata em array se usar parametro true.
        $dadosLivros = json_decode($json, true);
    }
    return $dadosLivros;
}

function excluirLivro(string $idAlvo, array $livros): array
{
    for ($i = 0; $i < count($livros); $i++) {
        //3- Encontrar o índice do livro a ser excluir
        if ($livros[$i]["id"] == $idAlvo) {
            //4- Executar a função para excluir do array
            //array_splice( , ), == no array livros, a partir da posição tire 1 registro
            array_splice($livros, $i, 1);
        }
    }

    return $livros;
}
