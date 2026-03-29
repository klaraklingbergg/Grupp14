<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Include database connection
require_once 'assets/config/db.php';
// Show errors for debugging
require_once 'assets/includes/display_errors.php';
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header('Location: index.php'); // Skicka till startsidan om man inte är inloggad
    exit();
}

// Update information to database
require_once 'assets/functions/update.php';
// Get specific information about user
require_once 'assets/functions/select-id.php';
// Include header
require_once 'assets/includes/header.php';

?>

<!-- Form to edit a post. -->

<main class="container mt-5">
    <?php
    // Checks if an action is set
    if (isset($_GET['action'])) {
        // Checks which action is set
        switch ($_GET['action']) {
            case 'inserted':
                echo '
<div class="alert alert-success">
Inlägget har uppdaterats!
</div>
';
                break;
        }
    }
    ?>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label class="form-label">Rubrik</label>
            <input type="text" class="form-control" name="subject" value="<?php echo $row['subject']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Meddelande</label>
            <textarea class="form-control" name="message" rows="4"><?php echo $row['message']; ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" class="form-control" name="tag" value="<?php echo $row['tag']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Kontakt</label>
            <input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
        </div>

        <button type="submit" name="modify" class="btn btn-primary">Spara ändringar</button>
    </form>

</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>