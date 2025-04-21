<?php
    include("connect.php");

    // Sample student records
    $students = [
        ["Arya", "MCA"],
        ["Rahul", "BCA"],
        ["Sneha", "MBA"],
        ["Vishnu", "MSc"],
        ["Anjali", "BSc"],
        ["Ravi", "BTech"]
    ];

    foreach ($students as $student) {
        $name = $student[0];
        $course = $student[1];

        $sql = "INSERT INTO testdata (stdName, stdcourse) VALUES ('$name', '$course')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Inserted: $name - $course <br>";
        } else {
            echo "Error inserting $name: " . mysqli_error($conn) . "<br>";
        }
    }

    // mysqli_close($conn);
?>
