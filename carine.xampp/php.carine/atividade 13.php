<?php
    abstract class Conta{
        public $saldo = 0;

        abstract function depositar($valor); 

        abstract function sacar($valor); 
}

    class ContaCorrente extends Conta{
    
        function depositar($valor){ 
            $this->saldo += $valor;
        }
        function sacar($valor){ 
            $this->saldo -= $valor;
        }
        function transferir($contaDestino, $valor){ 
            $this->saldo -= $valor;
            $contaDestino->depositar($valor);
        }
    }

    $novaConta1 = new ContaCorrente();
    $novaConta2 = new ContaCorrente();
    $novaConta1->transferir($novaConta2, 500); 
    echo "saldo:".$novaConta1->saldo;
    echo "saldo:".$novaConta2->saldo;
?>
