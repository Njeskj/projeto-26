<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

include 'includes/header.php';
include 'includes/nav_dashboard.php';
?>

<body class="bg-light">

  

    <!-- Conteúdo da dashboard -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Bem-vindo, <?php echo $_SESSION['username']; ?>!</h5> -->
                        
                        <div id="recursos">
                            <h5>Recursos</h5>
                            <p id="recursos_ouro"></p>
                            <p id="recursos_madeira"></p>
                            <p id="recursos_pedra"></p>
                            <p id="recursos_comida"></p>
                        </div>

                        <div id="estoque_maximo">
                            <h5>Estoque Máximo de Recursos</h5>
                            <p id="tempo_maximo_recursos"></p>
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
