<?php 
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $delete_command = $db->prepare("DELETE FROM command_duck");
    $delete_command->execute();
    header('Location:../../index.php');
?>