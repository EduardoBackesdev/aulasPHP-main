<?php

class pessoa{
    public $nome = null;

    function __construct(){
        echo 'objeto instanciado';
    }
}





$pessoa = new pessoa();

echo $pessoa->nome;


?>