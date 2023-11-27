// Código JavaScript para carregar e exibir frases dinamicamente
document.addEventListener('DOMContentLoaded', function () {
    // Carrega as frases do arquivo JSON
    fetch('assets/json/frases.json')
        .then(response => response.json())
        .then(frases => {
            // Escolhe uma frase aleatória
            const fraseAleatoria = frases[Math.floor(Math.random() * frases.length)];

            // Atualiza o conteúdo da frase no elemento HTML
            document.getElementById('frase-container').textContent = fraseAleatoria;
        })
        .catch(error => console.error('Erro ao carregar frases:', error));
});