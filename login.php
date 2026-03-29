<?php
// Inloggningsformulär med Bootstrap 5. Koden är granskad enligt W3C.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'assets/config/db.php';
require_once 'assets/includes/display_errors.php';

// Checks whether submit button has been set
if (isset($_POST['login'])) {
    // Checks whether e-mail or password are empty
    if (empty($_POST['email']) || empty($_POST['password'])) {
        // Redirect user to error page
        header('Location:index.php?action=empty');
        exit();
    }

    // Trims e-mail and password
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Creates, prepares, binds and executes a query
    $sql = '
SELECT *
FROM users
WHERE email = :email
AND password = :password
';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    // Counts rows returned from database
    $count = $stmt->rowCount();
    // Checks whether user exists
    if ($stmt->rowCount() > 0) {
        // Saves results to variable
        $row = $stmt->fetch();
        // Creates session variable with user id
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['firstname'];
        // Redirects user to success page
        header('Location: view.php');
        exit();
    } else {
        // Redirect user to error page
        header('Location:index.php?action=error');
        exit();
    }
}
require_once 'assets/includes/header.php';
?>
<main class="container mt-5">
    <div class="col-md-5 mx-auto">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h2 class="mb-4 text-center">Logga in</h2>

                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">E-post</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lösenord</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-success w-100">Logga in</button>
                </form>

                <?php if (isset($_GET['action']) && $_GET['action'] == 'error'): ?>
                    <div class="alert alert-danger mt-3 text-center">Fel e-post eller lösenord!</div>
                <?php endif; ?>

                <p class="mt-4 mb-0 text-center">Ny här? <a href="add.php" class="text-decoration-none">Skapa ett konto</a></p>
            </div>
        </div>
    </div>
</main>

<?php 
// Include footer
require_once 'assets/includes/footer.php'; ?>  


