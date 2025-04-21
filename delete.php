<?php
include("connect.php");

$sql = "DELETE FROM testdata WHERE stdID = 13";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error while deleting record: " . mysqli_error($conn);
}
$result= "SELECT * FROM testdata"
?>
