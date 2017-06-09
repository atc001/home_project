<?php
    require_once("../../template/head.php")
?>
<link rel="stylesheet" type="text/css" href="../../css/styleBis.css">


<div id="form">
    <h2 class="margin">Connexion :</h2>
    <form method="post" action="login.php">
        <label>Compte :</label>
        <input type="text" name="user" required="true">

        <label>Mot de passe :</label>
        <input type="password" name="password" required="true">

        <input type="submit" value="Connexion">
    </form>

    <h2 class="margin">Inscription :</h2>
    <form method="post" action="register.php">
        <label>Compte :</label>
        <input type="text" name="user" required="true">

        <label>Mot de passe :</label>
        <input type="password" name="password" required="true">

        <input type="submit" value="Inscription">
    </form>
</div>
</body>

</html>