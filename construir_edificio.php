<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('db.php');

// Obter o ID do usuário logado
$user_id = $_SESSION['user_id'];

// Verificar se 'id_edificio' está definido na query string
$id_edificio = isset($_POST['id_edificio']) ? $_POST['id_edificio'] : null;

if (!$id_edificio) {
    // Se o id_edificio não estiver presente, redirecionar ou exibir uma mensagem de erro
    echo "ID do edifício não fornecido.";
    exit();
}

// Consulta para obter informações sobre o edifício
$sql_obter_info_edificio = "SELECT * FROM edificacoes WHERE id = ? AND id_usuario = ?";
$stmt_obter_info_edificio = $conn->prepare($sql_obter_info_edificio);
$stmt_obter_info_edificio->bind_param("ii", $id_edificio, $user_id);
$stmt_obter_info_edificio->execute();
$result_obter_info_edificio = $stmt_obter_info_edificio->get_result();

if ($result_obter_info_edificio === false) {
    echo "Erro na consulta: " . $conn->error;
    exit();
}

if ($result_obter_info_edificio->num_rows == 0) {
    // Se o edifício não existir, redirecionar ou exibir uma mensagem de erro
    echo "Edifício não encontrado para o usuário.";
    exit();
}

$edificio = $result_obter_info_edificio->fetch_assoc();

// Processar a construção do edifício (adapte conforme necessário)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lógica para construir o edifício
    // ...

    // Exemplo: Atualizar informações do edifício após a construção
    $nivel_atualizado = $edificio['nivel'] + 1;

    // Consulta para atualizar o nível do edifício
    $sql_atualizar_nivel = "UPDATE edificacoes SET nivel = ? WHERE id = ? AND id_usuario = ?";
    $stmt_atualizar_nivel = $conn->prepare($sql_atualizar_nivel);
    $stmt_atualizar_nivel->bind_param("iii", $nivel_atualizado, $id_edificio, $user_id);

    if ($stmt_atualizar_nivel->execute() === true) {
        echo "Edifício construído com sucesso!";
    } else {
        echo "Erro ao construir o edifício: " . $conn->error;
    }

    // Fechar a conexão
    $stmt_atualizar_nivel->close();
}

// Restante do seu código aqui...

// Fechar a conexão com o banco de dados
$stmt_obter_info_edificio->close();
$conn->close();
?>
