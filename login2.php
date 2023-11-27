<?php
session_start();
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para obter a senha hash do usuário
    $get_user_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($get_user_query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $hashed_password = $user['password'];

        // Verificar se a senha fornecida coincide com a senha hash no banco de dados
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        } else {
            $error = "Credenciais inválidas. Tente novamente.";
        }
    } else {
        $error = "Usuário não encontrado.";
    }
}
?>
