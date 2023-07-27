<?php
include('../connection.php');
if (isset($_POST)) {
    $petId = $_POST['petId'];
    $petName = $_POST['petName'];
    $bday = $_POST['bday'];
    $specieId = $_POST['specieId'];
    $breedId = $_POST['breedId'];
    $pemail = $_POST['pemail'];
    $stmt = $database->query("SELECT pid FROM patient WHERE pemail='$pemail'");
    $stmt = $stmt->fetch_assoc();
    $pid = $stmt['pid'];
    $stmt = $database->query("SELECT * FROM pet WHERE pid='$pid' AND name='$petName' AND birthday='$bday' AND breedId='$breedId' AND speId='$specieId'");
    if ($stmt->num_rows >= 1 || $bday === "" || $petName === "") {
        if ($petName === "" || $bday === "") {
            echo "Insufficient Details!";
        } else {
            echo "You did not changed anything!";
        }
    } else {
        $result = $database->query("UPDATE pet SET name='$petName', birthday='$bday', speId='$specieId', breedId='$breedId' WHERE pid='$pid' AND petId='$petId'");
        if ($result === true) {
            echo "Pet edit success!";
        } else {
            echo "Error adding data!";
        }
    }

}
?>