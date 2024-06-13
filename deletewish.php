<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}else{
	$id = $_GET['id'];
	$query = "delete from wishlist where prod_id='$id' and user_id='$user_id'";
	$select = mysqli_query($con,$query);
	if($query){
		echo "<script> alert('Product removed successfully')</script>";
		header('location:wishlist.php');
	}else{
		echo "Error in Operation";
	}
}

?>