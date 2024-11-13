<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Recomeço Animal</title>
</head>
<body>
    <header class="reder w-100 d-flex justify-content-center">
        <div class="divisao d-flex align-items-center">
        <a href="../pages/index.php"><h1 class="logo ">Recomeço Animal</h1></a>
            <nav class="d-flex navreder justify-content-around align-items-center">
                <a href="#destino" class="text-decoration-none ancora">Contatos</a>
                <a class="text-decoration-none ancora" href="amigo.php" target="_self">Quero adotar</a>
                <a href="ajudar.html" class="text-decoration-none ancora">Quero ajudar</a>
                <a href="quem.html" class="text-decoration-none ancora">Quem somos</a>
            </nav>
            <button class="entrar">Entrar</button>
        </div>
    </header>
    
        <form method="get" >
            <section class="sec justify-content-center d-flex">
             <div class="divi d-flex justify-content-center align-items-center justify-content-around w-50">
                    <input type="text" name="pesquisa" class="form-control barra w-75" placeholder="Pesquise por espécie, raça ou cidade" value="<?= htmlspecialchars($pesquisa ?? '') ?>">
                    <button class="search" type="submit">BUSCAR</button>
             </div>
            </section>
         </form>
    



    <div class="container-fluid w-100 d-flex flex-row  d-flex align-items-center justify-content-center">
    <?php
// Inclua a conexão com o banco de dados
include '../php/conexao.php';

// Verifica se o formulário foi enviado e define a pesquisa
$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';

// Consulta ao banco de dados para a busca de pets
$sql = "SELECT * FROM pets WHERE especie LIKE '%$pesquisa%' OR raca LIKE '%$pesquisa%' OR cidades LIKE '%$pesquisa%' OR estados LIKE '%$pesquisa%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Contêiner centralizado com mais espaçamento
    echo '<div class="container d-flex justify-content-center" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 35px; max-width: 1200px; margin: 0 auto;">';

    // Exibindo os resultados em cards
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card shadow-sm" style="width: 300px; border-radius: 15px; min-height: 400px;">';  
        
        $img_src = empty($row['img_card']) ? 'https://via.placeholder.com/150' : $row['img_card'];
        echo '<img src="' . $img_src . '" class="card-img-top" alt="Imagem do pet" style="object-fit: cover; height: 200px; border-top-left-radius: 15px; border-top-right-radius: 15px;">';

        // Ajuste no card-body
        echo '<div class="card-body d-flex flex-column" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; flex-grow: 1;">';
        echo '<h5 class="card-title text-center mb-3">' . $row['nome'] . '</h5>';

        echo '<div style="background-color: #d28a76; padding: 10px; border-radius: 10px; color: black; border: none;">';
        echo '<p class="card-text"><strong>Raça:</strong> ' . $row['raca'] . '</p>';
        echo '<p class="card-text"><strong>Sexo:</strong> ' . $row['sexo'] . '</p>';
        echo '<p class="card-text"><strong>Porte:</strong> ' . $row['porte'] . '</p>';
        echo '<p class="card-text"><strong>Idade:</strong> ' . $row['idade'] . '</p>';
        echo '<p class="card-text"><strong>Cidade:</strong> ' . $row['cidades'] . '</p>';
        echo '<p class="card-text"><strong>Estado:</strong> ' . $row['estados'] . '</p>';
        echo '</div>';

        // Ajustando a posição do botão com padding
        echo '<div class="mt-auto" style="padding-top: 20px;">';
        echo '<a href="../pages/produto.html?id=' . $row['id'] . '" class="btn" style="background-color: #d28a76; color: white; border-radius: 10px; border: none; width: 100%;">Adote-me</a>';
        echo '</div>';

        echo '</div>';
        echo '</div>';
    }

    // Fechando a div do contêiner
    echo '</div>';
} else {
    echo '<p style="text-align: center;">Nenhum pet encontrado.</p>';
}
?>



</div>

</div>


    <footer>
        <section id="destino">
            <div class="foter text-center d-flex justify-content-center align-items-center">
                <p class="cor">
                    📞 Telefone: (31) 9988-1122 <br>
                    ✉️ E-mail: contato@seuprojeto.com <br>
                    💬 Redes Sociais: <a href="#" class="text-decoration-none">Instagram</a> | <a href="#" class="text-decoration-none">Facebook</a> | <a href="#" class="text-decoration-none">Twitter</a>
                    <br>📍 Endereço: Rua dos Animais, 123 – Contagem, Eldorado
                </p>
            </div>
        </section>
    </footer>
</body>
</html>
