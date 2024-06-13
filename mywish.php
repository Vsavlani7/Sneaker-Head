<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}else{
	$myshoeid = $_GET['shoeid'];
	$query= "select * from wishlist where prod_id='$myshoeid' and user_id='$user_id'";
	$select_cart = mysqli_query($con,$query);
	if(mysqli_num_rows($select_cart) > 0){
		header('location:wishlist.php');
	}else{
		$insertquery = "insert into wishlist (user_id,prod_id) values ('$user_id','$myshoeid')";
		$new_cart = mysqli_query($con, $insertquery);
		if($insertquery){
			header('location:wishlist.php');
		}else{
			echo "Something Wrong";
		}
		
}
}
?>