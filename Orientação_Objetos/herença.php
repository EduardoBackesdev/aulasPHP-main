<?php

    // Inicio classe pai

class Veiculo{

    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function resumo (){
        return 'Numero da placa: '. $this->placa .', e a cor é ' .$this->cor;
    }
    
    function acelerar(){
        echo 'Acelerando';
    } 
}

    // Fim classe pai








    // Inicio classes filhos

class Carro extends Veiculo{
    public $arCondicionado = null;

    function __set($atributo, $valor){
        $this->$atributo = $valor;

        return $valor;
    }
}

    // Final classes filhos


    


?>