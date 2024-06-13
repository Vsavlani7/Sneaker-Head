<?php

include 'config.php';


$id = $_GET['deleteid'];
$query = "delete from comment where id='$id'";
$select = mysqli_query($con,$query);
if($query){
	echo "<script> alert('Comment removed successfully')</script>";
	header('location:viewcomment.php');
}else{
	echo "Error in Operation";
}


?>