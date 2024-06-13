<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
$prod_id = $_GET['id'];

$sql = "delete from reviews where user_id='$user_id' and prod_id='$prod_id' ";
$result = mysqli_query($con,$sql);
header('location:myorder.php');

?>