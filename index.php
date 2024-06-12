<?php

$dsn = 'mysql:host=127.0.0.1;dbname=cozinha;charset=utf8;';

$conn = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = 'SELECT * FROM categorias;';
$stmt = $conn->query($query);
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT * FROM receitas;';
$stmt = $conn->query($query);
$receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = 0;

$query = 'SELECT * FROM receitas limit 8;';
$stmt = $conn->query($query);
$fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cozinha com Afeto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>

    .gallery-item {
        width: 100%; /* Define a largura máxima do item da galeria */
        height: auto; /* Mantém a proporção da imagem */
    }

    .gallery-image {
        width: 100%; /* Define a largura máxima da imagem como 100% */
        height: 250px; /* Define a altura máxima da imagem (ajuste conforme necessário) */
        object-fit: cover; /* Garante que a imagem cubra todo o espaço designado */
    }
</style>
</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <div class="logo me-auto">
                <h1><a href="index.html">Cozinha com Afeto</a></h1>
                <?php if(isset($_GET['message'])):?>
                <p style="color: #fff;margin-top:10px"><?= $_GET['message']?></p>
                <?php endif; ?>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
                    <li><a class="nav-link scrollto active" href="#about">História</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Receitas Gratuitas</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

            <a href="#book-a-table" class="book-a-table-btn scrollto">Adquira seu E-book</a>

        </div>
    </header>

    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style= " background-image: url(assets/img/slide/fogaao.webp) ; background-position: center;">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Cozinha</span> Com Afeto</h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Receitas</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">E-books</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>

    <main id="main">

        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("assets/img/foto.jpeg");'>
                        <a href="https://youtube.com/shorts/Va052xeWNys?si=MqrIZKdl5XucEtcy" target="blank" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Um pouco de história...</h3><br><br>
                          
                            <ul>
                                <li>
                                Dona Nilza nascida e criada na roça ao lado da sua avó, encontrou na cozinha sua paixão, 
                                a cozinha é sua fonte de alegria.  Aos 54 anos tornou-se uma influenciadora digital com a temática 
                                receitas da roça. <br><br>Com pratos simples e cheios de afeto, Dona Nilza conquistou uma grande comunidade 
                                por meio do  compartilhamento das suas receitas afetivas. Sua autenticidade inspira seus seguidores e 
                                ela sente muito orgulho por ter concretizado seu sonho de alcançar pessoas com o seu trabalho.
                                </li>
                                
                            </ul>
 
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="book-a-table" class="book-a-table" style="    background: #444444;">
            <div class="container">

                <div class="section-title text-white">
                    <h2><span>Cadastre-se</span></h2>
                    <p>Para adquirir nossos E-BOOKS</p>
                </div>

                <div class="text-center">
                    <form action="cadastro.php" method="get">
                        <button class="book-a-table-btn scrollto" type="submit">Criar uma conta</button>
                    </form>
                </div>
                </form>
            </div> <br><br>

            <div class="text-center">
                <form action="login.php" method="get">
                    <button class="book-a-table-btn scrollto" type="submit">Iniciar sessão</button>
                </form>
            </div>
            </form>
            </div>



        </section>

        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2> <span>Menu</span></h2>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Todas as Receitas</li>
                            <?php foreach($categorias as  $categoria): ?>
                            <li data-filter="<?='.filter-' .$categoria['id'] ?>"><?= $categoria['nome'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="row menu-container">
                    <?php foreach($receitas as  $receita): ?>
                    <div class="col-lg-6 menu-item <?='filter-' .$receita['categoria_id'] ?>">
                        <div class="menu-content">
                        <a href="receita.php?id=<?= $receita['id'] ?>"><?= $receita['titulo'] ?></a><span></span>
                        </div>
                    </div> 
                    <?php endforeach; ?>
                </div>
            </div>

        </section>

        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Algumas fotos de <span>nossas receitas</span></h2>

                </div>

                <div class="row g-0">
             <!-- Aqui está o seu loop PHP com as imagens -->
<?php foreach($fotos as $foto): ?>
    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
            <a href="src/receitas/upload/<?= $foto['foto'] ?>" class="gallery-lightbox">
                <img src="src/receitas/upload/<?= $foto['foto'] ?>" alt="" class="img-fluid gallery-image">
            </a>
        </div>
    </div>
<?php endforeach; ?>

<!-- Estilo CSS para garantir que todas as imagens tenham as mesmas dimensões -->



                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Nossos</span> Contatos</h2>
                    <p>Qualquer dúvida ou sugestão entrar em contato</p>
                </div>
            </div>

            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">
              
                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-envelope"></i>
                            <h4>E-mail:</h4>
                            <p>informacoes@exemplo.com<br>administrador@exemplo.com</p>
                        </div>

                        <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                            <i class="bi bi-phone"></i>
                            <h4>Contatos:</h4>
                            <p>(61) 91111 1111 <br>(61) 92222 2222</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer id="footer">
        <div class="container">
            <h3>Cozinha com Afeto</h3>

            <div class="social-links">

                <a href="https://www.instagram.com/danicozinhapratica/" target="blank" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div>
            <div class="copyright">
                &copy;  <strong><span>Cozinha com Afeto</span></strong>.
            </div>
            
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>