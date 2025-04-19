<?php
    include("connect.php");

    $name = "Arya";
    $course = "MCA";

    // Fix: wrap values in single quotes
    $sql = "INSERT INTO testdata (stdName, stdcourse) VALUES ('$name', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "New record inserted successfully! <br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // mysqli_close($conn);
?>
