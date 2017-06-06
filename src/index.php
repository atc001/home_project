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
        <li><a href="./index.php">Accueil</a></li>
        <li><a href="commande.php">Commander</a></li>
        <li><a href="script/db/disconnect.php">Déconnexion</a></li>
    </ul>
</header>
<main>
    <h2 class="margin">Catalogue :</h2>
    <div id="first">
        <div id="img_1">
            <img src="img/duck_2.png">
        </div>
        <div id="text_1">
            <p>Voici notre canard basique en plastique jaune. Peut servir dans un bain ou encore pour les fous qui parlent à des canards</p>
        </div>
    </div>
<?php
    require_once("template/foot.php");
?>
