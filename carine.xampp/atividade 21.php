<?php 
require_once 'Funcionario.php';

//Cria uma instancia de classe Funcionario
$funcionario = new Funcionario("Diego", 30, 5000);

//Exibe as informações do funcionário
$funcionario->exibirInformações();
?>
