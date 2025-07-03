<?php

class ContaBancaria {
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if($this->saldo > $valor) {
            $this->saldo -= $valor;
        } else {
            return 'Sem saldo suficiente para sacar';
        }
    }


}


$conta = new ContaBancaria(
    'nubank',
    'Vitor H',
    '2333-23',
    '20924',
    300,
);

echo $conta->obterSaldo();

echo PHP_EOL;

$conta->depositar(400);

echo $conta->obterSaldo();

echo PHP_EOL;

$conta->sacar(150);

echo $conta->obterSaldo();

echo PHP_EOL;