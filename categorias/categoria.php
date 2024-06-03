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

    <!-- =======================================================
  * Template Name: Delicious
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">
  

  <section id="contact" class="contact ">
        
  
        <div class="container mt-5">
        
          <form action="cadastra.php" method="post" class="php-email-form" style="width: 70%; margin: auto;">
            <div class="container">
            <div class="col-lg-12" style="text-align: right;">
              <a href="../admin/dashboard.php" type="button" class="btn btn-secondary rounded-pill">Voltar</a>
            </div>
                <div class="section-title">
                  <h2><span>Cadastro de categorias</span></h1>
                  <h3>Seja bem vindo Administrador</h3><br>

                  <?php if(isset($_GET['message'])):?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?= $_GET['message']?>
                    </div>
                  <?php endif; ?>

                  <?php if(isset($_GET['erro'])):?>
                    <div class="alert alert-danger" role="alert">
                      <?= $_GET['erro']?>
                    </div>
                  <?php endif; ?>
                  
                  
                </div>
              </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da categoria" required>
              </div>
            </div>

            <div class="text-center"><button  type="submit">Salvar</button></div>
          </form>
        </div>
      </section>

  </main>
  <!-- TABLE --> 
  
  <div class="container" >
    <h3 class="text-center">Tabela de Categorias</h3>
    <br>
    <br>
   <table class="table table-action">
  
    <thead>
      <tr>
        <th class="t-small">Nome</th>
        <th class="t-small">Acões</th>
        
      </tr>
    </thead>
    
    <tbody>
      <?php
      foreach ($categorias as  $value){

      
      ?>
      <tr>
       <td>
         <?= $value["nome"]?> 
       </td>
        <td><button type="button" class="btn btn-outline-warning btn-sm">Editar</button>
<button type="button" class="btn btn-outline-danger btn-sm">Excluir</button></td>
      </tr>
      <?php
     }
      ?>
    
    </tbody>
  </table>
  <!-- END TABLE -->
  <br>
  <br>
  <br>
  <br>
  <br>
  </div>

  
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
