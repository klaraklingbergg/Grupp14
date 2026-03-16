<?php
// Include header
require_once 'assets/includes/header.php';
// Show errors for debugging
require_once 'assets/includes/display_errors.php';
// Include database connection
require_once 'assets/config/db.php';
// Get information to database
require_once 'assets/functions/select.php';

?>

<!-- Flöde -->
<!--LISTA AV ALLA inlägg-->

<main class="container mt-5">
    <h2 class="mb-4">Flöde</h2>

    <?php
    if (isset($_GET['action']))
        switch ($_GET['action']) {
            case 'posted':
                echo '<div class="alert alert-success">Ditt inlägg har publicerats i flödet!</div>';
                break;
            case 'deleted':
                echo '<div class="alert alert-danger">Inlägget har raderats.</div>';
                break;
            case 'updated':
                echo '<div class="alert alert-success">Inlägget har uppdaterats.</div>';
                break;
        }

    // Kolla om det finns några inlägg
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
    ?>
            <div>
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject']; ?> <span class="badge bg-info text-dark"><?php echo $row['tag']; ?></span></h5>
                        <p class="card-text"><?php echo nl2br($row['message']); ?></p>
                        <p class="small text-muted">Kontakt: <?php echo $row['contact']; ?> | Av: <?php echo $row['firstname']; ?></p>

                        <?php if ($_SESSION['user_id'] == $row['user_id']): ?>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-secondary">Redigera</a>
                            <a href="remove.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger">Radera</a>
                        <?php endif; ?>
                    </div>
                </div>
                <!--Cards med de olika inläggen i flödet-->

            </div>



            <!--Om det inte finns några inlägg i flödet-->
    <?php
        }
    } else {
        echo '<div class="alert alert-info">Det finns inga frågor i flödet ännu. Bli den första att fråga!</div>';
    }
    ?>
</main>


<?php
//include footer
require_once 'assets/includes/footer.php';
?>