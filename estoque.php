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
    
        switch ($_SERVER['argv'][1]) {  

        case 'gravaUsuario':

            $this->gravaUsuario($objUsuario);
            break;

        case 'editaUsuario':

            $this->editaUsuario($objUsuario);
            break;				
        
        default:
            
            echo "\nERRO: Não existe a funcionalidade {$_SERVER['argv'][1]}\n";				
    }
    
}

public function editaUsuario($objUsuario){

    $dados = $this->tratarDados();

    $objUsuario->setDados($dados);

    if( $objUsuario->gravarDados() ){

        echo "\nUsuário editado com sucesso!\n";
    }

}

public function gravaUsuario($objUsuario){

    $dados = $this->tratarDados();

    $objUsuario->setDados($dados);

    if( $objUsuario->gravarDados() ){

        echo "\nUsuário gravado com sucesso!\n";
    }

}

public function tratarDados(){

    $args = explode( ',', $_SERVER['argv'][2]); 

    foreach ($args as $valor) {
        
        $arg = explode('=', $valor);

        $dados[$arg[0]] = $arg[1];
    }

    return $dados;
}

public function __destruct(){

    sleep(1);

    echo "\n\n--- FIM DO PROGRAMA ---\n\n";
}
}

new Main;