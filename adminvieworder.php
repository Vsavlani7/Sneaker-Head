<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Sneaker Head">
    <meta name="keywords" content="Sneaker Head, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneaker Head</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
      .table td, .table th{
        vertical-align:middle;
      }
      .table th{
        padding:1rem;
      }
      </style>
</head>
<body>
<header style="background-color:white; ">
        <hr style="width: 135%; border-top: 0.125rem solid rgb(0, 0, 0); margin: 0%; ">
        <div class="container" >
            <div class="row">
                <div>
                    
                    <div class="header__logo" style="padding: 0.313rem; padding-top: 0.75rem; padding-right: 3.125rem; padding-bottom: 0.625rem;">
                        <a href="./adminindex.php"><img src="images/vtn2.png" width="220px"></a>
                    </div>
                </div>
                <div >
                    <nav class="header__menu mobile-menu" style="padding:0.313rem; padding-top:0.75rem; ">
                        <ul>
                        <li><a href="./addsneaker.php" >Add Sneaker</a></li>
                            <li><a href="./viewuser.php" >View User</a></li>
                            <li><a href="./viewsneaker.php" >View Sneakers</a></li>
                            <li><a href="./adminvieworder.php">Orders</a></li>
                            <li><a href="./viewcomment.php" >Comments</a></li>                           
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
        <hr style="width: 135%; border-bottom: 0.125rem solid rgb(0, 0, 0); margin: 0px; ">
    </header>
    <section class="breadcrumb-option" style="padding:6px; background:white;">
            <div class="row" style="padding-left:15px;">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./adminindex.php">Home</a>
                            <span>View Order</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
	<div style="display:flex;">
		<h2 class="heading" style="color:red; margin:1rem; margin-bottom:1rem; font-size:1.5rem; margin-left:1.6rem;"> ORDERS </h2>
	</div>
    <div  style="min-height:465px; margin-left:1rem;  margin-right:1rem;">
        <table class="table">
          <thead style="background-color: #f52525;
    color: white; text-transform: uppercase;">
            <tr>
              <th scope="col" style="padding-left:1rem;">Id</th>
              <th scope="col">Order Id</th>
              <th scope="col">Product Id</th>
              <th scope="col">Size</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price(₹)</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Apartment</th>
              <th scope="col">Street</th>
              <th scope="col">City</th>
              <th scope="col">State</th>
              <th scope="col">Postal</th>
              <th scope="col">User Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Customer Email</th>
              <th scope="col">Date</th>
              
            </tr>
          </thead>
          <tbody>

            <?php
            include 'config.php';
            if (mysqli_connect_errno()) {
                die("Failed to connect to MySQL: " . mysqli_connect_error());
              }
              
              
              $query = "select order_item.id as oid, order_item.order_id, order_item.prod_id, order_item.size, order_item.quantity, order_item.price, orders.id as osid, orders.order_id, orders.fname, orders.lname, orders.apart, orders.street, orders.city, orders.state, orders.postal, orders.email, orders.c_number, orders.c_email, orders.date from order_item INNER JOIN orders ON order_item.order_id = orders.order_id";
							$select = mysqli_query($con,$query);
							while($rows=mysqli_fetch_assoc($select)){
								
								
								
								$oid = $rows['oid'];
								$order_id = $rows['order_id'];
								$prod_id = $rows['prod_id'];
								$size= $rows['size'];
								$quantity = $rows['quantity'];
								$price = $rows['price'];
								$fname= $rows['fname'];
                $lname= $rows['lname'];
                $street= $rows['street'];
                $apart= $rows['apart'];
                $city= $rows['city'];
                $state= $rows['state'];
                $postal= $rows['postal'];
                $email= $rows['email'];
                $c_number= $rows['c_number'];
                $c_email= $rows['c_email'];
                $date= $rows['date'];

                
                echo '<tr>
                <th scope="row" style="color:red; padding-left:1rem; ">'.$oid.'</th>
                <td>'.$order_id.'</td>
                <td>'.$prod_id.'</td>
                <td>'.$size.'</td>
                <td>'.$quantity.'</td>
                <td>'.$price.'</td>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$apart.'</td>
                <td>'.$street.'</td>
                <td>'.$city.'</td>
                <td>'.$state.'</td>
                <td>'.$postal.'</td>
                <td>'.$email.'</td>
                <td>'.$c_number.'</td>
                <td>'.$c_email.'</td>
                <td>'.$date.'</td>
                <td>
                </tr>';

              }
            

            ?>
          </tbody>
        </table>
    </div>
            </body>
            </html>