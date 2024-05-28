<?php
require "conexao.php";
try {
 

  $stmt = $pdo->prepare('INSERT INTO receita ( `nome-receita`, `ingredientes`, `modo-fazer`, foto) VALUES (:nome,  :ingredientes, :modo, :foto)');
  $stmt->execute(array(
    ':nome' => $_POST["nome"],
    ':ingredientes' => $_POST["ingredientes"],
    ':modo' => $_POST["modo"],
    ':foto' => "img/img_1.jpg"
  ));

  echo "Cadastrado com sucesso";
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>