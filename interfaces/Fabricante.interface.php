<?php

interface iFabricante
{

    public function setDados(array $dados): bool;
    public function getDados(int $id_fabricante): array;
}
