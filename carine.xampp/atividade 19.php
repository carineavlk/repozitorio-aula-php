<?php
class Pessoa {
    //Propriedas de classe Pessoa
    protected $nome;
    protected $idade;
    //Construtor da classe Pessoa
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    //Metodo para exibir informações da Pessoa
    public function exibirinformações(){
        echo"Nome".$this->nome."<br>";
        echo"idade".$this->idade."<br>";
    }
}
?>