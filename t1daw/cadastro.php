<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles/stylesCLR.css">
</head>
<body>
    <?php require_once("auxFiles/headerLogo.php") ?>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="#" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required><br>

            <label for="confirmar_senha">Confirmar a senha:</label><br>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
