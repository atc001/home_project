<?php 
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $user = $db->prepare('SELECT * FROM user WHERE user = :user AND password = :password');
    $user->bindParam(':user', $_POST['user']);
    $user->bindParam(':password', $_POST['password']);
    $user->execute();

    if($user->fetch() == False) {
        header('Location: ../../index.php');
    } else {
        session_start();
        $_SESSION['is_connected'] = True;
        header('Location: ../../index.php');
    }
?>