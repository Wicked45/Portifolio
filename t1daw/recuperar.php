<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="styles/stylesCLR.css">
</head>
<body>
    <?php require_once("auxFiles/headerLogo.php") ?>
    <div class="container">
        <h2>Recuperar Senha</h2>
        <p>Informe o e-mail associado à sua conta e enviaremos instruções para a recuperação da senha.</p>
        <form action="#" method="POST">
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Enviar Instruções">
        </form>
    </div>
</body>
</html>
