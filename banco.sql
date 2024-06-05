CREATE DATABASE IF NOT EXISTS contato DEFAULT CHARACTER SET utf8;
USE contato;
CREATE TABLE IF NOT EXISTS usuarios(
    idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100),
    email varchar(100),
    senha varchar(32)
);

