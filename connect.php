<?php
//create connection
$server="localhost";
$user="root";
$pass= "";
$dbname="sampleDB";
$conn=mysqli_connect($server,$user,$pass,$dbname);

//check connection
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
else{
    echo "successfully connected <br>"; 
}
?>