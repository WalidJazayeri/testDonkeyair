<?php 
include 'header.php';
?>

<h1>Creation d'un nouveau user</h1>

<form action="confirm_signUp.php" method="POST">
    <h2>Nom : </h2>
    <input type="text" name="lastname_user" size="10">
    <br> 
    <h2>Prénom : </h2>
    <input type="text" name="firstname_user" size="10">
    <br>
    <h2>Email : </h2>
    <br>
    <input type="email" name="email_user" size="10">
    <br>
    <h2>Mot de passe : </h2>
    <br>
    <input type="password" name="mdp_user">
    <br>
    <input type="submit" value="Enregistrer">
</form>



<?php
include 'footer.php';
?>