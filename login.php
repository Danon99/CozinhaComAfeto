<?php

$dsn = 'mysql:host=127.0.0.1;dbname=cozinha;charset=utf8;';

$conn = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">      
        <title>Login</title>
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
      </head>
<body>
     <section id="contact" class="contact ">
        
  
        <div class="container mt-5">
          <form action="src/login.php" method="post" class="php-email-form" style="width: 50%; margin: auto;">
            <div class="container">
                <div class="section-title">
                  <h2><span>Login</span></h1>
                  <h3>Seja bem vindo</h3>
                  
                  <?php if(isset($_GET['message'])):?>
                    <div class="alert alert-success" role="alert">
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
                <input type="text" name="username" class="form-control" id="username" placeholder="Nome de usuário" required>
              </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                </div>
              </div>
            <div class="text-center"><a href="index.php" style="    background: #444444;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;">Voltar</a> &emsp;<button type="submit">Login</button></div>
          </form>
        </div>
      </section>
</body>
</html>