<?php

$dsn = 'mysql:host=127.0.0.1;dbname=cozinha;charset=utf8;';

$conn = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = 'SELECT * FROM ebooks;';
$stmt = $conn->query($query);
$ebooks = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = 0;
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

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <section id="chefs" class="chefs">

      <div class="container">
      <div class="col-lg-12" style="text-align: right;">
      <a href="index.php" class="book-a-table-btn scrollto">Sair</a>
    </div>
      

        <div class="section-title">
          <h2>E-books</h2>
          

        </div>

        <div class="row">

        <?php foreach($ebooks as  $value): ?>

        <a class="col-lg-4 col-md-6" href="<?= $value['link'] ?>" target="blank">
            <div class="member">
              <div class="pic"><img src="<?='http://localhost/cozinhacomafeto-main/src/ebooks/upload/'. $value['foto'] ?>" class="img-fluid" alt="" style="max-width:300px;max-height:400px;width: auto;height: auto;"></div>
              <div class="member-info">
                <h4><?= $value['titulo'] ?></h4>
              </div>
            </div>
        </a>
          
        <?php endforeach; ?>
          

        </div>

      </div>
    </section>
  <footer id="footer">
    <div class="container">
      <h3>Cozinha com Afeto</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy;  <strong><span>Cozinha com Afeto</span></strong>. Todos os direitos reservados
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>