<?php 
require_once 'DataBase.class.php';
abstract class TipoPessoa extends DataBase{

    protected $id;
    protected $nome;
    public function __construct(){

		parent::__construct();
	}
}

