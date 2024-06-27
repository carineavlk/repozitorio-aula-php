<?php 
   
   class Veículos {
        // Atributos
        public $nome;
        public $marca;
        public $modelo;

        // Função consrutor
        public function __construct($nome, $marca, $modelo) {

        }
    

        // função acelerar

        public function acelerar() {
            echo "Acelerando";
        }


    }
   
   class Moto extends Veículos {
        //Atributos 
        public $tamanho;
        public $velocidade;
        
        // função ligar
        public function ligar() {
            echo "ligando";
        }
    }
    class carro extends Veículos {
        //Atributos
        public $cor;
        public $quilometragem;

        // função dirigir
        public function dirigir() {
            echo "dirigindo";
        }
    }
    
    // instanciar
   $moto1 = new Moto("HyperSport.","suzuki","hayabusa");
   $carro1 = new Carro("civicg10","honda","sedan"); 

   $moto1->$dirigir;
   echo $moto1->acelerar();
   echo $moto1->$cor;
   echo $moto1->$quilometragem;

    
?> 
