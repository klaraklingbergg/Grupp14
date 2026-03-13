<?php
// Include database connection
require_once 'assets/config/db.php';
// Update information to database
require_once 'assets/functions/update.php';
// Show errors for debugging
require_once 'assets/includes/display_errors.php';
// Get specific information about user
require_once 'assets/functions/select-id.php';
// Include header
require_once 'assets/includes/header.php';
?>

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
    <form action="edit.php" method="post">
        <div class="row mb-3">
            <label for="firstname" class="col-1 col-form-label">Förnamn</label>
            <div class="col-4">
                <input type="text" class="form-control" id="firstname" name="firstname"
                    value="<?php echo $row['firstname']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastname" class="col-1 col-form-label">Efternamn</label>
            <div class="col-4">
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php
                                                                                                echo $row['lastname']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-1 col-form-label">E-post</label>
            <div class="col-4">
                <input type="email" class="form-control" id="email" name="email" value="<?php
                                                                                        echo $row['email']; ?>">
            </div>
        </div>

        <button class="btn btn-primary d-flex" type="submit" name="modify">
            <i class="fa-solid fa-pen"></i> Uppdatera information
        </button>
        <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">

    </form>

    <div class="mt-4 pt-3 border-top col-5">
        <p class="text-muted">
            Har du redan ett konto?
            <a href="login.php" class="text-primary fw-bold text-decoration-none">
                Logga in här.
            </a>
        </p>
    </div>

</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>