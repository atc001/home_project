<?php 
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $new_command = $db->prepare('INSERT INTO command_duck (`name`, `id_color`, `id_size`, `id_matter`, `id_option`) VALUES (:name, :color, :size, :matter, :option)');
    $new_command->bindParam(':name', $_POST['name']);
    $new_command->bindParam(':color', $_POST['color']);
    $new_command->bindParam(':size', $_POST['size']);
    $new_command->bindParam(':matter', $_POST['matter']);
    $new_command->bindParam(':option', $_POST['option']);
    $new_command->execute();
    header('Location:../../final.php');
?>