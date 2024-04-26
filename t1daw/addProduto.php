<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="/styles/produto.css">
</head>
<body>
    <?php require_once("auxFiles/headerMenu.php") ?>
    <div class="container">
        <h2>Cadastro de produto</h2>
        <form action="#" method="POST">
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" required><br>

            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao" rows="4" required></textarea><br>

            <label for="caracteristicas">Características:</label><br>
            <textarea id="caracteristicas" name="caracteristicas" rows="4" required></textarea><br>

            <label for="imagens">Imagens:</label><br>
            <input type="file" id="imagens" name="imagens" accept="image/*" multiple>
            <label for="imagens">Escolher</label>
            <span id="arquivo_escolhido"></span><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
