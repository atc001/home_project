<?php 
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $new_command = $db->prepare('INSERT INTO command_duck (`name`, `color`, `size`, `matter`, `option`) VALUES (:name, :color, :size, :matter, :option)');
    $new_command->bindParam(':name', $_POST['name_duck']);
    $new_command->bindParam(':color', $_POST['color_duck']);
    $new_command->bindParam(':size', $_POST['size_duck']);
    $new_command->bindParam(':matter', $_POST['matter_duck']);
    $new_command->bindParam(':option', $_POST['option_duck']);
    $new_command->execute();
    header('Location:../../final.php')
?>