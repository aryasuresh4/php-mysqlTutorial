<?php
include "db.php";

if (isset($_GET['stdID'])) {
    $stu_id = $_GET['stdID'];
    $sql = "DELETE FROM students WHERE stdID='$stu_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        // Don't echo anything before header
        header('Location: read.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
