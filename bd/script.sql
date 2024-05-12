DROP DATABASE IF EXISTS cozinha;

CREATE DATABASE cozinha;

USE cozinha;

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  email varchar (255) not null,
  password varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO users (username, email, password) VALUES
('cprofessor', 'cprofessoracami@gmail.com', '123456'),
('michel', 'michel@gmail.com', '123456'),
('jose', 'josel@gmail.com', '123456789');

CREATE TABLE categorias (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categorias (nome) VALUES 
('Bolos e tortas'),
('Carnes e aves');

