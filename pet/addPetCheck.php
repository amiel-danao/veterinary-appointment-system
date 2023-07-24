<?php
include('../connection.php');
if (isset($_POST)) {

    $petName = $_POST['petName'];
    $bday = $_POST['bday'];
    $specieId = $_POST['specieId'];
    $breedId = $_POST['breedId'];
    $pemail = $_POST['pemail'];
    $stmt = $database->query("SELECT pid FROM patient WHERE pemail='$pemail'");
    $stmt = $stmt->fetch_assoc();
    $pid = $stmt['pid'];
    $stmt = $database->query("SELECT * FROM pet WHERE pid='$pid' AND name='$petName' AND birthday='$bday' AND breedId='$breedId' AND speId='$specieId'");
    if ($stmt->num_rows >= 1) {
        echo "This pet already exists!";
    } else {
        $result = $database->query("INSERT INTO pet (name, pid, birthday, speId, breedId) VALUES ('$petName', '$pid', '$bday', '$specieId', '$breedId')");
        if ($result === true) {
            echo "Pet addition success!";
        } else {
            echo "Error adding data!";
        }
    }

}
?>