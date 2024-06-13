<?php
error_reporting(0); 
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}

$order_id = $_GET['orderid'];
$newprice = $_GET['newprice'];
$discountprice = $_GET['discount'];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="images/favicon.png">
	<title>Invoice Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			padding: 0;
			margin: 0;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ddd;
		}
		.invoice-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 30px;
		}
		.invoice-header h1 {
			font-size: 24px;
			margin: 0;
		}
		.invoice-header img {
			height: 80px;
		}
		.invoice-details {
			display: flex;
			justify-content: space-between;
			margin-bottom: 30px;
		}
		.invoice-details div {
			flex-basis: 50%;
		}
		.invoice-details h3 {
			font-size: 18px;
			margin: 0;
		}
		.invoice-details p {
			margin: 0;
		}
		.invoice-table {
			width: 100%;
			border-collapse: collapse;
		}
		.invoice-table th,
		.invoice-table td {
			padding: 10px;
			border: 1px solid #ddd;
		}
		.invoice-table th {
			background-color: #f5f5f5;
		}
		.invoice-total {
			display: flex;
			justify-content: flex-end;
			align-items: center;
			margin-top: 30px;
			padding-top: 10px;
			border-top: 1px solid #ddd;
		}
		.invoice-total p {
			margin: 0;
			margin-right: 20px;
			font-weight: bold;
		}
		.invoice-total span {
			font-size: 24px;
			font-weight: bold;
		}
        
	</style>
</head>
<body style="
    font-family: math;">
	
	 <div id="preloder">
        <div class="loader"></div>
    </div>

	<div class="container">
		<div class="invoice-header">
			<h3 style="text-transform: uppercase;
    font-family: inherit;
    padding: 0.2rem;
    font-style: italic;
    padding-left: 0.8rem;
    padding-right: 0.9rem;
    background-color: red;
    font-size:inherit;
    letter-spacing: 0.1rem;
    color: white;">Sneaker Head</h3>
		</div>
		<div class="invoice-details">
			<?php

				$sql = "select * from orders where order_id='$order_id' and user_id='$user_id'";
				$select = mysqli_query($con,$sql);
				$rows= mysqli_fetch_assoc($select);

				$fname= $rows['fname'];
				$lname= $rows['lname'];
				$country= $rows['country'];
				$street= $rows['street'];
				$apart= $rows['apart'];
				$city= $rows['city'];
				$state= $rows['state'];
				$postal= $rows['postal'];
				$date = $rows['date'];


?>
			<div>
				<h3 style="letter-spacing: 0.5px;  font-size:inherit;">Billed To:</h3>
				<p><?php echo $fname." ".$lname ; ?><br><?php echo $apart." ".$street." ".$city ; ?><br><?php echo $state.", ".$country." ".$postal ; ?></p>
			</div>
			<div>
                <div style="display:flex;">
				<p>Invoice :</p>
				<p style="padding-left:0.3rem; color:red;">0001</hp>
    </div>
    <div style="display:flex;">
				<p>Date:</p>
				<p style="padding-left:0.3rem; color:black;"><?php echo $date ; ?></p>
    </div>
			</div>
		</div>
		<table class="invoice-table" style="border-style:hidden;" >
		
			<thead >
				<tr >
					<th>Product Name</th>
					<th>Size</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody >
			<?php

		
			$query = "select o.id as oid, o.order_id, o.size, o.quantity, s.id as sid, s.brand, s.name, s.code, s.price, s.color from order_item o, shoe s where o.prod_id=s.id and o.order_id='$order_id' and o.user_id= '$user_id'";
			$select = mysqli_query($con,$query);
			while($rows=mysqli_fetch_assoc($select)){
						
				$brand = $rows['brand'];
				$name = $rows['name'];
				$price= $rows['price'];
				$size = $rows['size'];
				$code = $rows['code'];
				$color = $rows['color'];
				$quantity = $rows['quantity'];
				
				$total += $price * $quantity ;
				




?>
				<tr >
					<td><?php echo $brand." ".$name ; ?></td>
					<td><?php echo $size ; ?></td>
					<td><?php echo $quantity; ?></td>
					<td><?php echo $price ; ?></td>
					<td><?php echo $price; ?></td>
				</tr>
				<?php
			}
			
			?>
				
            </tbody>
    </table>
    <div  style="padding:0.8rem; text-align:right; padding-top:1.5rem;">
			<span>Discount: <?php echo $discountprice ; ?></span><br>
			<span>Total: <?php echo $newprice ; ?></span>
		</div>

		</div>
		
	<a href="index.php" class="primary-btn" style="margin-left:69.5rem; margin-top:1rem; padding:0.5rem; background-color:red; color:white; border-color:white;">Save</a>
		
	</body>

    </html>
