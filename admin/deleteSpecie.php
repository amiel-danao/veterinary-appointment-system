<?php
include('../connection.php');
if (isset($_POST)) {
    $speId = $_POST['speId'];
    $result = $database->query("DELETE FROM species WHERE speId='$speId'");
    if ($result === true) {
        echo "Deletion Successful!";
    } else {
        echo "An error occured!!";
    }
}
?>