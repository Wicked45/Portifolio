<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoEscambo</title>
    <link rel="stylesheet" href="styles/catalogo.css">
</head>
<body>
    <?php require_once("auxFiles/headerMenu.php") ?>
    <div class="catalogo">
        <div class="produtos">
            <?php require_once("auxFiles/catalogo.php") ?>
        </div>
        <div class="navegacao">
            <?php require_once("auxFiles/paginacao.php") ?>
        </div>
    </div>
</body>
</html>
