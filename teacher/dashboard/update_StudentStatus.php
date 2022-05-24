<?php 
include('../connection.php');
$email=$_GET['email'];

$q=mysqli_query($conn,"update user set status='approved' where email='$email'");

header('location:managestudent.php');

?>