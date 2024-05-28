<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=cozinha' , "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  

 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
try {
 

  $stmt = $pdo->prepare('INSERT INTO categorias ( `nome`) VALUES (:nome)');
  $stmt->execute(array(
    ':nome' => $_POST["nome"]
  ));

  header('location: admin.php?message=Categoria cadastrada com sucesso!');
  exit();
} catch(PDOException $e) {
  header('location: ../admin.php?erro=Erro ao salvar');
  echo 'Error: ' . $e->getMessage();
}

   ?>