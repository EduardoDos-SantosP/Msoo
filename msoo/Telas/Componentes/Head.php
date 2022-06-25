<?php

//Declara as contantes com os caminhos local e via host do projeto

include_once RAIZ_PROJETO . '/classes.php';

$servico = new UsuarioServico();
$usuarioLogado = $servico->getUsuarioLogado();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gerenciamento</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous"><!--CSS do Bootstrap-->
    <link
        href="<?php echo URL_PROJETO; ?>/Recursos/style.css"
        rel="stylesheet"><!--CSS próprio-->
</head>