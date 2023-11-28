<?php
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class="landing-space">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Bem-vindo ao <span id='logo'>LEGENDARIA</span>!</h1>
                <p><span id='frase-container'></span></p>
            </div>
            <div class="col-md-5">
                <form action="processar_inscricao.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inscrever-se</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
