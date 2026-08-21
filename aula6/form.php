<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Futebol</h2>
    <!-- padrão do formulário é enviar por GET e chamar a mesma página -->
    <form action="formulario_exec.php" method="POST">

        <label for="ntime">
            <span>Nome do time</span>
            <br>
            <input type="text" placeholder="Nome do time" name="nome">
        </label>
        <br><br>
        <label for="ctime">
            <span>Cidade do time</span>
            <br>
            <input type="text" placeholder="Cidade do time" name="cidade">
        </label>
        <br><br>

        <button>Enviar</button>
    </form>
</body>
</html>