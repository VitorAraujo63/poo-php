<?php

$frutas = ["banana","maca","pera","uva"];

$contador = count($frutas);

$i = 4;

// While voce realiza a validacao primeiro e o teste depois.
// Do Whille e feito o teste primeiro e depois a validacao.

do {

    if ($frutas[$i] == 'pera') {
        break;
    }

    echo $frutas[$i] . '<br>';
    $i++;
} while($i < $contador);

// while($i < $contador) {

//     if ($frutas[$i] == 'pera') {
//         break;
//     }

//     echo $frutas[$i] . '<br>';
//     $i++;
// }



?>