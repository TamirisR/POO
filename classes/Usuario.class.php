<?php

require(__DIR__ . '/../interfaces/usuario.interface.php');
require_once(__DIR__ . '/abstratas/TipoPessoa.class.php');

class Usuario extends TipoPessoa implements iUsuario
{

    public function setDados(array $dados): bool
    {
    }

    public function getDados(int $id_usuario): array
    {
    }
}
