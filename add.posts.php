<?php
// include database connection
require_once 'assets/config/db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//register info to database
require_once 'assets/functions/insert_posts.php';
//include header
require_once 'assets/includes/header.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';

?>

<!--Skapa inlägg-->
<!--skickas till flöde-->



<main class="container mt-5">
    <?php
    // Checks if an action is set
    if (isset($_GET['action'])) {
        // Checks which action is set
        switch ($_GET['action']) {
            case 'posted':
                echo '
<div class="alert alert-success">
Inlägg skapat!
</div>
';
                break;
        }
    }
    ?>
    <form action="add.posts.php" method="post">
        <div class="row mb-3">
            <label for="subject" class="col-1 col-form-label">Rubrik</label>
            <div class="col-4">
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
        </div>
        <div class="row mb-3">
            <label for="message" class="col-1 col-form-label">Vad behöver du hjälp med?</label>
            <div class="col-4">
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tag" class="col-1 col-form-label">Kategori</label>
            <div class="col-4">
                <input type="text" class="form-control" id="tag" name="tag" placeholder="#">
            </div>
        </div>
        <div class="row mb-3">
            <label for="contact" class="col-1 col-form-label">Kontakt</label>
            <div class="col-4">
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Mail, telefon eller liknande">
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-success" name="submit_post">
            <i class="fa-solid fa-paper-plane"></i>
            Publicera inlägg
        </button>
    </form>

</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>