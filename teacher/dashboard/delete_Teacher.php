<?php 
include('../connection.php');
$email=$_GET['email'];

$q=mysqli_query($conn,"delete from teacher where email='$email'");

header('location:manageteacher.php');

?>