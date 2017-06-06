<?php
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $user = $db->prepare('SELECT * FROM user WHERE user = :user');
    $user->bindParam(':user', $_POST['user']);
    $user->execute();

    if($user->fetch() == False) {
            $new_user = $db->prepare('INSERT INTO user (user, password) VALUES (:user, :password)');
            $new_user->bindParam(':user', $_POST['user']);
            $new_user->bindParam(':password', $_POST['password']);
            $new_user->execute();
            header('Location: ../../index.php');
    } else {
        header('Location: ../../index.php');
    }
?>