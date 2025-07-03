CREATE DATABASE blog;

use blog;

CREATE TABLE posts (
    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(30) DEFAULT NULL,
    descricao varchar(50) DEFAULT NULL,
    PRIMARY KEY(id)
);