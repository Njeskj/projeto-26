<?php
session_start();
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

include 'includes/header.php';
include 'includes/nav_dashboard.php';
?>

<body class="bg-light">

  

    <!-- Conteúdo da dashboard -->
    <div class="container mt-5 dash">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Conteúdo da Dashboard -->
                        <div class="resource-container">
                            <div class="resource">
                            <span id="populacao"><i class="fa-solid fa-users"></i> <?php echo $aldeia['populacao']; ?></span>
                            </div>
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
                        </div>

                        <div id="edificios">
                            <h5>Níveis de Edifícios</h5>
                            <p id="nivel_quartel"></p>
                            <p id="nivel_fazenda"></p>
                            <!-- Adicione mais conforme necessário -->
                        </div>

                        <div id="tropas">
                            <h5>Quantidades de Tropas</h5>
                            <p id="quantidade_arqueiro"></p>
                            <p id="quantidade_cavaleiro"></p>
                            <!-- Adicione mais conforme necessário -->
                        </div>

                        <div id="treinamento_tropas">
                            <h5>Tropas em Treinamento</h5>
                            <p id="em_treinamento_arqueiro"></p>
                            <p id="em_treinamento_cavaleiro"></p>
                            <!-- Adicione mais conforme necessário -->
                        </div>

                        <div id="evolucao_edificios">
                            <h5>Evolução de Edifícios</h5>
                            <p id="em_evolucao_quartel"></p>
                            <p id="em_evolucao_fazenda"></p>
                            <!-- Adicione mais conforme necessário -->
                        </div>

                        <div id="troca_recursos">
                            <h5>Troca de Recursos</h5>
                            <p id="troca_recursos_em_andamento"></p>
                            <p id="tempo_troca_recursos"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>
</body>
