$(document).ready(function () {
    // Função para atualizar os dados da dashboard
    function atualizarDashboard() {
        // Use AJAX para chamar um script PHP que obtém os dados do banco de dados
        $.ajax({
            url: 'obter_dados_dashboard.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Atualizar os elementos da página com os dados obtidos
                $('#recursos_ouro').text('Ouro: ' + data.recursos_ouro);
                $('#recursos_madeira').text('Madeira: ' + data.recursos_madeira);
                $('#recursos_pedra').text('Pedra: ' + data.recursos_pedra);
                $('#recursos_comida').text('Comida: ' + data.recursos_comida);

                $('#nivel_quartel').text('Quartel: Nível ' + data.nivel_quartel);
                $('#nivel_fazenda').text('Fazenda: Nível ' + data.nivel_fazenda);

                $('#quantidade_arqueiro').text('Arqueiros: ' + data.quantidade_arqueiro);
                $('#quantidade_cavaleiro').text('Cavaleiros: ' + data.quantidade_cavaleiro);

                $('#em_treinamento_arqueiro').text('Arqueiros em Treinamento: ' + data.em_treinamento_arqueiro);
                $('#em_treinamento_cavaleiro').text('Cavaleiros em Treinamento: ' + data.em_treinamento_cavaleiro);

                $('#em_evolucao_quartel').text('Quartel em Evolução: ' + data.em_evolucao_quartel);
                $('#em_evolucao_fazenda').text('Fazenda em Evolução: ' + data.em_evolucao_fazenda);

                $('#tempo_maximo_recursos').text('Estoque Máximo em: ' + data.tempo_maximo_recursos);

                $('#troca_recursos_em_andamento').text('Troca de Recursos em Andamento: ' + data.troca_recursos_em_andamento);
                $('#tempo_troca_recursos').text('Tempo Restante para Troca: ' + data.tempo_troca_recursos);
            },
            error: function (error) {
                console.log('Erro na requisição AJAX: ' + JSON.stringify(error));
            }
        });
    }

    // Atualizar a dashboard a cada x segundos (defina um valor adequado)
    setInterval(atualizarDashboard, 5000);
});
