<?php
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class='landing-space'>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Registrar</h2>
                <form action="register2.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">usuario</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
