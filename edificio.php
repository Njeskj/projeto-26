<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'includes/header.php';
include 'includes/nav_dashboard.php';
require_once('db.php');

// Consulta para obter todos os tipos de edifícios do banco de dados
$sql_obter_tipos_edificios = "SELECT nome FROM tipos_edificios";
$result_obter_tipos_edificios = $conn->query($sql_obter_tipos_edificios);

if ($result_obter_tipos_edificios->num_rows == 0) {
    echo "Nenhum tipo de edifício encontrado no banco de dados";
    exit();
}

$tipos_validos = array();

while ($row = $result_obter_tipos_edificios->fetch_assoc()) {
    $tipos_validos[] = $row['nome'];
}

// Obter o tipo do edifício da query string
$tipo_edificio = $_GET['tipo'] ?? '';

// Validar o tipo do edifício
if (!in_array($tipo_edificio, $tipos_validos)) {
    echo "Tipo de edifício inválido";
    exit();
}

// Consulta para obter informações sobre o edifício do banco de dados
$sql_obter_info_edificio = "SELECT * FROM tipos_edificios WHERE nome = '$tipo_edificio'";
$result_obter_info_edificio = $conn->query($sql_obter_info_edificio);

if ($result_obter_info_edificio->num_rows == 0) {
    echo "Informações do edifício não encontradas";
    exit();
}

$row = $result_obter_info_edificio->fetch_assoc();
$id_tipo_edificio = $row['id'];
$nome_edificio = $row['nome'];
$recursos_necessarios = json_decode($row['custo_recursos'], true);
$requisitos_edificio = json_decode($row['requisitos'], true);
$tempo_base_construcao = $row['tempo_base_construcao'];

// Exibir informações sobre o edifício
echo '<div class="container mt-5 dash">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo '<div class="card">';
echo '<div class="card-body">';
echo "<h5>$nome_edificio</h5>";

// Adicionar informações específicas sobre o edifício
echo '<p>Descrição: ...</p>';
echo '<p>Recursos necessários: ' . json_encode($recursos_necessarios) . '</p>';
echo '<p>Requisitos: ' . json_encode($requisitos_edificio) . '</p>';
echo '<p>Tempo base de construção: ' . $tempo_base_construcao . ' minutos</p>';

// Adicione aqui mais informações conforme necessário

// Adicione botões para evoluir e demolir
echo '<form action="evolucao_edificios.php" method="post">';
echo '<input type="hidden" name="id_tipo_edificio" value="' . $id_tipo_edificio . '">';
echo '<button type="submit">Evoluir</button>';
echo '</form>';

echo '<form action="demolir_edificio.php" method="post">';
echo '<input type="hidden" name="id_tipo_edificio" value="' . $id_tipo_edificio . '">';
echo '<button type="submit">Demolir</button>';
echo '</form>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

include 'includes/footer.php';
?>
