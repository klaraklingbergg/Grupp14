<?php
// 1. Starta sessionen först av allt
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['login'])) { // Kollar om knappen 'login' är tryckt
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Skapar en SQL-fråga för att hämta användaren baserat på e-post
    $sql = 'SELECT * FROM users WHERE email = :email';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $row = $stmt->fetch();

    // 3. Kontrollera om användaren finns OCH om lösenordet stämmer
    if ($row && $password == $row['password']) {

        // HÄR SKAPAS KOPPLINGEN (Det viktigaste!)
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['firstname'];



        // Skicka till startsidan
        header('Location: profile.php');
        exit();
    } else {
        // Om det blir fel, skicka tillbaka med ett felmeddelande
        header('Location: login.php?action=error');
        exit();
    }
}
