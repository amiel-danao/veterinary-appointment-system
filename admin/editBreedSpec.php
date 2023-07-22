<?php
include('../connection.php');
if (isset($_POST)) {
    $specId = $_POST['specId'];
    $breedId = $_POST['breedId'];
    $result = $database->query("SELECT breedId, speId FROM breed WHERE breedId='$breedId'");
    if ($result->num_rows == 1) {
        $result = $database->query("UPDATE breed SET speId='$specId' WHERE breedId='$breedId'");
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