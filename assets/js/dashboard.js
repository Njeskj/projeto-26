$(document).ready(function() {
    function obterDadosAldeia() {
        $.ajax({
            url: 'dados_aldeia.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Atualizar os elementos da página com os dados recebidos
                $('#recursos_ouro').text('Ouro: ' + data.recursos_ouro);
                $('#recursos_madeira').text('Madeira: ' + data.recursos_madeira);
                $('#recursos_pedra').text('Pedra: ' + data.recursos_pedra);
                $('#recursos_comida').text('Comida: ' + data.recursos_comida);

                $('#tempo_maximo_recursos').text('Tempo para Estoque Máximo: ' + data.tempo_maximo_recursos);

                $('#nivel_quartel').text('Nível do Quartel: ' + data.nivel_quartel);
                $('#nivel_fazenda').text('Nível da Fazenda: ' + data.nivel_fazenda);
                // Adicione mais conforme necessário para outros elementos

                $('#quantidade_arqueiro').text('Quantidade de Arqueiros: ' + data.quantidade_arqueiro);
                $('#quantidade_cavaleiro').text('Quantidade de Cavaleiros: ' + data.quantidade_cavaleiro);

                $('#em_treinamento_arqueiro').text('Em Treinamento (Arqueiros): ' + data.em_treinamento_arqueiro);
                $('#em_treinamento_cavaleiro').text('Em Treinamento (Cavaleiros): ' + data.em_treinamento_cavaleiro);

                $('#em_evolucao_quartel').text('Em Evolução (Quartel): ' + data.em_evolucao_quartel);
                $('#em_evolucao_fazenda').text('Em Evolução (Fazenda): ' + data.em_evolucao_fazenda);

                $('#troca_recursos_em_andamento').text('Troca de Recursos em Andamento: ' + data.troca_recursos_em_andamento);
                $('#tempo_troca_recursos').text('Tempo para Troca de Recursos: ' + data.tempo_troca_recursos);

                // Chame a função novamente após um intervalo (atualização automática)
                setTimeout(obterDadosAldeia, 5000); // Atualize a cada 5 segundos (ajuste conforme necessário)
            },
            error: function(error) {
                console.log('Erro na requisição AJAX: ' + JSON.stringify(error));
            }
        });
    }

    // Chame a função para a primeira solicitação de dados
    obterDadosAldeia();
});

$(document).ready(function () {
    // Função para obter e exibir os edifícios do usuário
    function obterEdificiosUsuario() {
        $.ajax({
            url: 'obter_edificios.php', // Substitua pelo script que obtém os edifícios do usuário
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Limpar a lista de edifícios antes de atualizar
                $('#lista_edificios').empty();

                // Adicionar cada edifício à lista
                data.forEach(function (edificio) {
                    $('#lista_edificios').append('<li>' + edificio.nome + ' - Nível ' + edificio.nivel + '</li>');
                });
            },
            error: function (error) {
                console.log('Erro na requisição AJAX: ' + JSON.stringify(error));
            }
        });
    }

    // Chamar a função para obter edifícios ao carregar a página
    obterEdificiosUsuario();

    // Manipular o envio do formulário para criar um novo edifício
    $('#form_criar_edificio').submit(function (event) {
        event.preventDefault();

        // Obter o nome do edifício do formulário
        var nomeEdificio = $('#nome_edificio').val();

        // Enviar a solicitação para criar um novo edifício
        $.ajax({
            url: 'criar_edificios.php',
            type: 'POST',
            data: { nome_edificio: nomeEdificio },
            success: function () {
                // Atualizar a lista de edifícios após a criação
                obterEdificiosUsuario();
            },
            error: function (error) {
                console.log('Erro na requisição AJAX: ' + JSON.stringify(error));
            }
        });
    });
});
