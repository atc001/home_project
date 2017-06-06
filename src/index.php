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
        <li><a href="script/db/disconnect.php">Déconnexion</a></li>
    </ul>
</header>
<main>

<?php
    require_once("template/foot.php");
?>
