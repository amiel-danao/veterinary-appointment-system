<?php
include('../connection.php');
if (isset($_POST)) {
    $petName = $_POST['petName'];
    $bday = $_POST['birthdate'];
    $specieId = $_POST['specie'];
    $breedId = $_POST['breed'];
    $pid = $_POST['pid'];
    $stmt = $database->query("SELECT * FROM pet WHERE pid='$pid' AND name='$petName' AND birthday='$bday' AND breedId='$breedId' AND speId='$specieId'");

    if ($stmt->num_rows >= 1 || $petName === "" || $bday === "") {
        if ($petName === "" || $bday === "") {
            echo "Insufficient Details!";
        } else {
            echo "This pet already exists!";
        }
    } else {
        $result = $database->query("INSERT INTO pet (name, pid, birthday, speId, breedId) VALUES ('$petName', '$pid', '$bday', '$specieId', '$breedId')");
        if ($result === true) {
            echo "Pet addition success!";
            header("Location: petListPage.php");
            exit;
        } else {
            echo "Error adding data!";
            header("Location: petListPage.php");
            exit;
        }
    }

}
?>