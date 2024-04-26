<?php 
  
  if ($nome_pagina == 'index.php'){
    $total_paginas = ceil(count($vProdutos) / 3);
  } else {
    $total_paginas = ceil(count($vProdutosMeu) / 3);
  }

  // Garantir que a página atual está dentro dos limites
  $pagina = max(min($pagina, $total_paginas), 1);

  // Calcular o índice do próximo e do anterior
  $pagina_proxima = min($pagina + 1, $total_paginas);
  $pagina_anterior = max($pagina - 1, 1);

  echo "<a href='{$_SERVER['PHP_SELF']}?pagina=$pagina_anterior'><button>&lt;</button></a>";
  echo "<span>$pagina de <a href='{$_SERVER['PHP_SELF']}?pagina=$total_paginas'>$total_paginas</a></span>";
  echo "<a href='{$_SERVER['PHP_SELF']}?pagina=$pagina_proxima'><button>&gt;</button></a>";
?>