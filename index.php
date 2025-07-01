<?php

$numero = 10;

$soma = 0;

  //TODO: Crie uma condição para soma dos números de 1 até o número fornecido (exceto aqueles divisíveis por 3).

// for ($soma; $soma < $numero; $soma){
//   if($soma / 3 != 0) {
//     $soma++;
//     continue;
//   }  
// }

while ($soma < $numero) {
    if ($soma % 3 != 0) {
        $soma++;
        continue;
    }
}


echo $soma;

?>