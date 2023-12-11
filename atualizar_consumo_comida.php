<?php
// Conectar ao banco de dados (substitua pelos seus dados)
require_once('db.php');

// Consulta para obter dados da aldeia
$sql = "SELECT id, populacao, recursos_comida FROM aldeias";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $aldeia_id = $row['id'];
    $populacao = $row['populacao'];
    $recursos_comida = $row['recursos_comida'];

    // Calcular o consumo de comida com base na população (ajuste conforme necessário)
    $consumo_comida = ceil($populacao * 0.5); // Exemplo: Consumo de 0,5 unidades por unidade de população

    // Deduzir o consumo de comida dos recursos disponíveis
    $recursos_comida -= $consumo_comida;

    // Garantir que o valor não seja negativo
    $recursos_comida = max(0, $recursos_comida);

    // Atualizar o consumo de comida e recursos_comida na tabela
    $update_sql = "UPDATE aldeias SET consumo_comida = $consumo_comida, recursos_comida = $recursos_comida WHERE id = $aldeia_id";
    $conn->query($update_sql);

    // Retornar o novo consumo de comida e recursos_comida
    echo json_encode(['aldeia_id' => $aldeia_id, 'consumo_comida' => $consumo_comida, 'recursos_comida' => $recursos_comida]);
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
