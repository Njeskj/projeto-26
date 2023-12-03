// Adicione um evento de clique para o link "Início"
document.getElementById('to-top-link').addEventListener('click', function (e) {
    e.preventDefault(); // Impede o comportamento padrão de navegação

    // Rola suavemente até o topo da página
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Rola suavemente
    });
});