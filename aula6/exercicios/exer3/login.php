<!-- Desafio: crie um formulário que receba o login e a senha de um
usuário. Se o login informado for “ifpr” e a senha “tads”, exiba uma
mensagem na tela de “Bem vindo ao TADS!” e esconda o formulário.
Dica: a action do formulário deve chamar a mesma página. -->

<?php 
    $login = $_POST["user"];
    $senha = $_POST["pass"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Senha</title>

</head>
<body>
    <?php 
        if ($login == "ifpr" && $senha == "tads") {
            echo "<h1>Bem vindo ao TADS!</h1>";
            echo "<form action='' method='post' style='display: none;'>";
        } else
            echo "<form action='' method='post'>";
    ?>
        <label for="user">
            <span>Login</span>
            <input type="text" name="user">
        </label>

        <label for="pass">
            <span>Senha</span>
            <input type="password" name="pass">
        </label>
        <button>Enviar</button>
    </form>
</body>
</html>


