<?php 
    session_start();
    if($_SESSION['is_connected'] == True) {

    } else {
    header('Location: script/db/login_register.php');
    }

    require_once("template/head.php");

?>

<link rel="stylesheet" type="text/css" href="css/style.css">
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
    <h2 class="margin">Catalogue :</h2>
    <div id="first">
        <div id="img_1">
            <img src="img/duck_2.png" class="size">
        </div>
        <div id="text_1">
            <p class="padding">Voici notre canard basique en plastique jaune. Peut servir dans un bain ou encore pour les fous qui parlent à des canards.</p>
        </div>
    </div>
    <div id="second">
        <div id="img_2">
            <img src="img/duck_3.jpg" class="size">
        </div>
        <div id="text_2">
            <p class="padding">Magnifique vilain petit canard noir avec option vibrant. Il est simple à utiliser et à nettoyer après... Le bain ! Et oui n'oubliez pas que c'est un canard !</p>
        </div>
    </div>
    <div id="troisieme">
        <div id="img_3">
            <img src="img/duck_4.jpg" class="size">
        </div>
        <div id="text_3">
            <p class="padding">Petit canard diablotin avec un look d'enfer afin d'emflammer votre bain.</p>
        </div>
    </div>
    <div id="quatrieme">
        <div id="img_4">
            <img src="img/duck_5.jpg" class="size">
        </div>
        <div id="text_4">
        <p class="padding">Petite famille de canard, idéal pour les disposer aux quatre coins coins de votre bain.</p>
        </div>        
    </div>
    <form action="commande.php" class="padding">
        <input type="submit" value="Commander">
    </form>
        <form action="personnalise.php" class="padding">
        <input type="submit" value="Personnaliser">
    </form>
<?php
    require_once("template/foot.php");
?>
