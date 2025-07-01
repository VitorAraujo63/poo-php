<?php 

// $arrayNumeros = [3,5,6,1,2];

// for ($i=0; $i < count($arrayNumeros); $i++) {
//     print_r( $arrayNumeros[$i] );
// }

$numero = [54, 26, 93, 17, 77, 31, 44, 55, 20];

$tamanho = count($numero);

for ($i = 0; $i < $tamanho - 1; $i++) {
    for ($posicao_atual = 0; $posicao_atual < $tamanho - $i - 1; $posicao_atual++) {

        if ($numero[$posicao_atual] > $numero[$posicao_atual + 1]) {
            $temp = $numero[$posicao_atual];
            $numero[$posicao_atual] = $numero[$posicao_atual + 1];
            $numero[$posicao_atual + 1] = $temp;
        }
    }
}

// sort($numero)
print_r($numero)
?>