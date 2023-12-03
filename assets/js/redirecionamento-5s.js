 // Função para atualizar a contagem regressiva e redirecionar após 5 segundos
 function countdown() {
    var seconds = 5;
    var countdownElement = document.getElementById('countdown');

    var countdownInterval = setInterval(function() {
        seconds--;
        countdownElement.textContent = seconds;

        if (seconds <= 0) {
            clearInterval(countdownInterval);
            // Redirecionar para outra página após 5 segundos
            window.location.href = 'outra_pagina.php';
        }
    }, 1000);
}

// Chamar a função de contagem regressiva ao carregar a página
window.onload = countdown;