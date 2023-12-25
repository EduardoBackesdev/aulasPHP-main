<?php

class Exemplo {

    public static $nome = 'Eduardo';


    public static function saudacao (){
        echo 'ola';
    }



}


echo Exemplo::$nome;
Exemplo::saudacao();


?>