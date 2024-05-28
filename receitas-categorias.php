<?php

$dsn = 'mysql:host=127.0.0.1;dbname=cozinha;charset=utf8;';

$conn = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = 'SELECT * FROM receitas ;';
$stmt = $conn->query($query);
$receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = 0;
?>
<?php foreach($receitas as  $receita): ?>
                    <div class="col-lg-6 menu-item filter-bolo">
                        <div class="menu-content">
                            <a href="#"><?= $receita['titulo'] ?></a><span></span>
                        </div>
                    </div>
                    <?php endforeach; ?>