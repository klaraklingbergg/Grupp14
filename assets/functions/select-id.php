<?php
// Kontrollera att ID finns i länken
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    // HÄR SKAPAS $row
    $row = $stmt->fetch();
}
