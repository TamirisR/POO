<?php

interface iUsuario
{

    public function setDados(array $dados): bool;
    public function getDados(int $id_usuario): array;
}
