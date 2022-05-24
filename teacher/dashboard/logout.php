<?php 
session_start();
unset($_SESSION['teacher']);
header('location:../../index.html');
?>