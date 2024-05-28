<?php 
require 'conexao.php';
$lista = $pdo->query("SELECT * FROM receitas;");
$receitas = $lista->fetchall(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Minhas Receitas</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="tabela.css">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>


  <main id="main">

    <div class="site-section site-portfolio">
      <div class="container">
        <div class="row  align-items-center">
          <div class="col-md-12 col-lg-6 " data-aos="fade-up">
            <h2>Cadastrar receitas</h2>
          </div>
       
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
       
        
              
        </div>
      </div>
    </div>




    <div class="site-section pt-0">
      <div class="container">


            <form action="cadastra.php" method="post">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nome da receita</label>
                  <input type="text" name="nome" class="form-control" id="formGroupExampleInput"  style="background-color: rgb(196, 199, 198);">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">foto</label>
                  <input type="file" class="form-control" id="formGroupExampleInput2" style="background-color: rgb(196, 199, 198);">
                </div>
                <br>
                <div class="mb-3">
                    <label for="validationTextarea">Ingredientes</label>
                    <textarea class="form-control" name="ingredientes" id="validationTextarea" style="background-color: rgb(196, 199, 198);" required></textarea>
                    <div class="invalid-feedback">
                      Please enter a message in the textarea.
                    </div>
                 </div>
                 <div class="mb-3">
                    <label for="validationTextarea">Modo de Preparo</label>
                    <textarea class="form-control" name="modo" id="validationTextarea" style="background-color: rgb(196, 199, 198);" required></textarea>
                    <div class="invalid-feedback">
                      Please enter a message in the textarea.
                    </div>
                 </div>
                 <div class="form-group">
                    <input type="submit" class="btn btn-light" id="formGroupExampleInput" >
                  </div>
              </form>


    
        

      </div>
    </div>
  </main>
  <!-- TABLE --> 
  
  <div class="container" >
    <h3 class="text-center">Tabela de Receitas</h3>
    <br>
    <br>
   <table class="table table-action">
  
    <thead>
      <tr>
        <th class="t-small">Nome da Receita</th>
        <th class="t-small">Acões</th>
        
      </tr>
    </thead>
    
    <tbody>
      <?php
      foreach ($receitas as  $value){

      
      ?>
      <tr>
       <td>
         <?= $value["titulo"]?> 
       </td>
        <td><a href="#">editar </a><a href="#">excluir </a></td>
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

  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-right">
          <a href="#"><span class="icofont-twitter"></span></a>
          <a href="#"><span class="icofont-facebook"></span></a>
          <a href="#"><span class="icofont-dribbble"></span></a>
          <a href="#"><span class="icofont-behance"></span></a>
        </div>
      </div>
    </div>
  </footer>

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
