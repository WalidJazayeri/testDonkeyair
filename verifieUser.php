<?php 
include 'header.php';

$email_user_test= $_POST['email_user'];
$mdp_user_test=$_POST['mdp_user'];

$query = "SELECT customer.email, customer.password FROM customer where email = :emailProtected ";
$statement = $pdo->prepare($query);
$statement->bindValue(':emailProtected', $email_user_test, \PDO::PARAM_STR);
$statement->execute();

$users = $statement->fetch();

echo "<br>";

if (empty($users)){
    echo "Identifiant inconnu";
}
else {
    if ($users['password']==$mdp_user_test){
        echo "Vous etes connecté !";
    }
    else {
        echo "Identifiant inconnu";
    }
}
?>