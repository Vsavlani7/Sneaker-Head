<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}else{
	$newid = $_GET['newid'];
	$id = $_GET['id'];
	$query = "delete from cart where prod_id='$id' and user_id='$user_id' and id=$newid";
	$select = mysqli_query($con,$query);
	if($query){
		echo "<script> alert('Product removed successfully')</script>";
		header('location:cart.php');
	}else{
		echo "Error in Operation";
	}
}

?>