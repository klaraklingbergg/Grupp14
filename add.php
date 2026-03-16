<?php
//include header
require_once 'assets/includes/header.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
//register info to database
require_once 'assets/functions/insert.php';

?>

<!--Skapa konto-->

<main class="container mt-5">
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
        <div class="row mb-3">
            <label for="firstname" class="col-1 col-form-label">Förnamn</label>
            <div class="col-4">
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastname" class="col-1 col-form-label">Efternamn</label>
            <div class="col-4">
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-1 col-form-label">Email</label>
            <div class="col-4">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-1 col-form-label">Lösenord</label>
            <div class="col-4">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-success" name="register">
            <i class="fa-solid fa-user-check"></i>
            Registrera
        </button>
        <div class="mt-4 pt-3 border-top col-5">
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