<?php
// Simule dados de exemplo para a resposta (substitua com seus dados reais)
$dados_dashboard = [
    'recursos_ouro' => 100,
    'recursos_madeira' => 150,
    'recursos_pedra' => 200,
    'recursos_comida' => 50,
    'tempo_maximo_recursos' => '2 horas',
    'nivel_quartel' => 3,
    'nivel_fazenda' => 5,
    'quantidade_arqueiro' => 20,
    'quantidade_cavaleiro' => 10,
    'em_treinamento_arqueiro' => 5,
    'em_treinamento_cavaleiro' => 3,
    'em_evolucao_quartel' => 'Sim',
    'em_evolucao_fazenda' => 'Não',
    'troca_recursos_em_andamento' => 'Sim',
    'tempo_troca_recursos' => '30 minutos'
];

// Saída dos dados em formato JSON
header('Content-Type: application/json');
echo json_encode($dados_dashboard);
?>
