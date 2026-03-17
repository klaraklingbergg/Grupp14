<?php
// Include database connection
require_once 'assets/config/db.php';
// Delete information from database
require_once 'assets/functions/delete.php';
// Show errors for debugging
require_once 'assets/includes/display_errors.php';

// Kontrollera om session id finns 
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header('Location: index.php?action=error'); // Skicka till start med felmeddelande 
    exit();
}
// Get specific information about user
require_once 'assets/functions/select-id.php';
// Include header
require_once 'assets/includes/header.php';
?>

<!--Ta bort sitt inlägg-->
<main class="container mt-5">
    <form action="remove.php" method="post">
        <div class="row">
            <p>Är du säker på att du vill radera inlägget?</p>
        </div>

        <button class="btn btn-danger" type="submit" name="delete">
            <i class="fa-solid fa-trash-can"></i> Radera
        </button>
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    </form>



</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>