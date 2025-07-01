<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
    'Nubank',
    'Vitor H.',
    '4033',
    '4992-32',
    0,
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->sacar(40);



print_r($conta->exibirDadosDaConta());

?>