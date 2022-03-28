<?php
function delete($id)
{
    include("../connexionDB.php");

    $deletestmt = $dbh->prepare("DELETE FROM contact WHERE id = :id");
    $deletestmt->bindParam(':id', $id);
    $deletestmt->execute();
}
