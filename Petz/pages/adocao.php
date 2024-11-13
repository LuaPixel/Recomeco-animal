<?php
// Conexão ao banco de dados
$servername = "localhost"; // Ou o IP do seu servidor
$username = "root"; // Usuário do banco
$password = ""; // Senha do banco
$dbname = "recomeço_animal"; // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber o ID do pet da URL
$id_pet = isset($_GET['id']) ? $_GET['id'] : 0;

// Consulta para obter os detalhes do pet
$sql = "SELECT * FROM pets WHERE id = $id_pet";
$result = $conn->query($sql);

// Verificar se o pet foi encontrado
if ($result->num_rows > 0) {
    $pet = $result->fetch_assoc();
} else {
    echo "Pet não encontrado!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pet</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Pet</h1>

        <div class="card" style="width: 18rem;">
            <img src="<?= empty($pet['img_card']) ? 'https://via.placeholder.com/150' : $pet['img_card'] ?>" class="card-img-top" alt="Imagem do pet">
            <div class="card-body">
                <h5 class="card-title"><?= $pet['raca'] ?> (<?= $pet['especie'] ?>)</h5>
                <p class="card-text"><strong>Sexo:</strong> <?= $pet['sexo'] ?></p>
                <p class="card-text"><strong>Porte:</strong> <?= $pet['porte'] ?></p>
                <p class="card-text"><strong>Idade:</strong> <?= $pet['idade'] ?></p>
                <p class="card-text"><strong>Cidade:</strong> <?= $pet['cidades'] ?></p>
                <p class="card-text"><strong>Estado:</strong> <?= $pet['estados'] ?></p>

                <!-- Formulário de Adoção -->
                <h3>Quer adotar?</h3>
                <form action="adocao_processa.php" method="post">
                    <input type="hidden" name="pet_id" value="<?= $pet['id'] ?>">
                    <div class="form-group">
                        <label for="nome">Seu nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Seu e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Quero adotar!</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Fechando a conexão com o banco de dados
$conn->close();
?>
