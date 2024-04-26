<?php


include 'produto.php';

//retorna posição inicial do vetor de produtos para a pagina passada por parametro
function getPos($p)
{
    return 3 * $p - 3;
}

function printaProduto($prod)
{
    echo '<div class="coluna">';
    echo '<div class="card-produto">';
    echo "<img src=$prod->img alt='Produto' class ='img-prod'>";
    echo "<h3>$prod->produto</h3>";
    //echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>';
    echo '<button class="interesse">Tenho interesse</button>';
    echo '<div class="descricao">';
    echo "<p>$prod->descr</p>";
    echo '</div>';
    echo '</div>';
}

function printaProdutoMeu($prod)
{
    echo '<div class="produto">';
    echo "<img src=$prod->img alt='Produto'>";
    echo "<h2>$prod->produto</h2>";
    //echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>';
    echo '<div class="acoes">';
    echo '<button class="excluir">Excluir</button>';
    echo '<button class="editar">Editar</button>';
    echo '<a href="troca.php">';
    echo '<button class="troca">Ver interesses</button>';
    echo '</a>';
    echo '</div>';
    echo '<div class="descrica
    o">';
    echo "<p>$prod->descr</p>";
    echo '</div>';
    echo '</div>';
}


if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 1;
}

$pos = getPos($pagina);

$nome_pagina = basename($_SERVER['PHP_SELF']);
if ($nome_pagina == 'index.php') {
    for ($iPag = 0; $iPag < 3; $iPag++) {
        if (array_key_exists($pos, $vProdutos)) {
            printaProduto($vProdutos[$pos++]);
        }
    }
} else {
    for ($iPag = 0; $iPag < 3; $iPag++) {
        if (array_key_exists($pos, $vProdutosMeu)) {
            printaProdutoMeu($vProdutosMeu[$pos++]);
        }
    }
}
