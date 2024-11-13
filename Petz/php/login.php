<?php
session_start();
include 'db_config.php'; // Certifique-se de que este arquivo existe e possui a conexão com o banco

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos email e senha estão definidos
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Preparar a consulta
        $sql = "SELECT * FROM cliente WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar se o usuário foi encontrado
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Verifica a senha
            if ($senha === $row['senha']) { // Lembre-se que a senha deve ser criptografada em produção
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['nome'] = $row['nome'];

                // Redirecionar para index após login bem-sucedido
                header("Location: ../pages/index.php");
                exit(); // Parar execução após redirecionamento
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}

// Fechar a conexão
$conn->close();
?>
