<?php
if (isset($_GET['id'])){

    delete($_GET['id']);
}
function delete($id)
{
    include("../connexionDB.php");

    $deletestmt = $dbh->prepare("DELETE FROM contact WHERE id = :id");
    $deletestmt->bindParam(':id', $id);
    $deletestmt->execute();

    header('Location: ../index.php');
    exit();
}
