<?php

require 'Produto.php';

$produto = new Produto();


switch($_GET['operacao']) {
    case 'list':
        // var_dump($produto->list());

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo "Id: " . $value['id'] . '<br> Descricao: ' . $value['descricao'] . '<hr>';
        }
        break;
    
    case 'insert':
        
        $status = $produto->insert('Produto teste do Vitor H.');

        if(!$status) {
            echo "Nao foi possivel realizar o cadastro do produto!";
            return false;
        }

        echo "Produto cadastrado com sucesso";
        
        break;
    
    case 'update':
        
        $status = $produto->update('Alterando a descricao do produto', 3);

        if(!$status) {
            echo "Nao foi possivel realizar a atualizacao do produto!";
            return false;
        }

        echo "Produto alterado com sucesso";

        break;
    
    case 'delete':
        
        $status = $produto->delete(3);

        if(!$status) {
            echo "Nao foi possivel realizar a exclusao do produto!";
            return false;
        }

        echo "Produto excluido com sucesso";
        break;

    
}