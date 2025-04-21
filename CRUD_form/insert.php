<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $batch = $_POST['batch'];
    $tutor = $_POST['tutor'];
    $email = $_POST['email'];  // Added email input

    $sql = "INSERT INTO students (stdName, Class, RollNumber, Batch, Tutor, email)
            VALUES ('$name', '$class', '$roll', '$batch', '$tutor', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to prevent resubmission
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
<h2>Student Form</h2>

<?php
if (isset($_GET['success'])) {
    echo "<script>console.log('New record added successfully');</script>";
}
?>
<div class="formpage">
<form action="" method="POST">
    <label for="name">Student Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label for="class">Class:</label><br>
    <input type="text" name="class" required><br><br>

    <label for="roll">Roll Number:</label><br>
    <input type="number" name="roll" required><br><br>

    <label for="batch">Batch:</label><br>
    <input type="text" name="batch" required><br><br>

    <label for="tutor">Tutor:</label><br>
    <input type="text" name="tutor" required><br><br>

    <label for="email">Email Address:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Submit" class="btn btn-primary">
    <a href="read.php" class="btn btn-secondary">View Student List</a>
</form>
</div>
</div>

</body>
</html>
