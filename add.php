<?php
//Form to add user. Clear visual hierarchy and UX 
// include database connection
require_once 'assets/config/db.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';
//register info to database
require_once 'assets/functions/insert.php';
//include header
require_once 'assets/includes/header.php';
?>

<main class="container mt-5">
    <div class="col-md-5 mx-auto">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="mb-4 text-center">Skapa konto</h2>
                <?php
                // Checks if an action is set
                if (isset($_GET['action'])) {
                    // Checks which action is set
                    switch ($_GET['action']) {
                        case 'inserted':
                            echo '
                            <div class="alert alert-success text-center">
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

                    <button type="submit" class="btn btn-primary w-100" name="register">
                        <i class="fa-solid fa-user-check"></i>
                        Registrera
                    </button>
                    <div class="mt-4 pt-3 border-top text-center">
                        <p class="text-muted mb-0">
                            Har du redan ett konto?
                            <a href="login.php" class="text-primary fw-bold text-decoration-none">
                                Logga in här.
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
//include footer
require_once 'assets/includes/footer.php';   
?>
