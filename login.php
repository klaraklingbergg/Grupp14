<?php
require_once 'assets/config/db.php';
require_once 'assets/functions/session.login.php';
require_once 'assets/includes/header.php';
?>

<!-- Logga in -->

<main class="container mt-5">
    <div class="col-md-5 mx-auto">
        <h2 class="mb-4">Logga in</h2>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label class="form-label">E-post</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Lösenord</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" name="login" class="btn btn-success w-100">Logga in</button>
        </form>

        <?php if (isset($_GET['action']) && $_GET['action'] == 'error'): ?>
            <div class="alert alert-danger mt-3">Fel e-post eller lösenord!</div>
        <?php endif; ?>

        <p class="mt-3 text-center">Ny här? <a href="add.php">Skapa ett konto</a></p>
    </div>
</main>

<?php require_once 'assets/includes/footer.php'; ?>