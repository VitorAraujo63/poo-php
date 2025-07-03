<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']); // bindParam ja protege contra SQLInjection e ameacas
$prepare->execute();

echo $prepare->rowCount();

// localhost:8181/update.php?descricao=Insert%20Produto