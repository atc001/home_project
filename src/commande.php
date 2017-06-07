<?php 
    require_once("template/head.php");

    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $duck = $db->prepare('SELECT id, duck  FROM duck_bis');
    $duck->execute();

?>

<link rel="stylesheet" type="text/css" href="css/style_bis.css">
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
    <h2 class="margin">Commander un canard du catalogue :</h2>
    <form action="index.php">
        <label class="padding">Canard :</label>
        <select name="canard" required="true" class="padding">
        <?php 
            foreach($duck->fetchAll() as $value) {
                echo "<option value='" . $value['id'] . "'>" . $value['duck'] . "</option>";
            }
        ?>
        </select>
        <input type="submit" value="Commander">
    </form>
    <p class="margin">Vous pouvez également personnaliser vos canards dans la rubrique "Personnaliser" en haut à droite de votre écran.</p>

<?php
    require_once("template/foot.php");
?>