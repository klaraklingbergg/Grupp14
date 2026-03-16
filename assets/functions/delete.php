<?php
// Checks whether delete button is pressed
if (isset($_POST['delete'])) {
    // Creates a query
    $sql = 'DELETE FROM users WHERE user_id = :id';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    // Sends query to database
    if ($stmt->execute()) {
        header('Location: view.php?action=deleted');
        exit();
    }
}
