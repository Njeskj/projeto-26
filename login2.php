<?php
// Inicie a sessão
session_start();

// Conectar ao banco de dados (substitua pelos seus dados)
require_once('db.php');

// Verificar a conexão
if ($conn->connect_error) {
    echo json_encode(['error' => 'Falha na conexão com o banco de dados']);
    exit();
}

// Verificar se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verificar a senha
        if (password_verify($password, $hashed_password)) {
            // Credenciais corretas, iniciar a sessão
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header('Location: dashboard.php');
        } else {
            echo json_encode(['error' => 'Senha incorreta']);
        }
    } else {
        echo json_encode(['error' => 'Usuário não encontrado']);
    }
} else {
    echo json_encode(['error' => 'Método de requisição inválido']);
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
