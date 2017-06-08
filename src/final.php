<?php 
    require_once("template/head.php");
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
    <h2 class="margin">Récapitulatif de la commande :</h2>

<?php
    require_once("template/foot.php");
?>