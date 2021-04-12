<?php

require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

class Main
{

    public function __construct()
    {

        echo "\n\n--- COMEÇO DO PROGRAMA ---\n\n";

        $objUsuario = new Usuario;
        $objFabricante = new Fabricante;
        $objEstoque = new Estoque;
        $objMovimentacao = new Movimentacao;
    }

    public function __destruct()
    {

        echo "\n\n--- FIM DO PROGRAMA ---\n\n";
    }
}

new Main;
