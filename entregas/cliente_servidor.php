<?php
// adiciona o parâmetro get esperado no array campos_obrigatorio
$campos_obrigatorio = ['numInicial', 'razaoProgressao', 'qtdNum'];
$campos_faltando = [];

// Só processa se o formulário foi enviado (quando existem parâmetros GET)
if (!empty($_GET)) {

    // percorre cada name obrigatório
    foreach ($campos_obrigatorio as $campo) {
        // se a url não tem o parâmetro ou se o valor for string vazia
        if (!isset($_GET[$campo]) || trim($_GET[$campo]) === '') {
            $campos_faltando[] = $campo;
        }
    }

    if (empty($campos_faltando)) {
        echo "<p>Todos os parâmetros enviados!</p>";
        // if ternario, primeira parte é a condição, se for true, executa o que está depois do '?', se false o que está depois do ':';
        $numAtual = (int)$_GET['numInicial'];
        $razaoProgressao = (int)$_GET['razaoProgressao'];
        $qtdNum = (int)$_GET['qtdNum'];

        echo "<p>Progressão aritmética: ";
        for ($i = 0; $i < $qtdNum; $i++) {
            if ($i < $qtdNum - 1) {
                echo " {$numAtual},";
                $numAtual += $razaoProgressao;
            } else
                echo " {$numAtual}";
        }
        echo "</p>";
    } else {
        echo "<p style='color:red;'>Campos faltando preencher: " . implode(", ", $campos_faltando) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método GET</title>
</head>

<body>
    <form action="">
        <label for="numInicial">
            <span>Número inicial</span>
            <br>
            <input type="number" min="0" name="numInicial" placeholder="...">
        </label>

        <br>
        <label for="razaoProgressao">
            <span>Razão</span>
            <br>
            <input type="number" min="1" name="razaoProgressao" placeholder="...">
        </label>

        <br>
        <label for="qtdNum">
            <span>Quantidade de números</span>
            <br>
            <input type="number" min="1" name="qtdNum" placeholder="...">
        </label>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>