<?php

$dsn = 'mysql:host=127.0.0.1;dbname=cozinha;charset=utf8;';

$conn = new PDO($dsn, 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = 'INSERT INTO `usuarios` 
(`username`, `email`, `password`) 
VALUES 
(:username, :email, :password);';
$stmt = $conn->prepare($query);
$stmt->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

if ($stmt->execute()) {
    header('location: ../login.php?message=Usuário cadastrado com sucesso! Realize o login');
    exit();
} else {
    echo $conn->errorInfo();
}