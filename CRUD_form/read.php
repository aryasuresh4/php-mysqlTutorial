<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Student Details</h2>
<table class="table">
    <thead>
        <tr>
        <th>StdID</th>
        <th>STDName</th>
        <th>Class</th>
        <th>RollNumber</th>
        <th>Batch</th>
        <th>Tutor</th>
    </tr>
    </thead>
    <tbody>
        <?php
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['stdID']; ?></td>
                    <td><?php echo $row['stdName']; ?></td>
                    <td><?php echo $row['Class']; ?></td>
                    <td><?php echo $row['RollNumber']; ?></td>
                    <td><?php echo $row['Batch']; ?></td>
                    <td><?php echo $row['Tutor']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['stdID']; ?>">Edit</a>
                     &nbsp;
                     <a class="btn btn-danger" href="delete.php?stdID=<?php echo $row['stdID']; ?>">Delete</a>
                    </td>
                    </tr>
        <?php       }
            }
        ?>
    </tbody>
</table>
    </div>
</body>
</html>