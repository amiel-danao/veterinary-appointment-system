<?php
include('../connection.php');
if (isset($_POST)) {
    $newBreedName = trim($_POST['breedName']);
    $result = $database->query("SELECT name FROM breed");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (strtolower($row['name']) == strtolower($newBreedName)) {
                $access = false;
                break;
            } else {
                $access = true;
            }
        }
        if ($access === true) {
            $result = $database->query("INSERT INTO breed (name) VALUES ('$newBreedName')");
            if ($result === true) {
                echo "Breed successfully added!";
            } else {
                echo "Error adding data!";
            }
        } else {
            echo $newBreedName . " already exists!";
        }
    } else {
        $result = $database->query("INSERT INTO species (name) VALUES ('$newBreedName')");
        if ($result === true) {
            echo "Breed successfully added!";
        } else {
            echo "Error adding data!";
        }
    }

}
?>