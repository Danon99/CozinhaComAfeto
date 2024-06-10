drop database cozinha;
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

INSERT INTO categorias (id, nome) VALUES
(3, 'Quitandas'),
(4, 'Comidas de Forno'),
(5, 'Pratos Tradicionais '),
(6, 'Salgados Rurais'),
(7, 'Doces Caseiros'),
(8, 'Bebidas Caseiras');


CREATE TABLE receitas (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo varchar(150) NOT NULL,
  ingredientes text not null,
  modo_preparo text not null,
  foto varchar(255) null,
  categoria_id int not null,
  foreign key (categoria_id) references categorias (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `receitas` (`id`, `titulo`, `ingredientes`, `modo_preparo`, `foto`, `categoria_id`) VALUES
(2, 'Pão de Queijo da Roça', '<p>450ml de de leite<br>150 ml de água<br>250 ml de óleo<br>8 xícaras de polvilho doce<br>6 OVOS<br>4 xícaras de queijo meia cura<br>1 colher de sopa de sal</p>', '<p>Leve ao fogo o leite a água e o óleo e o sal até ferver.<br>Depois em uma bacia coloque o polvilho, e acrescente a água fervendo, da uma leve mexida e espera esfriar.<br>Vai acrescentando os ovos aos poucos até da o ponto que mostro no vídeo (a massa tem que ficar mais mole mesmo) depois acrescente o queijo. E mão na massa, bate essa massa na mão sem dó. Faça bolinhas e leve ao forno pré-aquecido a 180 graus por uns 40 minutinhos.</p>', '1054849513.png', 3);


CREATE TABLE administrador (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) NOT NULL,
  email varchar (255) not null,
  password varchar(50) NOT NULL,
  tipo varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO administrador (username, email, password) VALUES
('admin', 'admin@gmail.com', '123456');

CREATE TABLE IF NOT EXISTS ebooks (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `foto` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO ebooks (id, titulo, link, foto) VALUES
(1, 'Quitandas', 'https://go.hotmart.com/U93254930A', '1765302305.18'),
(2, 'Brigadeiros Gourmet', 'https://go.hotmart.com/C93255477R', '536617912.19');
