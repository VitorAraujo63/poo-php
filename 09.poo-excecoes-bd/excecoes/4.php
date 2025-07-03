<?php

function validarUsuario(array $usuario){
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception('Campos obrigatorios nao foram preenchidos!');
    }

    return true;
}

$usuario = [
    'codigo' => 3,
    'nome' => '',
    'idade' => 19,
];


try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}