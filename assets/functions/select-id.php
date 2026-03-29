<?php
// Checks whether an id exists in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    // Fetches results and creates the variable $row
    $row = $stmt->fetch();
}
