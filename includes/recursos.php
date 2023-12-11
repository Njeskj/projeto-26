<?php
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

// Conectar ao banco de dados (substitua pelos seus dados)
require_once('db.php');

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter o ID do usuário logado
$user_id = $_SESSION['user_id'];

// Consulta para obter dados da aldeia do usuário
$sql = "SELECT * FROM aldeias WHERE id_usuario = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $aldeia = $result->fetch_assoc();
} else {
    die("Nenhuma aldeia encontrada para o usuário");
}

?>

<div class="container">

<!-- Conteúdo da Dashboard -->
<div class="resource-container">
    <h6 class="resource-text">Recursos:</h6>
    <div class="resource">
    <span id="recursos_ouro"><i class="fa-solid fa-coins"></i> <?php echo $aldeia['recursos_ouro']; ?></span>
    </div>
    <div class="resource">
    <span id="recursos_madeira"><i class="fa-solid fa-tree"></i> <?php echo $aldeia['recursos_madeira']; ?></span>
    </div>
    <div class="resource">
    <span id="recursos_pedra"><i class="fa-solid fa-hill-rockslide"> </i><?php echo $aldeia['recursos_pedra']; ?></span>
    </div>
    <div class="resource">
    <span id="recursos_comida"><i class="fa-solid fa-wheat-awn"></i> <?php echo $aldeia['recursos_comida']; ?></span>
    </div>

    <h6 class="resource-text">População:</h6>
    <div class="resource">
    <span id="populacao"><i class="fa-solid fa-users"></i> <?php echo $aldeia['populacao']; ?></span>
    </div>
    <div class="resource">
    <span id="populacao"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i> <?php echo $aldeia['consumo_comida']; ?></span>
    </div>

</div>

</div>