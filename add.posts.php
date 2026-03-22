<?php
// include database connection
require_once 'assets/config/db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
//register info to database
require_once 'assets/functions/insert_posts.php';
//include header
require_once 'assets/includes/header.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
//register info to database
require_once 'assets/functions/insert_posts.php';
?>

<main class="container mt-5 mb-5">
    <?php
    // Checks if an action is set
    if (isset($_GET['action'])) {
        // Checks which action is set
        switch ($_GET['action']) {
            case 'posted':
                echo '
                <div class="alert alert-success text-center shadow-sm" style="border-radius: 15px;">
                    Inlägg skapat!
                </div>
                ';
                break;
        }
    }
    ?>
    
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm" style="border: 1px solid #e3f2fd; border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="card-title text-center mb-4" style="color: #0b5394;">Skapa nytt inlägg</h3>
                    
                    <form action="add.posts.php" method="post">
                        <div class="mb-3">
                            <label for="subject" class="form-label fw-bold">Rubrik</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Vad behöver du hjälp med?</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tag" class="form-label fw-bold">Kategori</label>
                            <input type="text" class="form-control" id="tag" name="tag" placeholder="#design, #programmering...">
                        </div>
                        
                        <div class="mb-4">
                            <label for="contact" class="form-label fw-bold">Kontakt</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Mail, telefon eller liknande" required>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success btn-lg" name="submit_post">
                                <i class="fa-solid fa-paper-plane me-2"></i> Publicera inlägg
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
//include footer
require_once 'assets/includes/footer.php';
?>