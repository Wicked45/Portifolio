<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/stylesCLR.css">
</head>
<body>
    <?php require_once("auxFiles/headerLogo.php") ?>
    <div class="container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br>
            <p>Esqueceu a senha? <a href="recuperar.php">recupere aqui</a>.</p>
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</p>
    </div>
</body>
</html>
