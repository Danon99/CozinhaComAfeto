DROP DATABASE IF EXISTS cozinha;

CREATE DATABASE cozinha;

USE cozinha;

CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  email varchar (255) not null,
  password varchar(50) NOT NULL,
  tipo varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO usuarios (username, email, password) VALUES
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


CREATE TABLE receitas (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo varchar(150) NOT NULL,
  ingredientes text not null,
  modo_preparo text not null,
  foto varchar(255) null,
  categoria_id int not null,
  foreign key (categoria_id) references categorias (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE pedidos (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  data datetime NOT NULL,
  valor double not null,
  status enum('ABERTO', 'CONCLUIDO', 'CANCELADO') NOT NULL,
  usuario_id int not null,
  foreign key (usuario_id) references usuarios(id)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE item_pedidos (
  pedidos_id int not null,
  receita_id int not null,
  quantidade int not null,
  valor double not null,
  foreign key (pedidos_id) references pedidos(id),
  foreign key (receita_id) references receitas(id)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE administrador (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  email varchar (255) not null,
  password varchar(50) NOT NULL,
  tipo varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO administrador (username, email, password) VALUES
('admin', 'admin@gmail.com', '123456');