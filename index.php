<?php

$title = 'Bem vindo(a)!';

include_once RAIZ_PROJETO . '/Telas/PrefixoPagina.php';
?>

<div class="container pt-5">
    <div class="container mt-5 p-4 bg-gradient border border-secondary">
        <?php
        include RAIZ_PROJETO . '/Telas/Componentes/Menu/Menu.php';
        ?>
    </div>
</div>

<?php
include_once RAIZ_PROJETO . '/Telas/SufixoPagina.php';