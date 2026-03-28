<?php
// Sektion för att hantera radering. Tydliga knappar för att undvika misstag
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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

<main class="container mt-5">
    <div class="col-md-5 mx-auto">
        <div class="card shadow-sm">
            <div class="card-body p-4 text-center">
                <form action="remove.php" method="post">
                    <h3 class="mb-4"><?php echo $_SESSION['firstname']; ?>, Är du säker på att du vill radera inlägget?</h3>
                    
                    <button class="btn btn-danger w-100" type="submit" name="delete">
                        <i class="fa-solid fa-trash-can"></i> Radera
                    </button>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                </form>
            </div>
        </div>
    </div>
</main>

<?php
//include footer
require_once 'assets/includes/footer.php';
?>
