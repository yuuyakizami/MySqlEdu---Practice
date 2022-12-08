<?php 
include 'mysqli_connect.php';


$name = mysqli_escape_string($con, $_REQUEST['name']);
$email = mysqli_escape_string($con, $_REQUEST['email']);
$message = mysqli_escape_string($con, $_REQUEST['message']);



$sql = "INSERT INTO usermessage (id, name, email, message, reg_date) VALUES (NULL, '$name', '$email', '$message', NULL)";
if(mysqli_query($con, $sql)){
    echo "Data Upload";
}
else {
    echo "Data Sent Failed";
}
mysqli_close($con);
?>