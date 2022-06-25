<?php

class UsuarioServico {
    public function getUsuarioLogado(): Usuario|null
    {
        return Usuario::new('Camareira');
    }

    public function buscarUsuario(string $email, string $senha): Usuario
    {
        //Buscar usuario do Banco...
        return Usuario::new('Camareira');
    }

    public function logarUsuario(string $email, string $senha): Usuario {
        //Validar dados...

        $usuario = $this->buscarUsuario($email, $senha);

        $_SESSION['usuario_logado'] = $usuario;
        //Salva o usuario logado na sessão do navegador

        return $usuario;
    }

    public function menuDoUsuario(Usuario $usuario): array {

        $pastaMenus = RAIZ_PROJETO . '/Telas/Componentes/Menu';

        $itensMenu = [];
        foreach (['Usuario', get_class($usuario)] as $item) {
            include "$pastaMenus/ItensMenu$item.php";
            $itensMenu = array_merge($itensMenu, $itensMenuLocal);
        }

        return $itensMenu;
    }
}