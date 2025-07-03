<?php

declare(strict_types=1);

class Blog {
    private $connect;

    public function __construct() {

        try {
            $this->connect = new PDO('mysql:host=127.0.0.1;dbname=blog', 'root', '12345');
            
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() {
        $sql = 'select * from posts';

        $posts = [];
        
        foreach ($this->connect->query($sql) as $key => $value) {

            array_push($posts, $value);
        }

        return $posts;
    }

    public function insert(string $titulo, string $descricao): int {
        $sql = 'insert into posts(titulo, descricao) values(?, ?)';

        $prepare = $this->connect->prepare($sql);

        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function updateDescricao(string $descricao, int $id): int {
        $sql = 'update posts set descricao = ? where id = ?';

        $prepare = $this->connect->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);


        $prepare->execute();

        return $prepare->rowCount();
    }

    public function updateTitulo(string $titulo, int $id): int {
        $sql = 'update posts set titulo = ? where id = ?';

        $prepare = $this->connect->prepare($sql);

        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $id);


        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete($id): int {
        $sql = 'delete from posts where id = ?';

        $prepare = $this->connect->prepare($sql);

        $prepare->bindParam(1, $id); 
        $prepare->execute();

        return $prepare->rowCount();
    }
}



?>