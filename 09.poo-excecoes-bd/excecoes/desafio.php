<?php

function divisao($numero1, $numero2) {
    if ($numero1 == 0 || $numero2 == 0) {
        throw new Exception("Os numeros precisam ser diferentes de zero (0)");
    }

    return true;
}

// divisao(23, 0);

try {
    divisao(23, 0);
} catch (Exception $e) {
    echo $e->getMessage();
} 