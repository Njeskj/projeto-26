<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('db.php');

$user_id = $_SESSION['user_id'];

$sql = "SELECT e.*, te.nome as nome_tipo_edificio FROM edificacoes e
        INNER JOIN tipos_edificios te ON e.id_tipo_edificio = te.id
        WHERE e.id_usuario = $user_id";

$result = $conn->query($sql);

$edificios = array();

while ($row = $result->fetch_assoc()) {
    $edificios[] = $row;
}

header('Content-Type: application/json');
echo json_encode($edificios);

$conn->close();
?>
