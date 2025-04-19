<?php
include("connect.php");

$sql = "UPDATE testData SET stdCourse='BCA' WHERE stdID=1";
if(mysqli_query($conn,$sql)){
    echo "Successfully updated";
}
else{
    echo "error while updating record:" .mysqli_error($conn);

}
mysqli_close($conn);

?>