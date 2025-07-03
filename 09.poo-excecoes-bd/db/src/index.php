<?php

require 'Blog.php';

$blog = new Blog();

switch($_GET['blog']) {
    case 'list':

        echo '<h3>Posts: </h3>';

        foreach ($blog->list() as $value) {
            echo "Id: " . $value['id'] . '<br> Titulo: '. $value['titulo'] . '<br> Descricao: ' . $value['descricao'] . '<hr>';
        }
        break;
    
    case 'insert':
        
        $status = $blog->insert('Post de teste', 'Esse e apenas um post para testar a criacao');

        if(!$status) {
            echo "Nao foi possivel realizar o cadastro do post!";
            return false;
        }

        echo "Post cadastrado com sucesso";
        
        break;
    
    case 'updateDescricao':
        
        $status = $blog->updateDescricao('Alterando a descricao do post', 1);

        if(!$status) {
            echo "Nao foi possivel realizar a atualizacao do post!";
            return false;
        }

        echo "Post alterado com sucesso";

        break;

    case 'updateTitulo':
        
        $status = $blog->updateTitulo('Alterando o titulo do post', 1);

        if(!$status) {
            echo "Nao foi possivel realizar a atualizacao do post!";
            return false;
        }

        echo "Post alterado com sucesso";

        break;
    
    case 'delete':
        
        $status = $blog->delete(2);

        if(!$status) {
            echo "Nao foi possivel realizar a exclusao do post!";
            return false;
        }

        echo "Post excluido com sucesso";
        break;

    
}