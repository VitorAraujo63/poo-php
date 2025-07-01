<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos_array = count($arr);

// for( $i=0; $i < $qtd_elementos_array; $i++) {
//     echo $arr[$i] . '<br>';
// }

foreach ($arr as $indice => $value) {

    if ($value % 2 == 0) {
        continue;
    }

    echo "Indice:" . $indice . "Valor:" . $value . "<br>";
}

?>