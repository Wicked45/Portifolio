<div class="topo">
    <a href="../index.php"> <img class="logo" src="img/Captura de tela 2024-04-16 105326.png" alt="EcoEscambo"> </a>
    <nav class="menu">
        <ul>
            <li><a href="meusProdutos.php">Meus produtos</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="dropdown">
                <a href="#">Filtros &#9662;</a>
                <?php
                    $nome_pagina = basename($_SERVER['PHP_SELF']);
                    if ($nome_pagina == 'index.php') {
                        echo '<div class="dropdown-conteudo">';
                        echo '<a href="#">Todos</a>';
                        echo '<a href="#">Meus Interesses</a>';
                        echo '<a href="#">Sem interesse</a>';
                        echo '</div>';
                    }
                    else if ($nome_pagina == 'meusProdutos.php') {
                        echo '<div class="dropdown-conteudo">';
                        echo '<a href="#">Todos</a>';
                        echo '<a href="#">Com interesse</a>';
                        echo '<a href="#">Sem interesse</a>';
                        echo '</div>';
                    }
                ?>
            </li>
        </ul>
    </nav>
</div>