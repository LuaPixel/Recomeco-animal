<?php
$servername = "localhost"; // Geralmente é localhost
$username = "root"; // Seu nome de usuário do banco de dados
$password = "";   // Sua senha do banco de dados
$dbname = "recomeço_animal"; // O nome do banco de dados que você está usando

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
