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
                        <h5 class="card-title">Bem-vindo, <?php echo $_SESSION['username']; ?>!</h5>
                        <p class="card-text">Este é um exemplo de conteúdo na sua dashboard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    ?>
</body>
