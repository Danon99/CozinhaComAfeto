<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "cozinha";

$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtém os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar se o usuário existe
$sql = "SELECT * FROM administrador WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuário autenticado com sucesso
    echo "<script>alert('Login realizado com sucesso!');</script>";
    echo "<script>window.location.href = '../admin/dashboard.php';</script>";
    exit; // Certifique-se de sair do script após o redirecionamento
} else {
    // Falha na autenticação
    header('location: ../admin.php?erro=Usuário ou senha inválidos.');
}

$conn->close();
?>