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


var_dump($conta->exibirDadosDaConta());


print_r($conta->exibirDadosDaConta());
?>