<?php


    class Funcionario{

        public $nome = null;
        public $telefone = null;
        public $numeroFilhos = null;

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }



        function __get($atributo){
            return $this->$atributo;
        }




        function resumo (){
            return 'Funcionario: ' . $this->__get('nome') . ' Telefone: '.$this->__get('telefone'). ' Numero de filhos: '. $this->__get('numeroFilhos');
        }


        

    }



    $funcionario = new Funcionario();

    $funcionario->__set('nome', 'Eduardo');
    $funcionario-> __set('telefone', 54992093131);
    $funcionario-> __set('numeroFilhos', 0);


    echo $funcionario-> resumo();











?>