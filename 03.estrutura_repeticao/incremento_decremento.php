<?php

echo "Pos-incremento ";
$a = 5;
echo "Deve ser 5:" . $a++ . '<br>';
echo "Deve ser 6:" . $a . '<br>'.'<br>';

echo "Pre-incremento ";
$a = 5;
echo "Deve ser 6:" . ++$a . '<br>';
echo "Deve ser 6:" . $a . '<br>'.'<br>';

echo "Pos-decremento ";
$a = 5;
echo "Deve ser 5:" . $a-- . '<br>';
echo "Deve ser 4:" . $a . '<br>'.'<br>';

echo "Pre-decremento ";
$a = 5;
echo "Deve ser 4:" . --$a . '<br>';
echo "Deve ser 4:" . $a . '<br>'.'<br>';

echo "Pre/pos-decremento com null";
$a = null;
echo "Pos:" . $a-- . '<br>';
echo "Resultado:" . $a . '<br>';
$a = null;
echo "Pre   :" . --$a . '<br>'.'<br>';

echo "Pre/pos-incremento com null" .'<br>';
$a = null;
echo "Pos:" . $a++ . '<br>';
echo "Resultado:" . $a . '<br>';
$a = null;
echo "Pre   :" . ++$a . '<br>'.'<br>';