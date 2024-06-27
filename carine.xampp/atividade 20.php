<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Propriedade especifica da classe Funcionario
    private $salario;
    //Construtor de classe Funcionario 
    public function __construct($nome, $Idade, $salario){
    //Chama o Construtor da classe pai
    parent::__construct($nome, $Idade);
    $this->salario = $salario;
    }
    //Metodo para exibir informações do Funcionário
    public function exibirinformações(){
    //Chama o metodo exibirInformações de classe pai
    parent::exibirinformações();
    echo "Salário" . $this->salario ."<br>";
    }

}
?>