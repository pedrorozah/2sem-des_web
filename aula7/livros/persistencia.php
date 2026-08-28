<?php

//Crio uma constante para guardar o caminho do diretório.
define("DIR_ARQUIVOS", "arquivos");

function salvarDados(array $dados, string $nomeArquivo)
{
    //Converte arrays para string
    $json = json_encode($dados, JSON_PRETTY_PRINT);
    //Escreve dados de uma string em um arquivo.
    file_put_contents(DIR_ARQUIVOS . "/" . $nomeArquivo, $json);
}

function buscarDados(string $nomeArquivo): array
{
    $dados = [];

    //Verifica se existe o arquivo no diretório
    if (file_exists(DIR_ARQUIVOS . "/" . $nomeArquivo)) {
        //Pega o texto do arquivo e armazena como string na variável
        $json = file_get_contents(DIR_ARQUIVOS . "/" . $nomeArquivo);
        //Pega a string e formnata em array
        $dados = json_decode($json, true);
    }
    return $dados;
}

function excluirDados(array $dados) {
    
}
