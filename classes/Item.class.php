<?php

require(__DIR__ . '/../interfaces/item.interface.php');

class Item implements iItem
{

    public function setDados(array $dados): bool
    {
    }

    public function getDados(int $id_item): array
    {
    }
}
