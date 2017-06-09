<?php 
    require_once("template/head.php");
    $db = new PDO('mysql:host=localhost;dbname=duck', 'root', '0000');
    $duck = $db->prepare('SELECT name, color_duck, size_duck, matter_duck, option_duck  FROM command_duck, color_duck, size_duck, matter_duck, option_duck WHERE command_duck.id_color = color_duck.id AND command_duck.id_size = size_duck.id AND command_duck.id_matter = matter_duck.id AND command_duck.id_option = option_duck.id;');
    $duck->execute();
?>

<link rel="stylesheet" type="text/css" href="css/styleTer.css">
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
<table>
    <tr class="tableau">
        <th class="tableau">Nom</th>
        <th class="tableau">Couleur</th>
        <th class="tableau">Taille</th>
        <th class="tableau">Matière</th>
        <th class="tableau">Option</th>
    </tr>
    <?php
        foreach($duck->fetchAll() as $key => $value) { 
        echo "<tr class='tableau'>";      
        echo "<td class='tableau'>" . $value['name'] . "</td>";
        echo "<td class='tableau'>" . $value['color_duck'] . "</td>";
        echo "<td class='tableau'>" . $value['size_duck'] . "</td>";
        echo "<td class='tableau'>" . $value['matter_duck'] . "</td>";
        echo "<td class='tableau'>" . $value['option_duck'] . "</td>";
        echo "<td class='tableau'><form method='post' action''><input type='submit' value='Modifier' class='bouton'></form></td>";
        echo "<td class='tableau'><form method='post' action''><input type='submit' value='Commander' class='bouton'></form></td>";
        echo"</tr>";
    }
    ?>
</table>
<?php
    require_once("template/foot.php");
?>