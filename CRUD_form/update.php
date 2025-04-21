<?php
include "db.php";

if (isset($_POST['update'])) {
    $stdID = $_POST['stdID'];
    $stdName = $_POST['stdName'];
    $class = $_POST['Class'];
    $roll = $_POST['RollNumber'];
    $batch = $_POST['Batch'];
    $tutor = $_POST['Tutor'];

    $sql = "UPDATE students SET stdName='$stdName', Class='$class', RollNumber='$roll', Batch='$batch', Tutor='$tutor' WHERE stdID='$stdID'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "<script>alert('Record updated successfully.'); window.location.href = 'read.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $stdID = $_GET['id'];
    $sql = "SELECT * FROM students WHERE stdID='$stdID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
</head>
<body>
    <h2>Update Student Details</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Student Information:</legend>
            Name:<br>
            <input type="text" name="stdName" value="<?php echo $row['stdName']; ?>"><br>
            Class:<br>
            <input type="text" name="Class" value="<?php echo $row['Class']; ?>"><br>
            Roll Number:<br>
            <input type="text" name="RollNumber" value="<?php echo $row['RollNumber']; ?>"><br>
            Batch:<br>
            <input type="text" name="Batch" value="<?php echo $row['Batch']; ?>"><br>
            Tutor:<br>
            <input type="text" name="Tutor" value="<?php echo $row['Tutor']; ?>"><br><br>
            <input type="hidden" name="stdID" value="<?php echo $row['stdID']; ?>">
            <input type="submit" name="update" value="Update">
        </fieldset>
    </form>
</body>
</html>

<?php
    } else {
        echo "Student not found.";
    }
} else {
    echo "Invalid request.";
}
?>
