<?php

require __dir__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->WriteHTML('<a href="/teste/gg.php">Teste<a/>');
$mpdf->Output();
?>