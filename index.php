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
<!--Felmeddelande vid inloggning^^-->

<!--STARTSIDA-->
<!--bild,rubrik, beskrivning, knappar för att skapa inlägg-->

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
    <!--Taggar, header osv-->
    <main class="background vh-100 d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-1 fw-bold mb-4 mt-5">Skillswap</h1>
            <p class="lead fs-4 mb-4">En plattform där studenter kan dela sina kunskaper med varandra</p>
            <div class="mb-4 text-center">
                <a href="add.php" class="btn btn-primary btn-lg me-2">Skapa konto</a>
                <a href="login.php" class="btn btn-success btn-lg">Logga in</a>
            </div>
            <!--LÄGGA IN BILD HÄR-->
            <div class="mb-4">
                <img src="assets/images/" alt="Skillswap" class="img-fluid">
            </div>
            <div class="mb-4">
                <h2>Hur fungerar det?</h2>
                <p>Skapa en profil, skapa ett inlägg, hjälp andra</p>
            </div>
            <h2>Taggar</h2>
            <!--försök till taggar kopplat till tag.php-->
            <ul class="list-unstyled d-flex gap-2 flex-wrap">
                <li>
                    <a href="tag.php?programmering" class="badge bg-primary">#Programmering</a>
                </li>

                <li>
                    <a href="tag.php?matematik" class="badge bg-primary">#Matematik</a>

                </li>

                <li>
                    <a href="tag.php?design" class="badge bg-primary">#Design</a>
                </li>

                <li>
                    <a href="tag.php?ux" class="badge bg-primary">#UX</a>
                </li>
                <li>
                    <a href="tag.php?svenska" class="badge bg-primary">#Svenska</a>
                </li>
            </ul>
        </div>
    </main>


</body>
<?php
//include footer
require_once 'assets/includes/footer.php';
?>

</html>