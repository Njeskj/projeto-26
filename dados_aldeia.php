<?php
// Inicie a sessão para acessar as informações do usuário logado
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
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

// Consulta para obter dados da aldeia do usuário
$sql = "SELECT * FROM aldeias WHERE id_usuario = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $aldeia = $result->fetch_assoc();

    // Saída dos dados em formato JSON
    header('Content-Type: application/json');
    echo json_encode($aldeia);
} else {
    echo json_encode(['error' => 'Nenhuma aldeia encontrada para o usuário']);
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
