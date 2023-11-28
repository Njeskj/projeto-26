<?php
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class='landing-space'>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Login</h2>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    require_once('login2.php');
                }
                ?>
                <form action="login2.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
