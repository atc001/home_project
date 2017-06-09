<?php 
    require_once("template/head.php");
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $color_duck = $db->prepare('SELECT * FROM color_duck');
    $color_duck->execute();
    $option_duck = $db->prepare('SELECT * FROM option_duck');
    $option_duck->execute();
    $size_duck = $db->prepare('SELECT * FROM size_duck');
    $size_duck->execute();
    $matter_duck = $db->prepare('SELECT * FROM matter_duck');
    $matter_duck->execute();
?>

<link rel="stylesheet" type="text/css" href="css/style_ter.css">
<header>
    <img src="img/duck.jpg">
    <h1>Marché aux Canards</h1>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="commande.php">Commander</a></li>
        <li><a href="personnalise.php">Personnaliser</a></li>
        <li><a href="script/db/disconnect.php">Déconnexion</a></li>
    </ul>
</header>
<main>
    <h2 class="margin">Personnaliser votre canard :</h2>
    <form method="post" action="script/db/insert.php">
        <label>Nom :</label>
        <input type="text" required="true" name="name">
        <label>Couleur :</label>
        <select name="color" required:"true">
            <?php 
                foreach($color_duck->fetchAll() as $value) {
                    echo "<option value='" . $value['id'] . "'>" . $value['color_duck'] . "</option>";
                }
            ?>                        
        </select>
        <label>Taille :</label>
        <select name="size" required:"true">
            <?php 
                foreach($size_duck->fetchAll() as $value) {
                    echo "<option value='" . $value['id'] . "'>" . $value['size_duck'] . "</option>";
                }
            ?>                        
        </select>
        <label>Matière :</label>
        <select name="matter" required:"true">
            <?php 
                foreach($matter_duck->fetchAll() as $value) {
                    echo "<option value='" . $value['id'] . "'>" . $value['matter_duck'] . "</option>";
                }
            ?>                        
        </select>
        <label>Option :</label>
        <select name="option" required:"true">
            <?php 
                foreach($option_duck->fetchAll() as $value) {
                    echo "<option value='" . $value['id'] . "'>" . $value['option_duck'] . "</option>";
                }
            ?>                        
        </select>
        <input type="submit" value"Valider">
    </form>
    
<?php
    require_once("template/foot.php");
?>