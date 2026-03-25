<?php
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
//register info to database
require_once 'assets/functions/insert.php';
//include header
require_once 'assets/includes/header.php';
$sql = "SELECT * FROM posts WHERE user_id = :user_id ORDER BY regdate DESC";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':user_id', $_SESSION['user_id']);
$stmt->execute();
?>

<main>
    <class="container mt-5">
        <?php
        if (isset($_GET['action']))
            switch ($_GET['action']) {
                case 'posted':
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fas fa-check-circle me-2"></i> Ditt inlägg har publicerats i flödet!
                          </div>';
                    break;
                case 'deleted':
                    echo '<div class="alert alert-danger">Inlägget har raderats.</div>';
                    break;
                case 'updated':
                    echo '<div class="alert alert-success">Inlägget har uppdaterats.</div>';
                    break;
            }
        ?>
        <div class="text-center mb-5 mt-5">
            <h1>Välkommen, <?php echo $_SESSION['firstname']; ?>!</h1>
            <a href="add.posts.php" class="btn btn-warning" style="border-radius: 15px;">
                <i class="fa-solid fa-plus"></i> Ställ en ny fråga
            </a>


        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="mb-4 border-bottom pb-2">Mina inlägg</h3>

                <?php
                // KONTROLLERA OM DU HAR NÅGRA INLÄGG
                if ($stmt->rowCount() > 0) {
                    // LOOPA IGENOM OCH VISA VARJE INLÄGG
                    while ($row = $stmt->fetch()) {
                ?>
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title"><?php echo $row['subject']; ?></h5>
                                    <span class="badge bg-warning text-dark"><?php echo $row['tag']; ?></span>
                                </div>
                                <p class="card-text"><?php echo nl2br($row['message']); ?></p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">Publicerat: <?php echo $row['regdate']; ?></small>
                                    <div>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-secondary">Redigera</a>
                                        <a href="remove.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger">Radera</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    // Om användaren inte har skapat några inlägg än
                    echo '<div class="alert alert-info text-center">Du har inte skapat några inlägg än.</div>';
                }
                ?>
            </div>
        </div>
</main>

<?php
//include footer
require_once 'assets/includes/footer.php';
?>