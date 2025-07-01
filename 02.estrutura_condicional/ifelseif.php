<?php

$nota = 7;

if ($nota >= 7) {
    echo "Aluno(a) aprovado!";
} else if ( ($nota < 7) && ($nota >=4)) {
    echo "Aluno(a) esta em recuperacao!";
} else if (($nota < 4) && ($nota >= 2)){
    echo "Aluno(a) esta em conselho de classe!";
} else {
    echo "Aluno(a) reprovado!";
}

?>