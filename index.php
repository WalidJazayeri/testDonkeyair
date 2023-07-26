<?php

require_once "Function.php";
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


