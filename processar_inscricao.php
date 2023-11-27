<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Aqui você pode processar os dados do formulário (por exemplo, salvar no banco de dados).
    // Por agora, apenas exibiremos os dados inseridos.
    echo "<h2>Inscrição Recebida</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
}
?>
