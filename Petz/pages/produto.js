const params = new URLSearchParams(window.location.search);
const produtoId = params.get("id");
 
const produtos = [
    { id: "2",
    nome: "Conheça a minha história!",
    outros: "Gato | Macho | Filhote | Porte pequeno",
    tituimg: "Tom",
    imagem: "../assets/gato-filho-1.webp",
    descricao: "Tom foi encontrado em uma rua movimentada, magro e assustado. Quando nossa equipe de resgate o encontrou, ele estava escondido embaixo de um carro, tentando escapar da chuva torrencial. Sua pelagem estava suja, com vários nós, e ele parecia ter perdido a confiança em tudo e todos ao seu redor. Após alguns dias de adaptação em nosso abrigo, Tom começou a confiar novamente nas pessoas. Hoje, ele é um gato feliz e saudável, que adora se aninhar em um cantinho confortável, e seus olhos brilham sempre que alguém chega para acariciá-lo. Sua história nos lembra da importância de resgatar, cuidar e oferecer uma segunda chance." },
 
    { id: "1",
    nome: "Golden Retriver",
    outros: "Cachorro | Fêmea | Filhote | Porte grande",
    tituimg: "Mel",
    imagem: "../assets/golden2.png",
    descricao: "Mel chegou até nós após ser encontrada abandonada em uma estrada movimentada. Ela estava assustada e parecia um pouco perdida, mas ainda assim se aproximou da nossa equipe com um olhar doce e esperançoso. Desde então, Mel se revelou uma verdadeira companheira. Ela é extremamente carinhosa e ama a companhia de humanos, especialmente de crianças. Mel também adora brincar na água e correr atrás da bolinha, o que faz dela a parceira perfeita para quem gosta de atividades ao ar livre. Agora, tudo o que ela deseja é um lar acolhedor onde possa retribuir o amor que recebeu." },
 
    { id: "3",
    nome: "Pitbull",
    outros: "Cachorro | Fêmea | Adulto | Porte grande",
    tituimg: "Thor",
    imagem: "../assets/pitbull.jpg",
    descricao: "Thor é um verdadeiro guerreiro. Ele foi resgatado de uma situação complicada e, apesar de tudo, mantém um coração cheio de amor. Com seus olhos expressivos, Thor mostra sua lealdade e adora ficar ao lado de seus cuidadores. Diferente do que muitos imaginam, ele é extremamente dócil e carinhoso, especialmente com aqueles que conquistam sua confiança. Ele se dá bem com outros animais e, acima de tudo, ama longas caminhadas. Thor está esperando alguém que possa ver além dos estereótipos e valorizar o enorme coração que ele carrega."
 
 },
 
    { id: "4",
    nome: "Gata",
    outros: "Gata | Fêmea | Filhote | Porte pequeno",
    tituimg: "Brisa",
    imagem: "../assets/animais_imagem1083138.webp",
    descricao: "Brisa é uma pequena bolinha de pelo cinza que conquistou todos nós desde o primeiro dia. Ela foi resgatada junto com seus irmãos em uma construção abandonada, onde a mãe lutava para manter todos em segurança. Desde que chegou, Nina mostrou seu jeitinho encantador e brincalhão. Ela é curiosa, gosta de explorar cada cantinho e é fã de brinquedos de penas e bolinhas que fazem barulho. Apesar de pequenina, Nina já tem uma personalidade forte e independente, mas sempre volta para perto para buscar carinho e se aninhar. Ela é ideal para uma família que possa dar a atenção e o carinho que um filhote tão doce merece." },

    { id: "5",
        nome: "Vira Lata",
        outros: "Vira lata | Macho | Filhote | Porte médio",
        tituimg: "Max",
        imagem: "../assets/vira_lata.webp",
        descricao: "Max é um caramelo alegre e cheio de vida, que se tornou a alegria da nossa equipe. Ele foi resgatado após ser encontrado vagando sozinho em um parque. Max é um cachorro extremamente amigável, que adora fazer novos amigos, sejam eles humanos ou outros animais. Ele é brincalhão, sempre disposto a correr, mas também ama deitar ao lado das pessoas para ganhar um carinho. Max sonha com um lar onde possa compartilhar sua energia e sua felicidade com uma família que o ame como ele merece." },

    { id: "6",
            nome: "Vira Lata",
            outros: "Vira lata | Fêmea | Filhote | Porte Grande",
            tituimg: "Luna",
            imagem: "../assets/vira-lata-cachorro.jpg",
            descricao: "Luna foi encontrada em uma noite chuvosa, escondida sob um carro, buscando proteção. Ela estava muito magra e bastante assustada, mas bastaram alguns minutos de carinho para que Luna mostrasse seu lado brincalhão e doce. Ela adora brincar de pega-pega e explorar o quintal, sempre cheia de energia e curiosidade. Luna é a cadelinha ideal para uma família que procura uma amiga cheia de vida e disposta a dar muito amor. Hoje, ela só espera pelo dia em que terá uma cama quentinha e um lar seguro." },

    { id: "7",
                nome: "Gata",
                outros: "Gata | Fêmea | Adulta | Porte Médio",
                tituimg: "Estrela",
                imagem: "../assets/estrela.png",
                descricao: "Estrela é uma pequena exploradora de coração gigante. Ela foi encontrada em uma área urbana, tentando sobreviver sozinha, mas não demorou muito para que demonstrasse sua personalidade encantadora. Estrela é uma gata curiosa e independente, mas que adora um carinho. Ela gosta de se aconchegar no colo e ronronar enquanto é acariciada. Estrela procura um lar onde possa explorar e se sentir segura. Ela é ideal para alguém que busque uma companheira carinhosa e que adore uma boa brincadeira." },
         
     { id: "8",
                    nome: "Cachorro",
                    outros: "Cachorro | Macho | Adulto | Porte Médio",
                    tituimg: "Caramelo",
                    imagem: "../assets/caramelo.png",
                    descricao: "Caramelo é o cãozinho que todos adoram por aqui. Ele foi resgatado após ser encontrado sozinho em uma praça, mas nunca perdeu o sorriso e a alegria. Caramelo é super carinhoso e adora brincar com todos, desde crianças até outros animais. Ele tem uma personalidade tranquila, sendo ótimo para famílias que buscam um cachorro amoroso e fiel. Caramelo está sempre pronto para acompanhar a família em novas aventuras e espera ansiosamente pelo dia em que poderá ter um lar só seu." },

     { id: "9",
                        nome: "Gato",
                        outros: "Gato | Macho | Adulto | Porte Grande",
                        tituimg: "Bruce",
                        imagem: "../assets/gato_preto.png",
                        descricao: "Bruce é um gato preto com um olhar profundo e misterioso, mas por trás dessa aparência imponente, ele tem um coração sensível e um pouco tímido. Quando foi resgatado, Bruce estava assustado e temia qualquer aproximação, provavelmente devido ao seu passado difícil. Ele passou um tempo em um ambiente calmo e seguro, onde pôde aprender a confiar novamente nas pessoas. Hoje, Bruce ainda é um pouco receoso, mas quem tem paciência e o tempo necessário para conquistá-lo encontrará um amigo fiel e adorável. Ele gosta de ficar em lugares tranquilos e aprecia quando as pessoas se aproximam devagar e sem pressa. Com o tempo, ele se acostuma com a presença das pessoas e começa a mostrar seu lado carinhoso, ronronando baixinho ao ser acariciado." },
             
 
   
 
 
    // Adicione outros produtos conforme necessário
];
 
const produto = produtos.find(p => p.id === produtoId);
 
if (produto) {
    document.getElementById("produto-nome").textContent = produto.nome;
    document.getElementById("produto-outros").textContent = produto.outros;
    document.getElementById("produto-titu").textContent = produto.tituimg;
    document.getElementById("produto-imagem").src = produto.imagem;
    document.getElementById("produto-descricao").textContent = produto.descricao;
} else {
    document.body.innerHTML = "<h1>Produto não encontrado.</h1>";
}
 
// Função para abrir o modal
function openModal() {
    document.getElementById("contactModal").style.display = "flex";
}
 
// Função para fechar o modal
function closeModal() {
    document.getElementById("contactModal").style.display = "none";
}
 
// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    const modal = document.getElementById("contactModal");
    if (event.target === modal) {
        closeModal();
    }
}
 