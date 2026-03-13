<?php
// Checks whether the update button has been pressed
if (isset($_POST['modify'])) {
    // Creates a query
    $sql = '
UPDATE users
SET firstname = :firstname,
lastname = :lastname,
email = :email
WHERE user_id = :id
';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':firstname', $_POST['firstname']);
    $stmt->bindValue(':lastname', $_POST['lastname']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':id', $_POST['id']);
    // Sends query to database
    try {
        $stmt->execute();
        header('Location: ../../view.php?action=updated');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
