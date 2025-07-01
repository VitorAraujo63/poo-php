<?php

function divisao($dividendo, $divisor) {

    try{
        if($divisor == 0) {
            throw new RangeException("O numero nao pode ser divido por zero");
        }

        $resultado = $dividendo / $divisor;

        echo "O resultado e: ".$resultado;
    } catch(Exception) {
        // echo $e->getMessage();
        echo "O numero nao pode ser divido por zero";
    } finally {
        echo "<br>Trando excecoes";
    }
}


divisao(10, 0);
?>