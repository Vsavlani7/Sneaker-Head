<?php

include 'config.php';


$id = $_GET['deleteid'];
// $query = "delete from register where id='$id'";
// $select = mysqli_query($con,$query);
// if($query){
// 	echo "<script> alert('User removed successfully')</script>";
// 	header('location:viewuser.php');
// }else{
// 	echo "Error in Operation";
// }

$sql = "SELECT email FROM register WHERE id = $id"; // Replace 1 with the ID of the user whose email you want to retrieve
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $email = $row["email"];
} else {
  echo "Email address not found in database.";
  exit();
}

// Send email on button click

  $to = $email;
  $subject = "SNEAKER HEAD";
  $body = "Your Sneaker Head account has suspended";
  // $message = "Here is your purchase invoice.";
  $headers = "From: nohitmohit@gmail.com";
  $headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  if (mail($to, $subject, $body, $headers)) {
    $query = "delete from register where id='$id'";
$select = mysqli_query($con,$query);
 	header('location:viewuser.php');
  } else {
    echo "Email sending failed.";
  }

?>