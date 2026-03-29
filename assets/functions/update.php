<?php
// Checks if a session has already been started, if not, start a new session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Checks whether the update button has been pressed
if (isset($_POST['modify'])) {
    // Creates a query
    $sql = 'UPDATE posts
SET subject = :subject, 
            message = :message, 
            tag = :tag, 
            contact = :contact 
        WHERE id = :id AND user_id = :my_id';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':subject', $_POST['subject']);
    $stmt->bindValue(':message', $_POST['message']);
    $stmt->bindValue(':tag', $_POST['tag']);
    $stmt->bindValue(':contact', $_POST['contact']);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->bindValue(':my_id', $_SESSION['user_id']);
    // Sends query to database
    try {
        $stmt->execute();
        header('Location: profile.php?action=updated');
        exit();

    } catch (PDOException $e) {
        echo "Fel: " . $e->getMessage();
    }
}
