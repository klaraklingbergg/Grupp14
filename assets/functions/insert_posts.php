<?php
// Check if the submit button was pressed
if (isset($_POST['submit_post'])) {
    // Creates a query
    $sql = '
INSERT INTO posts (subject, message, tag, contact, user_id)
VALUES (:subject, :message, :tag, :contact, :user_id)
';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':subject', $_POST['subject']);
    $stmt->bindValue(':message', $_POST['message']);
    $stmt->bindValue(':tag', $_POST['tag']);
    $stmt->bindValue(':contact', $_POST['contact']);
    $stmt->bindValue(':user_id', $_SESSION['user_id']);

    // Sends query to database
    if ($stmt->execute()) {
        header('Location: ../../view.php?action=posted');
        exit();
    }
}
