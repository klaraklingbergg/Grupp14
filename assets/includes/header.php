<?php
// show errors for debugging
require_once 'assets/includes/display-errors.php';
// include database connection
require_once 'assets/config/db.php';
//include header
require_once 'assets/includes/header.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Skillswaphkr</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md">
            <a href="index.php" class="navbar-brand">
                <i class="fa-solid fa-brain"></i>
                <span class="ms-2">SkillSwap HKR</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Flöde</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ställ en fråga</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Profilikon</a></li>
            </ul>
            <a href="add.php" class="btn btn-success ms-2"> Logga in / Registrera
            </a>
        </nav>

    </header>