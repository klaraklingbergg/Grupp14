<?php
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
//register info to database
require_once 'assets/functions/insert.php';
//include header
require_once 'assets/includes/header.php';
?>

<main>
    <h1 class="text-center mt-5">Min profil</h1>
    <p class="text-center">Här kan du se och redigera dina inlägg</p>
</main>

<?php
//include footer
require_once 'assets/includes/footer.php';
?>