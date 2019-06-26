<?php

    session_start();

    $user = $_SESSION['user'] ?? null;

    if (!$user) {                         // se esta sessão não existir ele vai para tela login.php
        header('location: login.php');
        exit;
    }
?>

<h1>Página protegida.</h1>

<p>Olá <?php echo $user['email']?> !</p>