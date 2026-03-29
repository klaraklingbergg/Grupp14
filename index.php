<?php
//include header
require_once 'assets/includes/header.php';
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';

// Checks if an action is set
if (isset($_GET['action'])) {
    // Checks which action is set
    switch ($_GET['action']) {
        case 'empty':
            echo '
<div class="alert alert-warning">
Du har inte angett någon e-postadress eller lösenord!
</div>
';
            break;
        case 'error':
            echo '
<div class="alert alert-danger">
Du har angett felaktig e-postadress eller lösenord!
</div>
';
            break;
        case 'logout':
            echo '
<div class="alert alert-success">
Du har lyckats logga ut! :-)
</div>
';
            break;
    }
}
?>

<!-- Startpage with a welcome message and a call to action to log in or create an account. -->

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Skillswaphkr</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="background d-flex flex-column text-white">

        <div class="container text-center">
            <h1 class="display-1 fw-bold mb-4 mt-5">Skillswap</h1>
            <p class="lead fs-4 mb-4">En plattform där studenter kan dela sina kunskaper med varandra</p>

            <div class="mb-4">
                <img src="assets/images/skillswap.webp" alt="Skillswap" style="max-width: 500px;">
            </div>

            <div class="mb-4">
                <h2>Hur fungerar det?</h2>
                <p>Skapa en profil, skapa ett inlägg, hjälp andra</p>
            </div>
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="mb-4 ">
                    <a href="view.php" class="btn btn-primary btn-lg me-2">Gå till flöde</a>
                    <a href="add.posts.php" class="btn btn-success btn-lg">Skapa inlägg</a>
                </div>
            <?php else: ?>
                <div class="mb-4 ">
                    <a href="add.php" class="btn btn-primary btn-lg me-2">Skapa konto</a>
                    <a href="login.php" class="btn btn-success btn-lg">Logga in</a>
                </div>
            <?php endif; ?>
        </div>

    </main>

    <?php
    //include footer
    require_once 'assets/includes/footer.php';
    ?>
</body>


</html>