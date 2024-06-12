
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
(2, 'Pão de Queijo da Roça', '<p>450ml de de leite<br>150 ml de água<br>250 ml de óleo<br>8 xícaras de polvilho doce<br>6 OVOS<br>4 xícaras de queijo meia cura<br>1 colher de sopa de sal</p>', '<p>Leve ao fogo o leite a água e o óleo e o sal até ferver.<br>Depois em uma bacia coloque o polvilho, e acrescente a água fervendo, da uma leve mexida e espera esfriar.<br>Vai acrescentando os ovos aos poucos até da o ponto que mostro no vídeo (a massa tem que ficar mais mole mesmo) depois acrescente o queijo. E mão na massa, bate essa massa na mão sem dó. Faça bolinhas e leve ao forno pré-aquecido a 180 graus por uns 40 minutinhos.</p>', '1054849513.png', 3),
(3, 'Pão de Salsicha', '<p>400g de farinha de trigo (aproximadamente)<br>3 colheres de sopa de açúcar<br>8g de fermento biológico<br>220ml de leite<br>1 ovo e 1 gema<br>65g de manteiga<br>1 pitada de sal<br>Salsicha para rechear<br>Queijo parmesão para empanar</p>', '<p>Misture os ovos, o fermento, o açúcar e o leite.<br>Depois acrescente o sal e a farinha aos poucos.<br>Sove a massa por 5 min depois adicione a manteiga e sova por mais 10 min.<br>Deixe a massa descansar por 1h ou até dobrar de tamanho.<br>Divida a massa, abra e enrole com a salsicha como mostramos no vídeo.<br>Passe um pouco de água depois empane com o queijo parmesão.<br>Deixe descansar por mais 30min e leve para assar em forno pré aquecido a 180 graus de 30-35min.</p>', '789864721.jpeg', 4),
(4, 'Baião Caipira', '<p>500g de carne de sol<br>400g de bacon<br>300g de calabresa<br>3 xicaras de arroz<br>300g de feijão fradinho pré cozido<br>1/2 cebola<br>3 dentes de alho<br>Temperos: chimichurri, páprica picante e sal à gosto 1 tomate grande ( para por por cima)<br>4 ovos tritos<br>200g de mussarela</p>', '<p>Em uma panela, frite o bacon, a calabresa e a carne de sol até que fiquem dourados.<br>Adicione a cebola e o alho à panela e refogue-os junto com as carnes até que fiquem bem dourados e aromáticos.<br>Acrescente os temperos desejados e o arroz à panela, e refogue-os por alguns minutos para que o arroz absorva os sabores dos ingredientes.<br>Adicione o feijão já cozido à mistura na panela e deixe tudo cozinhar em fogo médio por alguns minutos, mexendo ocasionalmente, até que o arroz esteja cozido e os sabores estejam bem incorporados.<br>Enquanto o arroz cozinha, em outra frigideira, frite os ovos até que as claras estejam firmes e as gemas ainda estejam macias.<br>Quando o arroz estiver pronto, sirva-o em um prato grande ou travessa e decore com os tomates cortados em rodelas, os ovos fritos e o queijo ralado.</p>', '1170505776.jpeg', 5),
(5, 'Empadinha', '<p>1 e 1/2 xícara de farinha de trigo<br>80g de margarina ou manteiga gelada<br>Pitada de sal<br>Frango desfiado e temperado</p>', '<p>Misture a farinha com a margarina até desgrudar das mãos depois coloque o sal. Coloque um pouco de massa nas forminhas e faça furinhos(Usamos forminhas de cupcake)<br>Depois coloque frango e tampe com mais massa. E faça maia furinhos em cima.<br>Pincele gema e leve para assar em forno pré aquecido a 180 graus por uns 30 minutos ou até dourar.</p>', '308204645.jpeg', 6),
(6, 'Queijadinha', '<p>3 ovos<br>1 cx de leite condensado<br>1 xícara de queijo ralado ( usamos meia cura)<br>1 e 1/2 xícara e coco ralado<br>1 colher de sopa de manteiga</p>', '<p>Bata os ovos bem, depois misture todos os ingredientes e coloque mais um pouco de queijo por cima e deixe assar por 30-35 minutinhos.</p>', '1119995777.jpeg', 7),
(7, 'Chocolate Quente', '<p>90g de chocolate meio amargo<br>1 colher de chocolate em pó<br>1 caixinha de creme de leite<br>300ml de leite integral</p>', '<p>Derreta o chocolate com o creme de leite.<br>Depois adicione o chocolate em pó e o leite misture bem e deixa ferver.</p>', '1389560278.jpeg', 8),
(8, 'Bolo Pão de Mel', '<p>MASSA:<br>2 xícaras de farinha de trigo<br>1 xícara de chocolate em pó<br>1 xícara de chá de açúcar mascavo<br>2 xícaras de leite<br>2 colheres de sopa de óleo<br>1/2 xícara de mel<br>1 colher de sopa de canela em pó<br>1 pitada de sal<br>1 colher de sopa de fermento<br>1 colher de chá de bicarbonato de sódio<br><br>RECHEIO:<br>200g de doce de leite cremoso<br><br>COBERTURA:<br>300g de chocolate meio amargo (derretido)<br>1 caixa de creme de leite</p>', '<p>PREPARO DA MASSA<br>Misture o leite, o mel, o óleo e o açúcar depois acrescente o cacau em pó, a canela e a farinha de trigo e misture novamente. Depois coloque o sal, o fermento e o bicarbonato e leve para assar. Depois de assado corte o bolo em 3 partes recheei cada parte com doce de leite e finalize com a cobertura ( misture o chocolate derretido com o creme de leite)</p>', '1350002845.jpeg', 3),
(9, 'Rosca de Chocolate', '<p>500g de farinho de trigo (aproximadamente)<br>3 colheres de açúcar<br>1/2 colher de sopa de canela<br>1 xícara de de leite (240ml)<br>2 colheres de sopa de margarina<br>1 ovo<br>10g de fermento biológico<br>1 pitada de sal<br><br>Recheio:<br>3 colheres de sopa de margarina<br>3 colheres de sopa de açúcar<br>1/2 colher de canela em pó<br>100g de chocolate meio amargo</p>', '<p>Misture todos os ingredientes da massa menos a farinha e o sal.<br>Misture o sal e a farinha aos poucos até da o ponto de sovar.<br>Sove a massa por 15 min e deixa descansar por 1h.<br>Misture os ingredientes do recheio menos o chocolate.<br>Abra a massa passe o recheio depois coloque o chocolate por cima.<br>Enrole a massa, corta e deixa descansar por mais 30 min.<br>Leve para assar em forno pré aquecido a 180 graus de 35-40min ou até dourar.<br>Por cima fiz uma caldinha de açúcar de confeiteiro e água.</p>', '973877312.jpeg', 4),
(10, 'Frango assado na panela de pressão', '<p>1 e 1/2kg frango<br>2 litros de óleo<br><br>Marinada:<br>2 colheres de maionese<br>2 colheres de óleo<br>1 xícara de água<br>3 dentes de alho<br>1 limão<br>1 cebola media<br>Sal a gosto<br>Pimenta do reino</p>', '<p>No dia anterior bata todos os ingredientes da marinada no liquidificador.<br>Faça furos no frango ( pro tempero entrar bem) e coloque a marinada.<br>Muito importante temperar ele um dia antes para o frango pegar bem o tempero<br>Em uma panela de pressão coloque o óleo e deixa esquentar bem até ferver.<br>Coloque o frango bem devagar ( vai abaixando aos poucos até a fervura ir abaixando)<br>E tire a borracha da panela e tampe.<br>Deixe o frango fritando de 50min a 1 hora.<br>Quando ele tiver bem dourado está pronto.<br><br>Esse frango fica maravilhoso, desmanchando&nbsp;</p>', '1897088136.jpeg', 5),
(11, 'Esfirra de Carne', '<p>200ml de água morna<br>100ml de óleo<br>3 colheres de sopa de açúcar<br>Pitada de sal<br>15g de fermento biológico<br>500g de farinha de trigo (aproximadamente)</p>', '<p>Em uma bacia misture todos os ingredientes menos a farinha e o sal.<br>Depois adicione o sal e a farinha aos poucos.<br>Sove a massa por 5 minutos e deixa descansar por 30 minutos.<br>Separa a massa (dividimos em 80g cada) abra e recheei com carne moída temperada.<br>Passe gema por cima e leve para assar em forno pré aquecido a 180graus de 30-35min.</p>', '898559710.jpeg', 6),
(12, 'Biscoito 5 pratos', '<p>1 prato de farinha de trigo<br>1 prato de polvilho<br>1 prato de açúcar<br>1 prato de queijo (usei meia cura)<br>3 ovos<br>1 prato raso de óleo<br>1 colher de sopa de margarina<br>1 colher de fermento químico<br>100 ml de leite (aproximadamente)<br>&nbsp;</p>', '<p>Misture o polvilho, o açúcar, a farinha de trigo e o queijo e misture depois adicione o fermento, o óleo, os ovos e misture bem. Depois adicione a margarina e vai adicionando o leite aos poucos até da o ponto de modelar. Depois leve para assar no forno pré aquecido a 180 graus por uns 30 minutos.</p>', '1813968130.jpeg', 3),
(13, 'Broa de Milho', '<p>1 xícara de fubá<br>1 xícara de farinha de trigo<br>1 xícara de açúcar<br>1 ovo<br>2 colheres de sopa de margarina<br>1 colher de erva doce ou 100g de parmesão<br>1/2 xícara de leite<br>1 colher de fermento químico<br>&nbsp;</p>', '<p>Misture o fuba, a farinha de trigo e o açúcar.<br>Depois adicione o restante dos ingredientes ( deixa o leite por último, vai adicionando o leite aos pouco. Pode ser que precise de menos ou de mais)<br>A massa fica pegajosa mesmo unte bem as mãos e vai fazendo bolinhas.<br>Leve para assar em uma forma untada ( importante colocar as broas bem separadas)<br>E leve para assar em forno pré aquecido a 180 graus por uns 30 minutos.</p>', '1062230831.jpeg', 3),
(14, 'Cinnamon Roll de Churros', '<p>MASSA:<br>350 ml de água morna<br>5 col. sopa de açúcar<br>60ml de óleo<br>1 pacote de fermento biológico (10g)<br>Pitada de sal<br>500g Farinha de trigo (aproximadamente)<br><br>RECHEIO<br>Manteiga<br>1/2 xícara de açúcar<br>Canela a gosto<br><br>Cobertura:<br>1/2 xícara chá de doce de leite<br>Leite aos poucos até ficar mais ralinho o doce de leite<br>&nbsp;</p>', '<p>Misture a água, o açúcar, Óleo e sal.<br>Em uma outra bacia adicione o fermento na farinha de trigo Depois, a mistura líquida.<br>a massa.<br>Misture e sove por 15 minutinhos, até a massa ficar lisinha. Leve para descansar por 1h.<br>Abra a massa e pincele com manteiga. Depois recheie com a mistura de açúcar e canela. Enrole feito um rocambole e corte em pedaços. Deixe descansar mais 30 minutos.<br>Asse no forno pré-aquecido a 180 graus por aproximadamente 30 minutos ou até dourar.<br>Para a cobertura, misture doce de leite com o leite, até ficar mais lo fluido e cremoso. Sirva por cima dos rolinhos e polvilhe açúcar com canela.</p>', '1355702723.jpeg', 7),
(15, 'Canjica Cremosa ', '<p>500g de canjica branca<br>1 litro e 1/2 de LEITE INTEGRAL LEITBOM<br>1 caixa de LEITE CONDENSADO LEITBOM<br>2 caixas de CREME DE LEITE LEITBOM<br>1 e 1/2 xicara de LEITE EM PÓ LEITBOM<br>1/4 de açúcar<br>100g de coco ralado<br>Pitada de sal</p>', '<p>Cozinhe a canjica por 40 minutos.<br>Em uma panela grande coloque a canjica e todos os outros ingredientes misture sempre muito bem e deixe ferver até ficar bem cremosa.<br>Sirva com canela á gosto.</p>', '1627987993.jpeg', 7),
(16, 'Chocolate quente com café ', '<p>1 caixinha de creme de leite<br>1 barra de chocolate (90g)<br>1/2 xícara de café<br>1 colher de cacau em pó</p>', '<p>Misture o creme de leite com o chocolate até derreter depois adicione o cacau e logo em seguida o café. Deixa da uma engrossada e tá pronto. Super fácil e delicioso</p>', '99113004.jpeg', 8),
(17, 'Milkshake de Café e Caramelo', '<p>Calda de Caramelo<br>1 xícara (chá) de Açúcar Granulado<br>União Doçúcar (190 g) meia xícara (chá) de água<br>100 g de creme de leite de caixinha<br><br>MILKSHAKE<br>6 bolas de sorvete de creme<br>SUMÁRIO<br>1<br>porção<br>Rendimento<br>20min<br>meia xícara (chá) de leite (100 ml) meia xícara (chá) de Café União Tradicional coado frio (100 ml)<br>PARA SERVIR chantilly batido</p>', '<p>Calda de caramelo:<br>Em uma panela média, misture o Açúcar Granulado União Doçúcar e a água e leve ao fogo médio, sem mexer, até formar uma calda com cor de caramelo escuro (cuidado para não deixar<br>Desligue o fogo e adicione o creme de leite aos poucos. Misture bem até formar um creme homogêneo. Reserve até amornar.<br><br>Milkshake:<br>Em um liquidificador, coloque o sorvete de creme, o leite e o<br>Café União Tradicional coado e bata por 2 minutos.<br>Sirva decorando os copos com a calda de caramelo reservada e finalize com o chantilly batido.<br>&nbsp;</p>', '434339481.jpeg', 8),
(18, 'Brigadeiro de Café', '<p>1 caixinha de creme de leite<br>2 colheres de sopa de café tradicional União<br>1 caixinha de leite condensado</p>', '<p>Leve todos os ingredientes ao fogo deixe ferver até engrossar e desgrudar do fundo. Leve para a geladeira depois faça bolinhas e passe no cacau em pó.</p>', '1714039814.jpeg', 7),
(19, 'Bolo Pudim de Cenoura com Chocolate', '<p>Pudim de chocolate:<br>3 ovos<br>1 caixa de leite condensado<br>1e 1/2 xícara de leite<br>1 xícara de chocolate em pó (usamos 70% cacau)<br><br>Para a calda:<br>2 xícaras de açúcar<br>1/2 xícara de água<br><br>Bolo de cenoura:<br>3 ovos<br>125 ml de óleo<br>350g de cenoura ou 3 grandes<br>1 e 1/2 xícara de açúcar<br>1 pitada de sal<br>3 xícaras de farinha de trigo<br>1 colher de sopa de fermento</p>', '<p>Bata todos os ingredientes do pudim no liquidificador e reserve.<br>Derreta o açúcar na forma de pudim e vai colocando água aos poucos até virar uma calda.<br>Deixe esfriar um pouco e coloque o pudim.<br>Para o bolo de cenoura e só bater todos os ingredientes no liquidificador menos a farinha de trigo e o fermento. ( não precisa bater muito, só até ficar homogêneo)<br>Transfira para uma bacia e adicione a farinha de trigo e depois o fermento.<br>Coloque na forma depois do pudim e tampe com papel alumínio.<br>Leve para assar em banho maria em forno pré aquecido a 180 graus por aproximadamente 1h.<br>&nbsp;</p>', '1740415361.jpeg', 4),
(20, 'Rosca Amanteigada', '<p>1 ovo<br>1 colher de sopa de fermento biológico&nbsp;<br>8 colheres de açúcar<br>1 pitada de sal<br>1 xícara de leite<br>3 colheres de manteiga<br>600g de farinha de trigo (aproximadamente)<br><br>Manteiga para pincelar<br>Açúcar para polvilhar</p>', '<p>Misture o ovo, o açúcar, a margarina, o fermento e o leite (morno) depois adicione o sal e a farinha aos poucos até dar o ponto de sova e sove por 15 minutos.<br>Deixa descansar por 1h ou até a massa dobrar de tamanho.<br>Abra a massa com auxílio de um rolo, passe a manteiga e polvilhe açúcar por cima.<br>Enrole a rosca como preferir e deixe descansar por 30min.<br>Pincele gema e leve ao forno pré aquecido a 180 graus por 35-40min.<br>&nbsp;</p>', '1496768682.jpeg', 3),
(21, 'Bolo de Limão com casca', '<p>3 ovos<br>1 limão<br>1 xícara de óleo<br>1 xícara e 1/2 de açúcar<br>2 xícaras de farinha de trigo<br>1 colher de sopa de fermento<br><br>-Calda<br>Suco de 1 limão<br>1/2 xícara de açúcar<br>1/4 de água</p>', '<p>No liquidificador coloque o limão sem caroço e sem o miolo branco, depois os outros ingredientes menos a farinha e o fermento e bata muito bem até a massa ficar lisinha. Depois em um recipiente coloque a massa, depois a farinha e o fermento e leve pra assar por aproximadamente 30 a 40 minutos<br>Para a calda esprema o limão e leve ao fogo com a açúcar e a água até ficar grossinha a calda. So colocar por cima do bolo e aproveitar.</p>', '1305335045.jpeg', 3);

-- -

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
