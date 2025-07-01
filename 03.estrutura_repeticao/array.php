<?php

$carros = ['Bmw','Ferrari','Porsche'];

$endereco = [
    'cep' => "17525181",
    'numero' => "130",
    'cidade' => "Marilia",
    'estado' => "SP"
];

$EnderecoPessoas = [
    'pessoa1' => array(
        'cep' => "17525181",
        'cidade' => "Marilia",

    ),
    'pessoa2' => [
        'cep' => "17525181",
        'cidade' => "Marilia",
    ],

];

print_r($EnderecoPessoas['pessoa1']['cidade']);
?>