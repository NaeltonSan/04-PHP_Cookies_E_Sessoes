<?php
    session_start();
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = [
        'email' => filter_input(INPUT_POST, 'email')  // vai pegar o que vim do campo email e armazenar na sessão 'user'
    ];

    header('location: index.php');
    exit;
}
    
?>

<h1>Login</h1>

<form action="" method="post">
    <input type="text" name="email">
    <input type="submit" value="enviar">
</form>