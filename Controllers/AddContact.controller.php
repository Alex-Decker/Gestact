<?php
include("../connexionDB.php");

if(isset($_POST['submit'])){
    $Name = $_POST["input_name"];
    $Surname = $_POST["input_surname"];
    $Number = $_POST["input_number"];
// utilisation des procedure stocker

    $stmt = $dbh->prepare("INSERT INTO contact (nom, prenom, numero) VALUES (:nom, :prenom, :numero)");

    $stmt->bindParam(':nom', $Name);
    $stmt->bindParam(':prenom', $Surname);
    $stmt->bindParam(':numero', $Number);


    $stmt->execute();
    echo '<script>alert("Contact enregistrer avec sucess !!!")</script>';

}

