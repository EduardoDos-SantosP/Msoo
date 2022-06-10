<header>
    <div class="mb-5 border-bottom border-secondary bg-teal bg-gradient shadow">
        <div class="container-fluid d-flex align-items-center justify-content-between px-4 py-2">
            <h1 class="text-light">
                <a href="">Sistema de Gerenciamento</a>
            </h1>
            <nav>
                <?php
                $url = URL_PROJETO;
                $opcoesUsuario = ['Login', 'Cadastro'];
                foreach ($opcoesUsuario as $opcao) {
                    echo "
                <a class='btn bg-gradient hover-success shadow-sm' href='$url/Telas/Usuario/$opcao.php'>
                    $opcao
                </a>";
                }
                ?>
            </nav>
        </div>
    </div>
    <?php
    if (!isset($usuarioLogado)) //Verifica se não existe, ou a se a variável usuarioLogado armazena null
        exit('Cadastre-se ou faça login para acessar o sistema!');//Encerra o programa retornando a mensagem
    ?>
    <nav class="px-5">
        <?php
        if (isset($breadcrumb)) {//Verifica se existe a variável chamada breadcrumb
            echo '<ol class="breadcrumb my-0 px-3 py-2 shadow-sm">';

            $contador = 1;
            foreach ($breadcrumb as $key => $value) {
                $ativo = '';
                if ($contador === count($breadcrumb))//Verifica se é o último item do vetor
                    $ativo = ' active';

                echo "
                    <li class='breadcrumb-item$ativo'>
                        <a class='' href='" . URL_PROJETO . "/Telas/$key.php'>$value</a>
                    </li>";
                $contador++;
            }

            echo '</ol>';
        }
        ?>
    </nav>
</header>