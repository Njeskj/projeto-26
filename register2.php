<?php
require_once('db.php'); // Certifique-se de ter o arquivo db.php configurado corretamente.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar se as senhas coincidem
    if ($password !== $confirm_password) {
        die("Erro: Senhas diferentes.");
    }

    // Verificar se o usuário já existe
    $check_user_query = "SELECT * FROM users WHERE username = '$username'";
    $check_user_result = $conn->query($check_user_query);

    if ($check_user_result->num_rows > 0) {
        die("Erro: Este nome de usuário já está em uso.");
    }

    // Inserir o novo usuário no banco de dados
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $insert_user_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($insert_user_query) === TRUE) {
        // Redirecionar para a página desejada após o cadastro bem-sucedido
        header('Location: register.html');
        exit();
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }
}

$conn->close();
?>