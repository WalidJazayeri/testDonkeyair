<?php

function assos_table_class(string $table, $PDO){
    $query = "SELECT * from ".$table;
    $statement = $PDO->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll(PDO::FETCH_CLASS, $table);
    return $customers;
}
