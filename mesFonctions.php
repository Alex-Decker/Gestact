<?php
function getDBConnexion(){
    $user = "root";
    $pass = "";
    try {
        return $dbh = new PDO('mysql:host=localhost;dbname=gestacts', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
function getAllContacts(){

    $con = getDBConnexion();

    $stmt = $con->prepare("SELECT * FROM contact");

    $stmt->execute();

    return $rows = $stmt->fetchAll();

}
function getContact($Id){
    $con = getDBConnexion();
    try {
        if ($Id <= 0){
            throw  new Exception('l\'id doit etre strictement supperieur a 0');
        }else if($Id = null){
            throw  new Exception('l\'id doit etre existante');
        }else{
            $stmt = $con->prepare("SELECT * FROM contact WHERE Id = :id");
            $stmt->bindParam(':id', $Id);

            $stmt->execute();

            return $rows = $stmt->fetchAll();
        }
    }catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

}
function Search($Chaine){
    try {
        $con = getDBConnexion();
    }catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $stmt = $con->prepare("SELECT * FROM contact WHERE Nom LIKE '%".$Chaine."%' OR Prenom LIKE '%".$Chaine."%'");
    //$stmt->bindParam(':chaine', $Chaine);

    $stmt->execute();

    return $rows = $stmt->fetchAll();

}
function AddContact($Name, $Surname, $Number){
    $con = getDBConnexion();
// utilisation des procedure stocker

        try {
            if($Name = ''&& $Surname = ''){
                throw new Exception('le nom et le prenom doivent etre renseigner obligatoirement !!!');
            }else if ($Name = '' && $Surname != ''){
                throw new Exception('le nom doit etre renseigner obligatoirement !!!');

            }else if ($Name != '' && $Surname = ''){
                throw new Exception('le prenom doit etre renseigner obligatoirement !!!');

            }else{
                $stmt = $con->prepare("INSERT INTO contact (nom, prenom, numero) VALUES (:nom, :prenom, :numero)");

                $stmt->bindParam(':nom', $Name);
                $stmt->bindParam(':prenom', $Surname);
                $stmt->bindParam(':numero', $Number);

                $stmt->execute();
                echo '<script>alert("Contact enregistrer avec sucess !!!")</script>';
            }
        } catch (Exception $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }




}
function UpdateContact($Id, $Name, $Surname, $Number){
    $con = getDBConnexion();
// utilisation des procedure stocker
        try {
            if($Name = ''&& $Surname = ''){
                throw new Exception('le nom et le prenom doivent etre renseigner obligatoirement !!!');
            }else if ($Name = '' && $Surname != ''){
                throw new Exception('le nom doit etre renseigner obligatoirement !!!');

            }else if ($Name != '' && $Surname = ''){
                throw new Exception('le prenom doit etre renseigner obligatoirement !!!');

            }else{
                $stmt = $con->prepare("UPDATE contact SET nom = :nom, prenom = :prenom, numero = :numero WHERE Id = :id");

                $stmt->bindParam(':id', $Id);
                $stmt->bindParam(':nom', $Name);
                $stmt->bindParam(':prenom', $Surname);
                $stmt->bindParam(':numero', $Number);

                $stmt->execute();
                echo '<script>alert("Contact mis a jour avec sucess !!!")</script>';
            }
        } catch (Exception $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }




}
function DeleteContact($Id){
    $con = getDBConnexion();
    try {
        if ($Id <= 0){
            throw  new Exception('l\'id doit etre strictement supperieur a 0');
        }else if($Id = null){
            throw  new Exception('l\'id doit etre existante');
        }else{
            $stmt = $con->prepare("DELETE * FROM contact WHERE Id = '$Id'");

            $stmt->execute();

            return $rows = $stmt->fetchAll();
        }
    }catch (Exception $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}