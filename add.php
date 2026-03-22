<?php
// include database connection
require_once 'assets/config/db.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';
//register info to database
require_once 'assets/functions/insert.php';
//include header
require_once 'assets/includes/header.php';



?>

<!--Skapa konto-->

<main class="container mt-5">
    <div class="col-md-5 mx-auto">
        <h2 class="mb-4">Skapa konto</h2>
        <?php
        // Checks if an action is set
        if (isset($_GET['action'])) {
            // Checks which action is set
            switch ($_GET['action']) {
                case 'inserted':
                    echo '
<div class="alert alert-success">
Användare registrerad!
</div>
';
                    break;
            }
        }
        ?>
        <form action="add.php" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Förnamn</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Efternamn</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Lösenord</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-success w-100" name="register">
                <i class="fa-solid fa-user-check"></i>
                Registrera
            </button>
            <div class="mt-4 pt-3 border-top text-center">
                <p class="text-muted">
                    Har du redan ett konto?
                    <a href="login.php" class="text-primary fw-bold text-decoration-none">
                        Logga in här.
                    </a>
                </p>
            </div>
        </form>

</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>