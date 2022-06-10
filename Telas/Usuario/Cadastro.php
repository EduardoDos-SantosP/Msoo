<!doctype html>
<html lang="pt-br">
    <?php
    include 'C:/xampp/htdocs/MSOO/Telas/Componentes/Head.php';
    ?>
    <body class="bg-gradient bg-info" style="height: 100vh">
        <?php
        $breadcrumb = [
            '../index' => 'Página inicial',
            'Usuario/Cadastro' => 'Cadastro de usuário'
        ];
        //Declara um array com os caminhos das telas como ídices e os nomes como valores, para usar no menu de navegação

        include 'C:/xampp/htdocs/MSOO/Telas/Componentes/Cabecalho.php';
        include 'C:/xampp/htdocs/MSOO/Telas/Usuario/CadastroConteudo.php';
        ?>
    </body>
</html>