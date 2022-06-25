<?php
const URL_PROJETO = 'http://localhost/MSOO';
const RAIZ_PROJETO = 'C:/xampp/htdocs/MSOO';
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

    if ($_POST) {//Verifica se foram enviados dados do formulário via POST

        $camposObrigatorios = ['email', 'senha'];
        foreach ($camposObrigatorios as $campo) {
            if (empty($_POST[$campo])) //Verifica se o campo obrigatorio não foi preenchido
                exit('Preencha corretamento o campo ' . $campo);//Termina o código mostrando a mensagem
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $servico = new UsuarioServico();
        $servico->logarUsuario($email, $senha);

        echo 'Usuário logado com sucesso!';
    }
    ?>

<?php
include_once RAIZ_PROJETO . '/Telas/SufixoPagina.php';