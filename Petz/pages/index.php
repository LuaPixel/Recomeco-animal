<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <title>Principal</title>
</head>
<body>
    <header class="reder w-100 d-flex justify-content-center">
        <div class="divisao d-flex align-items-center">
        <a href="../pages/index.php"><h1 class="logo ">Recomeço Animal</h1></a>
            <nav class="d-flex navreder justify-content-around align-items-center">
                <a href="#destino" class="text-decoration-none">Contatos</a>
                <a class="text-decoration-none" href="amigo.php" target="_self">Quero adotar</a>
                <a href="ajudar.html" class="text-decoration-none">Quero ajudar</a>
                <a href="quem.html" class="text-decoration-none">Quem somos</a>
            </nav>
            <button class="entrar" onclick="window.location.href='login.html'">Entrar</button>

        </div>
    </header>
 
    <main class="d-flex justify-content-center main" id="main">
       
        <div class="d-flex flex-column centro justify-content-center align-items-center ">
            <img src="../assets/Um cachorro e um gato juntos fofos, porém reais .jpg" alt="" class="caot d-flex mb-5">
 
            <a class="botao text-black text-decoration-none align-items-center d-flex justify-content-center" href="amigo.php" target="_self">Encontre seu novo amigo</a>
        </div>
 
    </main>

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