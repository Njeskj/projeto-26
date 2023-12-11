// Supondo que você esteja usando jQuery
$(document).ready(function () {
    // Função para atualizar o consumo de comida em tempo real
    function atualizarConsumoComida() {
        $.ajax({
            url: 'atualizar_consumo_comida.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Atualizar valores na página conforme necessário
                console.log(`Aldeia ${data.aldeia_id}: Novo consumo de comida - ${data.consumo_comida}`);
                console.log(`Recursos de comida restantes: ${data.recursos_comida}`);
            },
            error: function () {
                console.error('Erro ao atualizar o consumo de comida.');
            }
        });
    }

    // Executar a função a cada 5 minutos (ajuste conforme necessário)
    setInterval(atualizarConsumoComida, 300000); // 300000 milissegundos = 5 minutos
});
