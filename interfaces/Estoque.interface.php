<?php

interface iEstoque
{

    public function setDados(array $dados): bool;
    public function getDados(int $id_estoque): array;
}
