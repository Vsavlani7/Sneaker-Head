
<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];
$order_id = $_GET['orderid'];
$newprice = $_GET['newprice'];

$query2 = "select * from orders where order_id='$order_id' and user_id='$user_id'";
$result2 = mysqli_query($con,$query2);
$rows= mysqli_fetch_assoc($result2);
$email = $rows['c_email'];


// $table ='<p style="letter-spacing: 0.5px;  font-size:inherit;">Billed To:</p>';
$table = '<div style="display:flex">';
$table .='<p>Billed to : '.$rows["fname"].' '.$rows["lname"].'<br><br>'.$rows["apart"].' '.$rows["street"].' '.$rows["city"].'<br>'.$rows["state"].' '.$rows["postal"].'<br>'.$rows["country"].'</p>';
$table .='<p style="letter-spacing: 0.5px; text-align:right;">Date : ' .$rows["date"]. '</p>';
$table .='</div>';

// Fetch data from the database
$query = "select order_item.id as oid, order_item.order_id, order_item.prod_id, order_item.size, order_item.quantity, order_item.price, shoe.id as sid, shoe.brand, shoe.name, shoe.color, shoe.code  from order_item INNER JOIN shoe ON order_item.prod_id = shoe.id  where order_id='$order_id' and user_id='$user_id' ";
			$result = mysqli_query($con,$query);

// Format the data as an HTML table
$table .= '<table style="width: 100%;
border-collapse: collapse;">';

// Add the table header row
$table .= '<thead><tr  style="color:red;">';
$table .= '<th style=" padding:0.3rem;">Brand</th>';
$table .= '<th style=" padding:0.3rem;" >Name</th>';
$table .= '<th style=" padding:0.3rem;" >Size</th>';
$table .= '<th style=" padding:0.3rem;" >Code</th>';
$table .= '<th style=" padding:0.3rem;" >Color</th>';
$table .= '<th style=" padding:0.3rem;" ></th>';
$table .= '<th style=" padding:0.3rem;" >Quantity</th>';
$table .= '<th style=" padding:0.3rem;" ></th>';
$table .= '<th style=" padding:0.3rem;" >Price</th>';
$table .= '</tr></thead>';

// Add the table body rows
$table .= '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    $table .= '<tr>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd;">' . $row["brand"] . '</td>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd;">' . $row["name"] . '</td>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd; text-align:center;">' . $row['size'] . '</td>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd;">' . $row['code'] . '</td>';
    $table .='<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd;">' . $row["color"] . '<td>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd; text-align:center;">' . $row["quantity"] . '<td>';
    $table .= '<td style="padding:0.2rem; padding-left:0.2; padding-right:0.2rem; border: 1px solid #ddd;">₹' . $row["price"] . '<td>';
    $table .= '</tr>';
}
$table .= '</tbody>';

// End the HTML table
$table .= '</table>';
$table .= '<div style="display:flex">';
$table .= '<p>Total :</p>';
$table .= '<p style="color:red; padding-left:0.3rem;">₹'.$newprice.'</p>';
$table .= '</div>';

// Generate the email
$to = $email;
$subject = 'Sneaker Head Invoice';
$message = '<html><body>';
$message .= '<h3 style="text-transform: uppercase;
font-family: inherit;
padding: 0.2rem;
font-style: italic;
padding-left: 1rem;
padding-right: 1rem;
background-color: red;
font-size:inherit;
letter-spacing: 0.1rem;
text-align:center;
color: white;">Sneaker Head</h3>';
$message .= $table;
$message .= '</body></html>';
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: sender@example.com' . "\r\n";

// Send the email
mail($to, $subject, $message, $headers);
header("location:invoice.php?orderid=$order_id&newprice=$newprice&discount=$discountprice");
?>
