<?php
include('../connection.php');
if (isset($_POST)) {
    $breedId = $_POST['breedId'];
    $result = $database->query("DELETE FROM breed WHERE breedId='$breedId'");
    if ($result === true) {
        echo "Deletion Successful!";
    } else {
        echo "An error occured!!";
    }
}
?>