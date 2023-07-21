<?php
include('../connection.php');
if (isset($_POST)) {
    $newSpecieName = trim($_POST['specName']);
    $result = $database->query("SELECT name FROM species");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (strtolower($row['name']) == strtolower($newSpecieName)) {
                $access = false;
                break;
            } else {
                $access = true;
            }
        }
        if ($access === true) {
            $result = $database->query("INSERT INTO species (name) VALUES ('$newSpecieName')");
            if ($result === true) {
                echo "Specie successfully added!";
            } else {
                echo "Error adding data!";
            }
        } else {
            echo $newSpecieName . " already exists!";
        }
    } else {
        $result = $database->query("INSERT INTO species (name) VALUES ('$newSpecieName')");
        if ($result === true) {
            echo "Specie successfully added!";
        } else {
            echo "Error adding data!";
        }
    }

}
?>