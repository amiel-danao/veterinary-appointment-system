<?php
include('../connection.php');
if (isset($_POST)) {
    $newSpecieName = $_POST['data'];
    $speId = $_POST['speId'];
    $result = $database->query("SELECT name FROM species WHERE name='$newSpecieName'");
    if (!($result->num_rows == 1)) {
        $result = $database->query("UPDATE species SET name='$newSpecieName' WHERE speId='$speId'");
        if ($result === true) {
            echo "Update Success!";
        } else {
            echo "Error updating data!";
        }
    } else {
        echo $newSpecieName . " already exists!";
    }

}
?>