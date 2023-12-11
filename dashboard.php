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
include 'includes/recursos.php';
?>

<body class="bg-light">

  

    <!-- Conteúdo da dashboard -->
    <div class="container mt-5 dash">
        <div class="row">
            <div class="col-md-12">

            

                <div class="card">
                    <div class="card-body">

                        <!-- Seção de Edifícios -->
                        <div id="edificios_usuario">
                            <h5>Edifícios</h5>
                            <ul>
                                <li><a href="edificio.php?tipo=Quartel">Quartel</a></li>
                                <li><a href="edificio.php?tipo=Doca">Doca</a></li>
                                <li><a href="edificio.php?tipo=Doca">Construir Edifício</a></li>
                                <!-- Adicione mais edifícios conforme necessário -->
                            </ul>
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
