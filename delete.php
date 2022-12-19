<?php

include_once ('openDB.php');

$id = (int)$_GET['id'];

try {
    // sql to delete a record
    $sql = "DELETE FROM $tbl WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo '<h1>Sucessvol verwijderen van id = '.$id.'</h1>';
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

echo '<a href="index.php">terug naar lijst</a>';