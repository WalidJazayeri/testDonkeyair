<?php include 'header.php' ?>

<h1>Authentification d'un user</h1>

    <form action="verifieUser.php" method="POST">
        <br> 
        Email :
        <br>
        <input type="email"  name="email_user" >
        <br>
        Mot de passe
        <br>
        <input type="password" name="mdp_user">
        <br>
        <input type="submit" value="Se connecter !">
    </form>


<?php include 'footer.php' ?>