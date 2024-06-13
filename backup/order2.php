<?php

include 'config.php';
session_start();

$newprice = $_GET['newprice'];
$discountprice = $_GET['discount'];
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['loggedin'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $country = $_POST['country'];
        $street = $_POST['street'];
        $apart = $_POST['apart'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postal = $_POST['postal'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $cemail = $_POST['cemail'];

        $card_number = $_POST['card_number'];
        $expiry = $_POST['expiry'];
        $cvv = $_POST['cvv'];
        $name = $_POST['name'];
        $payment_method = $_POST['payment'];
      
        if($payment_method == 'credit'){

            $sql = "insert into payment(user_id,number,expiry,cvv,name) values('$user_id','$card_number','$expiry','$cvv','$name')";
            $result=mysqli_query($con, $sql);
          
            if($result){

                $order_id = mysqli_insert_id($con);

                $new_query = "insert into orders (order_id,user_id,fname,lname,country,street,apart,city,state,postal,email,c_number,c_email) values ('$order_id','$user_id','$fname','$lname','$country','$street','$apart','$city','$state','$postal','$email','$contact','$cemail')" ;
                $new_cart = mysqli_query($con, $new_query);

                if($new_cart){

                
                    $order_id = mysqli_insert_id($con);

                    $newsql="select * from cart where user_id=$user_id";
                    $newquery=mysqli_query($con, $newsql);
                    while($rows=mysqli_fetch_assoc($newquery)){

                        $prod_id = $rows['prod_id'];
                        $prod_size = $rows['size'];
                        $prod_quantity = $rows['quantity'];
                        $prod_price = $rows['price'];
                        

                            
                        $insert_items = "insert into order_item (order_id, user_id, prod_id, size, quantity,price) values ('$order_id','$user_id','$prod_id','$prod_size','$prod_quantity','$prod_price')";
                        $insert_items_query = mysqli_query($con, $insert_items);

                        $sql="select * from shoe where id= '$prod_id'";
                        $query=mysqli_query($con,$sql);
                        while($rows=mysqli_fetch_assoc($query)){

                            $size6 = $rows['size6'];
                            $size7 = $rows['size7'];
                            $size8 = $rows['size8'];
                            $size9 = $rows['size9'];
                
                            if($prod_size == '6'){
                                $newsize = $size6 - $prod_quantity;
                                $updatesql = "update shoe set size6='$newsize' where id='$prod_id'";
                                mysqli_query($con, $updatesql);
                            }elseif($prod_size == '7'){
                                $newsize = $size7 - $prod_quantity;
                                $bupdatesql = "update shoe set size7='$newsize' where id='$prod_id'";
                                mysqli_query($con, $bupdatesql);
                            }elseif($prod_size == '8'){
                                $newsize = $size8 - $prod_quantity;
                                $cupdatesql = "update shoe set size8='$newsize' where id='$prod_id'";
                                mysqli_query($con, $cupdatesql);
                            }elseif($prod_size == '9'){
                                $newsize = $size9 - $prod_quantity;
                                $dupdatesql = "update shoe set size9='$newsize' where id='$prod_id'";
                                mysqli_query($con, $dupdatesql);
                            } 
                
                
                            $deletequery = "delete from cart where prod_id='$prod_id'";
                            mysqli_query($con, $deletequery);
                        }

                    }

                    header("location: try.php?orderid=$order_id&newprice=$newprice&discount=$discountprice");
                        exit;
                }else{
                echo "<script>Something Wrong</script>";
                }
            }else{
            echo "Something went wrong";
            }
        }elseif($payment_method == 'cash'){

        }
    }else{

        echo "<script type = \"text/javascript\">
        alert(\"Login Yourself First\");
        window.location = (\"login.php\")
        </script>";
        exit;
    }
}
    


$sql="select * from cart JOIN register on register.id=cart.user_id where user_id=$user_id";
$query=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($query)){
	$fname = $rows['fname'];
	$lname = $rows['lname'];
	$city = $rows['city'];
	$phone = $rows['phone'];
	$email = $rows['email'];
	

}


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
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
    .checkout__input input{
            color:black;
        }
        </style>
</head>

<body>
   
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form  method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"> Enter the details to process the order...</h6>
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="fname" value="<?php echo $fname ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="lname" value="<?php echo $lname ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" name="country">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="street">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)" name="apart">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city" value="<?php echo $city ?>">
                            </div>
                            <div class="checkout__input">
                                <p>State<span>*</span></p>
                                <input type="text" name="state" >
                            </div>
                            <div class="checkout__input">
                                <p>Postcode <span>*</span></p>
                                <input type="text" name="postal">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?php echo $email ?>">
                                    </div>
                                </div>
                            </div>
                            <h5 style="padding-top:1rem ;padding-bottom:2rem ;">Enter Contact details</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="contact" value="<?php echo $phone ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="cemail">

                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                        
                                <p>Please enter order details properly.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                        <tbody>
						<?php
							$sql="select * from cart where user_id=$user_id";
							$query=mysqli_query($con,$sql);
							while($rows=mysqli_fetch_assoc($query)){
								$id = $rows['prod_id'];
								$image = $rows['image'];
								$brand = $rows['brand'];
								$name = $rows['name'];
								$price= $rows['price'];
								$size = $rows['size'];
								$code = $rows['code'];
								$color = $rows['color'];
								$quantity = $rows['quantity'];
								
						?>
                <div style="display:flex;">
                                <tr style="background-image: url(white.jpg); border-radius:1.6rem; ">
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic" >
                                            <img src="images/Sneakers/<?php echo $image ?>" alt="" style="width: 10rem; border-radius: 1.5rem; margin:0.5rem;">
                                        </div>
                                        <div class="product__cart__item__text" style="padding-top:2rem; padding-left:1rem;  ">
                                            <h5 style="font-size:22px;"><?php echo $brand ?> <?php echo $name; ?></h5>
                                            <h7>Size : <h7><?php echo $size; ?></h7><h7><br>
                                            <h7>Color : <h7><?php echo $color; ?></h7></h7><br>
                                            <h7><?php echo $code; ?></h7><br>
											<h7>Quantity : <h7><?php echo $quantity; ?></h7><h7><br>
                                            <h7>Price : <h7 style="color:red;"><?php echo $price ?></h7></h7><br>
											
                                        </div>
                                    </td>
                                </tr>
    </div>
    <?php
		}
	?>
                             </tbody>
							 
                            <div class="checkout__order" style="background-color: #f0f0f0;">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
								<?php
								$sql="select * from cart JOIN register on register.id=cart.user_id where user_id=$user_id";
								$query=mysqli_query($con,$sql);
								while($rows=mysqli_fetch_assoc($query)){
									$brand = $rows['brand'];
									$name = $rows['name'];
									$quantity = $rows['quantity'];
									$price= $rows['price'];
									$total += $price * $quantity ;
									?>
                                <ul class="checkout__total__products">
                                    <li><?php echo $brand.$name ?> <span><?php echo $price ?></span></li>
                                    
                                </ul>
								<?php
								}
								?>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span><?php echo $total ?></span></li>
                                    <li>Discount <span><?php echo $discountprice ; ?></span></li>
                                    <li>Total <span><?php echo $newprice ?></span></li>
                                </ul>
                                
                            </div>
							
						
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section End -->
    <section class="checkout spad">
        <div class="container">
            <h3>Payment Method</h3>

            <input type="radio" name="payment" value="credit" id="cash" style="margin-left:18rem;  height:1rem; width:2%;"><label style="margin-left:0.5rem; font-size:1.5rem;">Credit Card </label> 
        <div class="credit-card-form">
  <form>
    <div class="form-group">
      <label for="card-number">Card Number</label>
      <input type="text" id="card-number" name="card_number" placeholder="0000 0000 0000 0000">
    </div>
    <div style="display:flex;">
    <div class="form-group">
      <label for="expiry">Expiry Date</label>
      <input type="text" id="expiry" name="expiry" placeholder="MM / YY">
    </div>
    <div class="form-group" style="margin-left:5rem;">
      <label for="cvv">CVV</label>
      <input type="text" id="cvv" name="cvv" placeholder="123">
    </div>
</div>
    <div class="form-group">
      <label for="name">Name on Card Holder</label>
      <input type="text" id="name" name="name" placeholder="Vishal Savlani">
    </div>
 
</div>
<input type="radio" name="payment" value="cash" id="cash" style="margin-left:18rem;  height:1rem; width:2%; padding-top:2rem;"><label style="padding-top:2rem; margin-left:0.5rem; font-size:1.5rem;">Cash on Delivery </label> 

<div style="display:flex;">
<input type="submit" name="submit" style="margin-left:18rem; padding-right:2rem; padding-left:2rem;">
<button type="submit" style="margin-left:1rem; padding-right:2rem; padding-left:2rem;">Back</button>
</form>
</div>
</div>
    </section>

    

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>