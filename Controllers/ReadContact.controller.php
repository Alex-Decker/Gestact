<?php
include("./connexionDB.php");

// utilisation des procedure stocker

$stmt = $dbh->prepare("SELECT * FROM contact");


$stmt->execute();

$rows = $stmt->fetchAll();
