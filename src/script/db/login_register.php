<?php ?>

<h2>Connexion :</h2>
<form method="post" action="login.php">
    <label>Compte :</label>
    <input type="text" name="user" required="true">

    <label>Mot de passe :</label>
    <input type="password" name="password" required="true">

    <input type="submit" value="Connexion">
</form>

<h2>Inscription :</h2>
<form method="post" action="register.php">
    <label>Compte :</label>
    <input type="text" name="user" required="true">

    <label>Mot de passe :</label>
    <input type="password" name="password" required="true">

    <input type="submit" value="Inscription">
</form>
