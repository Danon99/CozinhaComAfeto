<?php 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=cozinha' , "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  

 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
$lista = $pdo->query("SELECT * FROM categorias;");
$categorias = $lista->fetchall(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cozinha com Afeto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>


  <main id="main">
  

  <!-- ======= Whu Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">
    <div class="col-lg-12" style="text-align: right;">
      <a href="../admin.php" type="button" class="btn btn-secondary rounded-pill">Sair</a>
    </div>

        <div class="section-title">
            <h2>Bem-vindo <span>Administrador</span></h2>
        </div>

        <div class="row">
            <a href="../categorias/categoria.php" class="col-lg-4">
                <div class="box">
                    <span>01</span>
                    <h4>Gerenciar Categorias</h4>
                    <p>Listar, cadastrar, editar e excluir categorias</p>
                </div>
            </a>
            <a href="../receitas/receita.php" class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>02</span>
                    <h4>Gerenciar Receitas</h4>
                    <p>Listar, cadastrar, editar e excluir receitas</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>03</span>
                    <h4>Gerenciar E-books</h4>
                    <p>Listar, cadastrar, editar e excluir e-books</p>
                </div>
            </a>


        </div>
    </div>
  </section><!-- End Whu Us Section -->

  </main>
  
  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
