<?php 
include('../connection.php');
$email=$_GET['email'];

$q=mysqli_query($conn,"delete from user where email='$email'");

header('location:managestudent.php');

?>