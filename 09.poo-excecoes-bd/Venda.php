<?php

declare(strict_types=1);

class Venda {
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;


    public function __construct(
        string $data,
        string $produto,
        int $quantidade,
        float $valorTotal) {
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorTotal = $valorTotal;
    }

    public function exibirVenda(): void {
        echo "Data: " . $this->data;
        echo "\nProduto: " . $this->produto;
        echo "\nQuantidade: " . $this->quantidade;
        echo "\nValo total: R$ " . $this->valorTotal;
    }
}


$venda = new Venda(
    '01/06/2025',
    'Camisa Adidas - Branca',
    2,
    259.90,
);

$venda->exibirVenda();
echo PHP_EOL;
echo PHP_EOL;

var_dump($venda);
