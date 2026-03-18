<?php
// Checks whether delete button is pressed
if (isset($_POST['delete'])) {
    // Creates a query
    $sql = 'DELETE FROM posts WHERE id = :id AND user_id = :my_id';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->bindValue(':my_id', $_SESSION['user_id'], PDO::PARAM_INT);
    // Sends query to database
    if ($stmt->execute()) {
        header('Location: profile.php?action=deleted');
        exit();
    }
}
