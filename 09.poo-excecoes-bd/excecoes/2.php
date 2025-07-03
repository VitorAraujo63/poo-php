<?php

function validarUsuario(array $usuario){
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        return false;
    }

    return true;
}

$usuario = [
    'codigo' => 3,
    'nome' => '',
    'idade' => 19,
];


$usuarioValido = validarUsuario($usuario);


if(!$usuarioValido) {
    echo "Usuarui Invalido!";
    return false;
}