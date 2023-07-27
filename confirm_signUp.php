<?php include 'header.php'; ?>

<?php 

var_dump($_POST);
echo $_POST['email_user'];

// recuperation des infos du POST
$lastname_user=$_POST['lastname_user'];
$firstname_user=$_POST['firstname_user'];
$email_user=$_POST['email_user'];
$password=$_POST['password'];
$admin=1;

$query="
    INSERT INTO customer (lastname, firstname, email, password, admin)
    VALUES (:lastnameProtected, :firstnameProtected, :emailProtected, :passwordProtected, 1);";

// on va preparer la requete
$statement = $pdo->prepare($query);
$statement->bindValue(':lastnameProtected', $lastname_user);
$statement->bindValue(':firstnameProtected', $firstname_user);
$statement->bindValue(':emailProtected', $email_user);
$statement->bindValue(':passwordProtected', $password);


$statement->execute();

?>

<?php include 'footer.php'; ?>