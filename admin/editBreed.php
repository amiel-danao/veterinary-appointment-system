<?php
include('../connection.php');
if (isset($_POST)) {
    $newBreedName = $_POST['data'];
    $breedId = $_POST['breedId'];
    $result = $database->query("SELECT name FROM breed WHERE name='$newBreedName'");
    if (!($result->num_rows == 1)) {
        $result = $database->query("UPDATE breed SET name='$newBreedName' WHERE breedId='$breedId'");
        if ($result === true) {
            echo "Update Success!";
        } else {
            echo "Error updating data!";
        }
    } else {
        echo $newBreedName . " already exists!";
    }

}
?>