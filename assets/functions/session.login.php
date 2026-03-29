<?php
//  Checks whether the login button has been pressed
if (isset($_POST['login'])) { 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creates a query to fetch the user based on email
    $sql = 'SELECT * FROM users WHERE email = :email';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $row = $stmt->fetch();

    // Checks if a user was found and if the password matches
    if ($row && $password == $row['password']) {

        // Connection successful, start a session and save user information
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['firstname'];



        // Send the user to the view page
        header('Location: view.php');
        exit();
    } else {
        // If login fails, redirect back to the login page with an error message
        header('Location: login.php?action=error');
        exit();
    }
}
