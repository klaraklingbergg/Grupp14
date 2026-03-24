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
    <main>
    <h1>Skillswap</h1>
        <p>En plattform där studenter kan dela sina kunskaper med varandra</p>
    <h2>Hur fungerar det?</h2>
        <p>Skapa en profil, skapa ett inlägg, hjälp andra</p>
    <h2>Taggar</h2>

    <div class="dropdown">
        <button class="dropbtn">Välj kurs </button>
        <div class="dropdown-content">
<!--försök till taggar kopplat till tag.php-->
     <ul class="list-unstyled">
        <li>
            <a href="tag.php?tag=programmering" class= "badge bg-primary">#Programmering</a>
        </li>

        <li>
            <a href="tag.php?tag=matematik" class= "badge bg-primary">#Matematik</a>

        </li>

        <li>
            <a href="tag.php?tag=design" class= "badge bg-primary">#Design</a>
        </li>

        <li>
            <a href="tag.php?tag=ux" class= "badge bg-primary">#UX</a>
        </li>
        <li>
            <a href="tag.php?tag=svenska" class= "badge bg-primary">#Svenska</a>
        </li>
    </ul>
        </div>
        </div>

    </main>


</body>
<?php
//include footer
require_once 'assets/includes/footer.php';
?>

</html>