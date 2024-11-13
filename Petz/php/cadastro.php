<?php
session_start();
include 'db_config.php'; // Verifique se o caminho do arquivo de configuração está correto

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos de nome, email e senha foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verifica se o email já existe no banco de dados
        $sql = "SELECT * FROM cliente WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Este email já está cadastrado. Tente outro.";
        } else {
            // Insere o novo usuário
            $sql = "INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nome, $email, $senha);

            if ($stmt->execute()) {
                // Redireciona para a tela de login após o cadastro bem-sucedido
                header("Location: ../pages/login.html");
                exit();
            } else {
                echo "Erro ao cadastrar. Tente novamente.";
            }
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}

// Fecha a conexão
$conn->close();
?>
