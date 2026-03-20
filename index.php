<!--STARTSIDA-->
<!--bild,rubrik, beskrivning, knappar för att skapa inlägg-->

<?php
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
//include header
require_once 'assets/includes/header.php';
?>
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
<!--försök till taggar kopplat till tag.php-->
    <ul class="list-unstyled d-flex gap-2 flex-wrap">
        <li>
            <a href="tag.php?programmering" class= "badge bg-primary">#Programmering</a>
        </li>

        <li>
            <a href="tag.php?matematik" class= "badge bg-primary">#Matematik</a>

        </li>

        <li>
            <a href="tag.php?design" class= "badge bg-primary">#Design</a>
        </li>

        <li>
            <a href="tag.php?ux" class= "badge bg-primary">#UX</a>
        </li>
        <li>
            <a href="tag.php?svenska" class= "badge bg-primary">#Svenska</a>
        </li>
    </ul>
    </main>


</body>
<?php
//include footer
require_once 'assets/includes/footer.php';
?>

</html>