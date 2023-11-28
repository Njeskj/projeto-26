<?php
// Inicie a sessão para acessar as informações do usuário logado
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'Usuário não autenticado']);
    exit();
}

// Conectar ao banco de dados (substitua pelos seus dados)
require_once('db.php');

// Verificar a conexão
if ($conn->connect_error) {
    echo json_encode(['error' => 'Falha na conexão com o banco de dados']);
    exit();
}

// Obter o ID do usuário logado
$user_id = $_SESSION['user_id'];

// Consulta para obter dados da aldeia do usuário (exemplo)
$sql = "SELECT * FROM aldeias WHERE id_usuario = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Extrair os dados da aldeia do primeiro registro (pode ajustar conforme necessário)
    $aldeia = $result->fetch_assoc();

    // Você pode adicionar mais campos conforme necessário
    $dados_dashboard = [
        'recursos_ouro' => $aldeia['recursos_ouro'],
        'recursos_madeira' => $aldeia['recursos_madeira'],
        'recursos_pedra' => $aldeia['recursos_pedra'],
        'recursos_comida' => $aldeia['recursos_comida'],
        'nivel_quartel' => $aldeia['nivel_quartel'],
        'nivel_fazenda' => $aldeia['nivel_fazenda'],
        'quantidade_arqueiro' => $aldeia['unidades_defesa_arqueiro'],
        'quantidade_cavaleiro' => $aldeia['unidades_defesa_cavaleiro'],
        'em_treinamento_arqueiro' => $aldeia['tropas_em_treinamento'],
        // Adicione mais campos conforme necessário
    ];

    echo json_encode($dados_dashboard);
} else {
    echo json_encode(['error' => 'Nenhuma aldeia encontrada para o usuário']);
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
