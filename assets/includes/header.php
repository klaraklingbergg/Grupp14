<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// show errors for debugging
require_once 'assets/includes/display_errors.php';
// include database connection
require_once 'assets/config/db.php';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>SkillSwapHKR</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="bg-warning-subtle">
        <nav class="navbar navbar-expand-md d-flex justify-content-between px-4">
            <div class="navbar-left">
                <a href="index.php" class="navbar-brand">
                    <i class="fa-solid fa-brain"></i>
                    <span class="ms-2">SkillSwap HKR</span>
                </a>
            </div>
            <ul class="navbar-nav d-flex flex-row gap-4 mx-auto">
                <li class="nav-item"><a class="nav-link" href="view.php">Flöde</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo isset($_SESSION['user_id']) ? 'add.posts.php' : 'add.php'; ?>">Ställ en fråga</a>
                </li>
            </ul>
            <div class="navbar-right d-flex align-items-center">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="profile.php" class="text-dark">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                    </a>
                <?php else: ?>
                    <a href="add.php" class="text-dark d-flex align-items-center text-decoration-none">
                        <span class="me-2">Logga in / Reg</span>
                        <i class="fa-solid fa-circle-user fs-2"></i>
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </header>