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

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cozinha com Afeto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Cozinha com afeto</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/cozinhacomafeto-main/src/admin/dashboard.php">Cozinha com afeto &emsp;</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="http://localhost/cozinhacomafeto-main/src/admin/dashboard.php">Página inicial </a></li>
        <li><a href="http://localhost/cozinhacomafeto-main/src/categorias/index.php">Categorias</a></li>
		<li><a href="http://localhost/cozinhacomafeto-main/src/receitas/index.php">Receitas</a></li>
		<li><a href="http://localhost/cozinhacomafeto-main/src/ebooks/index.php">E-books</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
	  	<li><a href="http://localhost/cozinhacomafeto-main/">Ir para o site</a></li>
        <li><a href="../../admin.php">Sair</a></li>
        
      </ul>
    </div>
  </div>
</nav>



  <main id="main">
  

  <section id="why-us" class="why-us">
    <div class="container">


        <div class="section-title">
            <h2>Bem-vindo <span>Administrador</span></h2>
        </div>

        <div class="row">
            <a href="../categorias/index.php" style="text-decoration:none" class="col-lg-4">
                <div class="box">
                    <span>01</span>
                    <h4>Gerenciar Categorias</h4>
                    <p>Listar, cadastrar, editar e excluir categorias</p>
                </div>
            </a>
            <a href="../receitas/index.php" style="text-decoration:none" class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>02</span>
                    <h4>Gerenciar Receitas</h4>
                    <p>Listar, cadastrar, editar e excluir receitas</p>
                </div>
            </a>
            <a href="../ebooks/index.php" style="text-decoration:none" class="col-lg-4 mt-4 mt-lg-0">
                <div class="box">
                    <span>03</span>
                    <h4>Gerenciar E-books</h4>
                    <p>Listar, cadastrar, editar e excluir e-books</p>
                </div>
            </a>


        </div>
    </div>
  </section>

  </main>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
