<?php

declare(strict_types=1);

namespace App;

abstract class ContaBancaria {
    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo,
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string {
        $this->saldo += $valor;
        return 'Deposito de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
    }

    public function sacar(float $valor): string {
        if($this->saldo > $valor) {
            $this->saldo -= $valor;
        } else {
            return "\nVoce nao tem saldo o suficiente. Saldo atual: R$" . number_format($this->saldo, 2, ',', '');
        }

        return "\nSaque de R$ " .  number_format($valor, 2, ',', '');
    }

    public abstract function obterSaldo(): string;

    public function exibirDadosDaConta(): array {
        return [      
            'banco' => $this->banco,     
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }


    public function getBanco(): string {
        return $this->banco;
    }

    public function getNomeTitular(): string {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string {
        return $this->numeroConta;
    }

}

?>
