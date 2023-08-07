<?php
include('../connection.php');
if (isset($_POST)) {
    $appoid = $_POST['appoid'];
    $status = $_POST['statusValue'];
    $stmt = $database->query("UPDATE appointment SET status='$status' WHERE appoid='$appoid'");
    if ($stmt) {
        echo "Status changed!";
    }
}

?>