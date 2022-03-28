<?php
include ('mesFonctions.php');
$contacts = getAllContacts();
/*var_dump(Search('er'));
/*
require_once ('Controllers/ReadContact.controller.php');
//require_once ('Controllers/DeleteContact.controller.php');

function delette($id)
{
    var_dump(tetzueuztu);
    $deletestmt = $dbh->prepare("DELETE FROM contact WHERE id = :id");
    $deletestmt->bindParam(':id', $id);
    $deletestmt->execute();
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1>List of contacts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
           foreach ($contacts as $row)
              echo "<tr>
                <td>".$row['Nom']."</td>
                <td>".$row['Prenom']."</td>
                <td>".$row['Numero']."</td>
                <td>
                    <button type=_\"button\" class=\"btn btn-primary\">
                        <a href='Controllers/DeleteContact.Controller.php?id=".$row['Id']."' style='color: white'>Update</a>
                    </button>
                    <button type=_\"button\" class=\"btn btn-danger\">
                        <a href='Controllers/DeleteContact.Controller.php?id=".$row['Id']."' style='color: white'>Delete</a>
                    </button>
                </td></tr>";
           ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href='views/AddContact.php' style='color: white'>New contact</a></button>
</body>

</html>
