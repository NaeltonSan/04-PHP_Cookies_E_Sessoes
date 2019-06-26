<?php

    session_start();

    $user = $_SESSION['user'] ?? null;

    if (!$user) {
        header('location: login.php');
        exit;
    }
?>

<h1>Página protegida.</h1>