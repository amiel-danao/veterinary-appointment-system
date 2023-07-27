<?php
include('../connection.php');
if (isset($_POST)) {
    $petId = $_POST['petId'];
    $result = $database->query("DELETE FROM pet WHERE petId='$petId'");
    if ($result === true) {
        echo "Deletion Successful!";
    } else {
        echo "An error occured!!";
    }
}
?>