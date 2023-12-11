<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Cadastro</a></li>
                <li class="nav-item"><a class="nav-link" href="doc.php">Documentação</a></li>
            </ul>
        </div>
    </nav> -->

<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?php if (isset($_SESSION['username'])): ?>
        <!-- Links quando o usuário está autenticado -->
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Bem-vindo, <?php echo $_SESSION['username']; ?>!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Aldeia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doc.php">Documentação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    <?php else: ?>
        <!-- Links quando o usuário não está autenticado -->
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Cadastro</a></li>
                <li class="nav-item"><a class="nav-link" href="atualizacoes.php">Atualizações</a></li>
            </ul>
        </div>
    <?php endif; ?>
</nav>



