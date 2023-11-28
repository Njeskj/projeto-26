<?php
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class='landing-space'>

    <div class="container">
        <h2>Registro de Usuário</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="register2.php" method="post">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar Senha:</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php
include 'includes/footer.php';
?>
