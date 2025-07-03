<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'delete from produtos where id = ?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['id']); // bindParam ja protege contra SQLInjection e ameacas
$prepare->execute();

echo $prepare->rowCount();

// localhost:8181/delete.php?id=1