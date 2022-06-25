<?php
        const URL_PROJETO = 'http://localhost/MSOO';
        const RAIZ_PROJETO = 'C:/xampp/htdocs/MSOO';

        $breadcrumb = [
            '../index' => 'Página inicial',
            'Usuario/Cadastro' => 'Cadastro de usuário'
        ];
        //Declara um array com os caminhos das telas como ídices e os nomes como valores, para usar no menu de navegação

    include_once RAIZ_PROJETO . '/Telas/PrefixoPagina.php';
    include 'C:/xampp/htdocs/MSOO/Telas/Componentes/Head.php';
?>
    
    <h2 class="text-center pt-5 text-light">
    Cadastro Usuario
</h2>

<form method="POST" class="container-sm mt-5">
    <div class="input-group mb-3 shadow">
        <label class="input-group-text">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="input-group mb-3 shadow">
        <label class="input-group-text">Email</label>
        <input class="form-control" type="email" name="email">
    </div>

    <div class="input-group mb-3 shadow">
        <label class="input-group-text">Senha</label>
        <input class="form-control" type="password" name="senha">
    </div>

    <div class="d-flex mb-5">
        <button type="submit" class="hover-teal w-100 shadow btn bg-gradient">Enviar</button>
    </div>
    <?php

    if ($_POST) {//Verifica se foram enviados dados do formulário via POST

        //Validar dados...

        echo 'Usuário cadastrado com sucesso!';
    }
    ?>
</form>

<?php
include_once RAIZ_PROJETO . '/Telas/SufixoPagina.php';

?>
