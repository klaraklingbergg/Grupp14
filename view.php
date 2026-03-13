<!-- ADMINISTRATIONS VY -->
<!--LISTA AV ALLA ANVÄNDARE-->
<?php
// Show errors for debugging
require_once 'assets/includes/display_errors.php';
// Include database connection
require_once 'assets/config/db.php';
// Get information to database
require_once 'assets/functions/select.php';
// Include header
require_once 'assets/includes/header.php';
?>

<main class="container mt-5">
    <?php
    // Checks if an action is set
    if (isset($_GET['action'])) {
        // Checks which action is set
        switch ($_GET['action']) {
            case 'updated':
                echo '
<div class="alert alert-success">
Posten har uppdaterats i databasen!
</div>
';
                break;
        }
    }
    ?>
    <table class="table table-bordered mt-4">
        <tr>
            <th>#</th>
            <th>Förnamn</th>
            <th>Efternamn</th>
            <th>E-post</th>
            <th colspan="2">Administration</th>
        </tr>
        <?php
        // Checks whether database is empty
        if ($stmt->rowCount() > 0) {
            // Get users from database
            while ($row = $stmt->fetch()) {
                // Prints out users to HTML
                echo '
<tr>
<td>' . $row['user_id'] . '</td>
<td>' . $row['firstname'] . '</td>
<td>' . $row['lastname'] . '</td>
<td>' . $row['email'] . '</td>
<td>
<i class="fa-solid fa-pen-to-square"></i>
<a href="edit.php?id=' . $row['user_id'] . '">Uppdatera</a>
</td>
<td>
<i class="fa-solid fa-trash"></i>
<a href="remove.php?id=' . $row['user_id'] . '">Radera</a>
</td>

</tr>
';
            }
        } else {
            // Prints out message that database is empty
            echo '
<tr>
<td colspan="5">Inga användare i databasen</td>
</tr>
';
        }
        ?>

    </table>
</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>