<?php
if (isset($_GET['id'])){

    update($_GET['id']);
}
function update($id)
{
    header('Location: ../views/AddContact.php?id='.$id);
    exit();
}