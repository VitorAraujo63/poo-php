<?php

$sorteio = rand(0,5);

echo "Valor sorteado: " . $sorteio;
switch($sorteio){
    case 0:
        echo " => Voce ganhou 2 pontos";
        break;
    case 2:
        echo " => Voce perdeu 1 ponto";
        break;
    case 3:
        echo "Voce ganou um bonus! pararbens ganhou 3 pontos";
        break;
    default:
        echo " Jogue novamente!";
        break;
}


?>