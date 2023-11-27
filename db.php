<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'projeto_26';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
