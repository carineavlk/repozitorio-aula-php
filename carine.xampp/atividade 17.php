<?php
     class Usuarios{
        //Atributos de classe 
        public      $nome;
        protected   $cpf;
        private     $endereco;

        //constructor da classe
        function Usuarios(){
            $this->preparaUsuario();
        }

        //Métodos
        private function preparaUsuario(){
            $this->nome = "Leonardo";
            $this->cpf = "99999999999";
            $this->endereco = "Rua Fulano de Tal numero 0";
     }

     public function getCpf (){
        return $this->cpf;
     }

     public function getNome (){
        return $this->nome;
     }

     public function getEndereco(){
        return $this->endereco;
     }
}

//Instanciando o objeto e acessando seus respectivos metodos
$usu = new Usuarios; 

$usu->getCpf();

$usu->getNome();
?>