<ol class="list-group list-group-flush">
    <?php
    if (!isset($servico)) $servico = new UsuarioServico();
    $itensMenu = $servico->menuDoUsuario($usuarioLogado);

    foreach ($itensMenu as $key => $value)
        echo "
        <li class='list-group-item px-0'>
            <a class='btn btn-outline-info w-100 bg-gradient text-start text-dark'
               href='" . URL_PROJETO . "/Telas/$key.php'>$value</a>
        </li>";
    ?>
</ol>
