$(document).ready(function() {
    // Array de URLs das imagens que você deseja exibir
    const imagens = [
        'http://gmsistemas.000.pe/legendaria/img/wallpaper-index-0001.jpg',
        'http://gmsistemas.000.pe/legendaria/img/wallpaper-index-0002.jpg',
        'http://gmsistemas.000.pe/legendaria/img/wallpaper-index-0003.jpg',
            // Adicione mais URLs conforme necessário
    ];

    // Obtém o contêiner de background
    const backgroundContainer = $('#background-container');

    // Função para alterar a imagem do background
    function alterarBackground() {
        const randomIndex = Math.floor(Math.random() * imagens.length);
        const novaImagem = imagens[randomIndex];
        backgroundContainer.css('background-image', `url(${novaImagem})`);
    }

    // Altera a imagem do background a cada 5 segundos (ajuste conforme necessário)
    setInterval(alterarBackground, 5000);
});