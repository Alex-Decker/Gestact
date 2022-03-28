<?php
delete(2);
function delete($id)
{
    include("../connexionDB.php");

    $deletestmt = $dbh->prepare("DELETE FROM contact WHERE id = ?");

    $deletestmt->execute($id);
}
