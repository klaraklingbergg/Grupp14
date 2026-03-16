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

<!--redigera inlägg-->

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
    <div class="mb-3">
        <label class="form-label">Rubrik</label>
        <input type="text" class="form-control" name="subject" value="<?php echo $row['subject']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Meddelande</label>
        <textarea class="form-control" name="message" rows="4"><?php echo $row['message']; ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Kontakt</label>
        <input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
    </div>
    
    <button class="btn btn-primary" type="submit" name="modify">Spara ändringar</button>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
</form>

</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>