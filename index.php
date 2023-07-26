<?php


require_once "Customer.php";
require_once "Plane.php";
require_once "FlightPaper.php";
require_once "Flight.php";


try {
    $PDO = connexion();
} catch (Exception $e){
    echo "Vérifier la co";
    die();
}

$customer1 = new Customer(1, $PDO);
$plane1 = new Plane(1, $PDO);
$flight1 = new Flight(1, $PDO);
$flightpaper1 = new FlightPaper(1,$PDO);






?>