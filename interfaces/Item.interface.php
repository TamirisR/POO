<?php

interface iItem
{

    public function setDados(array $dados): bool;
    public function getDados(int $id_item): array;
}
