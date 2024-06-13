<?php
// Step 1: Establish a database connection
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
$order_id = $_GET['orderid'];

// Step 2: Retrieve data from the database
$query = "select order_item.id as oid, order_item.order_id, order_item.prod_id, order_item.size, order_item.quantity, order_item.price, shoe.id as sid, shoe.brand, shoe.name, shoe.color, shoe.code  from order_item INNER JOIN shoe ON order_item.prod_id = shoe.id  where user_id='$user_id' ";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Step 3: Create an HTML email template
$email_template = file_get_contents('invoice.php');

// Step 4: Replace placeholders in the email template with fetched data
foreach ($data as $row) {
    // $email_template = str_replace('{fname}', $row['fname'], $email_template);
    // $email_template = str_replace('{lname}', $row['lname'], $email_template);
	// $email_template = str_replace('{country}', $row['country'], $email_template);
    // $email_template = str_replace('{street}', $row['street'], $email_template);
    // $email_template = str_replace('{apart}', $row['apart'], $email_template);
	// $email_template = str_replace('{city}', $row['city'], $email_template);
    // $email_template = str_replace('{state}', $row['state'], $email_template);
    // $email_template = str_replace('{postal}', $row['postal'], $email_template);
	// $email_template = str_replace('{date}', $row['date'], $email_template);
    $email_template = str_replace('{brand}', $row['brand'], $email_template);
    $email_template = str_replace('{name}', $row['name'], $email_template);
	$email_template = str_replace('{price}', $row['price'], $email_template);
    $email_template = str_replace('{size}', $row['size'], $email_template);
    $email_template = str_replace('{code}', $row['code'], $email_template);
	$email_template = str_replace('{color}', $row['color'], $email_template);
	$email_template = str_replace('{quantity}', $row['quantity'], $email_template);
}

// Step 5: Send the email
$to = 'visshalsavlani44@gmail.com';
$subject = 'Your fetched data';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: sender@example.com' . "\r\n";
mail($to, $subject, $email_template, $headers);
?>