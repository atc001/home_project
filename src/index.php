<?php 
    session_start();
    if($_SESSION['is_connected'] == True) {

    } else {
    header('Location: script/db/login_register.php');
    }

    require_once("template/head.php");

?>

<header>
    <img src="img/duck.jpg">
    <h1>Marché aux Canards</h1>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="commande.php">Commander</a></li>
        <li><a href="script/db/disconnect.php">Déconnexion</a></li>
    </ul>
</header>
<main>
    <h2 class="margin">Catalogue :</h2>
    <div id="first">
        <div id="img_1">
            <img src="img/duck_2.png" class="size">
        </div>
        <div id="text_1">
            <p class="padding">Voici notre canard basique en plastique jaune. Peut servir dans un bain ou encore pour les fous qui parlent à des canards</p>
        </div>
    </div>
    <div id="second">
        <div id="img_2">
            <img src="img/duck_3.jpg" class="size">
        </div>
        <div id="text_2">
            <p class="padding">Magnifique vilain petit canard noir avec option vibrant. Constitué de sillicone, il sera très vite agréable à nettoyer après... Le bain ! Et oui n'oubliez pas que c'est un canard !</p>
        </div>
    </div>
<?php
    require_once("template/foot.php");
?>
