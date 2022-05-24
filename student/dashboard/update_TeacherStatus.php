<?php 
include('../connection.php');
$email=$_GET['email'];

$q=mysqli_query($conn,"update teacher set status='approved' where email='$email'");

header('location:manageteacher.php');

?>