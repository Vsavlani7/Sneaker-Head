<?php

include 'config.php';
session_start();

$newprice = $_GET['newprice'];
$discountprice = $_GET['discount'];
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}

$fname=$lname=$apart=$street=$city=$state=$email=$postal=$contact=$cemail="";
$Errfname=$Errlname=$Errapart=$Errstreet=$Errcity=$Errstate=$Errpostal=$Errcontact=$Errcemail="";
$Errnumber=$Errmonth=$Erryear=$Errcvv=$Errname="";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['loggedin'])){


        function validateCreditCard($cardNumber, $expiryMonth, $expiryYear, $cvv, $name) {
            // Remove any spaces or hyphens from the credit card number
        
            // Check that the credit card number contains only digits
            if (!ctype_digit($cardNumber)) {
                $Errnumber = "Credit Card number should only be in digits";
                return false;
            }
        
            // Check that the credit card number is the correct length for its type
            if (strlen($cardNumber) != 16) {
                $Errnumber = "Credit Card Number contains 16 digits";
                return false;
            }
        
            // Check that the expiry month is valid
            if (!ctype_digit($expiryMonth) || $expiryMonth < 1 || $expiryMonth > 12) {
                $Errmonth = "Enter Correct Credit Card Expiry Details";
                return false;
            }
        
            // Check that the expiry year is valid and in the future
            $currentYear = date('Y');
            $currentMonth = date('m');
            $expiryYear = (int)$expiryYear;
            
            if (!ctype_digit($expiryYear) || $expiryYear < $currentYear || ($expiryYear == $currentYear && $expiryMonth < $currentMonth)) {
                $Erryear = "Enter Correct Credit Card Expiry Details";
                return false;
            }
        
            // Check that the CVV contains only digits
            if (!ctype_digit($cvv)) {
                $Errcvv = "Enter Correct CVV Details";
                return false;
            }
        
            // Check that the CVV is the correct length for its type
            if (strlen($cvv) != 3) {
                $Errcvv = "Enter Correct CVV Details";
                return false;
            }

            if (!preg_match('/^[a-zA-Z\s]+$/', $name)){
                $Errname = "Name only contains letters";
                return false;
            }
        
            // All input fields are valid
            return true;
        }

        $cardNumber = $_POST['cardNumber'];
        $expiryMonth = $_POST['expiryMonth'];
        $expiryYear = $_POST['expiryYear'];
        $cvv = $_POST['cvv'];
        $name = $_POST['name'];
        $payment_method = $_POST['payment'];
      
        if($payment_method == 'credit'){
            if (validateCreditCard($cardNumber, $expiryMonth, $expiryYear, $cvv, $name)) {

                $sql = "insert into payment(user_id,number,expirymonth,expiryyear,cvv,name) values('$user_id','$cardNumber','$expiryMonth','$expiryYear','$cvv','$name')";
                $result=mysqli_query($con, $sql);
          
                if($result){

                    $order_id = mysqli_insert_id($con);

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $apart = $_POST['apart'];
                    $street = $_POST['street'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $postal = $_POST['postal'];
                    $email = $_POST['email'];
                    $contact = $_POST['contact'];
                    $cemail = $_POST['cemail'];

                    

                        if(!preg_match('/^[a-zA-Z]*$/', $fname)){
                    
                            $Errfname=" First Name contains only letter";	  
                        }else{
                            $fname = $_POST['fname'];
                        }
            
                        if(!preg_match('/^[a-zA-Z]*$/', $lname)){
                    
                            $Errlname=" Last Name contains only letter";	    
                        }else{
                            $lname = $_POST['lname'];
                        }
            
                        if(preg_match('/^[a-zA-Z0-9\s\.,#-]+$/', $apart)){

                            $apart = $_POST['apart'];
                                
                        }else{

                            $Errapart=" Apartment Numbers contains only letter and numbers";	 
                        }
            
                        if(preg_match('/^[a-zA-Z0-9\s]+$/', $street)){

                            $street = $_POST['street'];	

                        }else{

                            $Errstreet=" Street Names contains only letter and numbers";
                            
                        }
            
                        if(!preg_match('/^[a-zA-Z]+$/', $city)){
                    
                            $Errcity=" City Names contains only letter";	  
                        }else{
                            $city = $_POST['city'];
                        }
            
                        if(!preg_match('/^[a-zA-Z]+$/', $state)){
                    
                            $Errstate=" State Name contains only letter";	   
                        }else{
                            $state = $_POST['state'];
                        }

                        if(preg_match('/^[0-9]{6}+$/', $postal)){
                            $postal = $_POST['postal'];
                        }else{
                            $Errpostal = "Pincode is invalid";
                        }

                        if(preg_match('/^[0-9]{10}+$/', $contact)){
                            $contact = $_POST['contact'];
                        }else{
                            $Errcontact = "Contact is invalid";
                        }

                        if(filter_var($cemail, FILTER_VALIDATE_EMAIL)){
                            $cemail = $_POST['cemail'];
                        }else{
                            $Errcemail="Email is invalid";
                        }
            
                      
                    
                    if (empty($Errfname) && empty($Errlname) && empty($Errapart) && empty($Errstreet) && empty($Errcity) && empty($Errstate) && empty($Errpostal) && empty($Errcontact) && empty($Errcemail) ){

                    $new_query = "insert into orders (order_id,user_id,fname,lname,country,apart,street,city,state,postal,email,c_number,c_email) values ('$order_id','$user_id','$fname','$lname','India','$apart','$street','$city','$state','$postal','$email','$contact','$cemail')" ;
                    $new_cart = mysqli_query($con, $new_query);

                    if($new_cart){

                
                        $order_id = mysqli_insert_id($con);

                        $newsql="select * from cart where user_id=$user_id";
                        $newquery=mysqli_query($con, $newsql);
                        while($rows=mysqli_fetch_assoc($newquery)){

                            $prod_id = $rows['prod_id'];
                            $prod_size = $rows['size'];
                            $prod_quantity = $rows['quantity'];

                            
                            $insert_items = "insert into order_item (order_id, user_id, prod_id, size, quantity,price) values ('$order_id','$user_id','$prod_id','$prod_size','$prod_quantity','$newprice')";
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
                
                    }
                }else{
                    echo "Something went wrong";
                }
            
            }else{
                echo "Credit Card information is not valid";
            }
        
            }elseif($payment_method == 'cash'){
                
                $sql2 = "insert into payment(user_id,number,expirymonth,expiryyear,cvv,name) values('$user_id','-','-','-','-','-')";
                $result=mysqli_query($con, $sql2);
          
                if($result){

                    $order_id = mysqli_insert_id($con);

                    $new_query = "insert into orders (order_id,user_id,fname,lname,country,apart,street,city,state,postal,email,c_number,c_email) values ('$order_id','$user_id','$fname','$lname','$country','$apart','$street','$city','$state','$postal','$email','$contact','$cemail')" ;
                    $new_cart = mysqli_query($con, $new_query);

                    if($new_cart){

                
                        $order_id = mysqli_insert_id($con);

                        $newsql="select * from cart where user_id=$user_id";
                        $newquery=mysqli_query($con, $newsql);
                        while($rows=mysqli_fetch_assoc($newquery)){

                            $prod_id = $rows['prod_id'];
                            $prod_size = $rows['size'];
                            $prod_quantity = $rows['quantity'];
                        

                            
                            $insert_items = "insert into order_item (order_id, user_id, prod_id, size, quantity,price) values ('$order_id','$user_id','$prod_id','$prod_size','$prod_quantity','$newprice')";
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

                            header("Location: try.php?orderid=$order_id&newprice=$newprice&discount=$discountprice");
                            exit;
                    }else{
                        echo "<script>Something Wrong</script>";
                    }
                }else{
                    echo "Something went wrong";
                }

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
	$oldfname = $rows['fname'];
	$oldlname = $rows['lname'];
	$oldcity = $rows['city'];
	$oldphone = $rows['phone'];
	$oldemail = $rows['email'];
	

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
    .error{
        color:red;
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
                                        <p>Fist Name<span class="error">*<?php echo $Errfname ; ?></span></p>
                                        <input type="text" name="fname" value="<?php echo $oldfname ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span class="error">*<?php echo $Errlname ; ?></span></p>
                                        <input type="text" name="lname" value="<?php echo $oldlname ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country</p>
                                <input type="text" name="country" value="India" disabled="disabled">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span class="error">*<?php echo $Errapart." ".$Errstreet ; ?></span></p>
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)" name="apart" required>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="street" required>
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span class="error">*<?php echo $Errcity ; ?></span></p>
                                <input type="text" name="city" value="<?php echo $oldcity ?>" required>
                            </div>
                            <div class="checkout__input">
                                <p>State<span class="error">*<?php echo $Errstate ; ?></span></p>
                                <input type="text" name="state" required>
                            </div>
                            <div class="checkout__input">
                                <p>Postcode <span class="error">*<?php echo $Errpostal ; ?></span></p>
                                <input type="text" name="postal" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email</p>
                                        <input type="text" name="myemail" value="<?php echo $oldemail;?>" disabled="disabled" >
                                        <input type="hidden" name="email" value="<?php echo $oldemail;?>">

                                    </div>
                                </div>
                            </div>
                            <h5 style="padding-top:1rem ;padding-bottom:2rem ;">Enter Contact details</h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span class="error">*<?php echo $Errcontact ; ?></span></p>
                                        <input type="text" name="contact" value="<?php echo $oldphone ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span class="error">*<?php echo $Errcemail ; ?></span></p>
                                        <input type="text" name="cemail" required>

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
                                            <h7>Price : <h7 style="color:red;">₹<?php echo $price ?></h7></h7><br>
                                           
											<hr>
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
                                    <li><?php echo $brand.$name ?> <span>₹<?php echo $price ?></span></li>
                                    
                                </ul>
								<?php
								}
								?>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>₹<?php echo $total ?></span></li>
                                    <li>Discount <span>₹<?php echo $discountprice ; ?></span></li>
                                    <li>Total <span>₹<?php echo $newprice ?></span></li>
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
         
            <input type="radio" name="payment" value="credit" id="credit" onclick="showForm()" style="margin-left:18rem;  height:1rem; width:2%;"><label style="margin-left:0.5rem; font-size:1.5rem;">Credit Card </label> 
            
            <input type="radio" name="payment" value="cash" id="cash" onclick="hideForm()" style="margin-left:18rem;  height:1rem; width:2%; padding-top:2rem;"><label style="padding-top:2rem; margin-left:0.5rem; font-size:1.5rem;">Cash on Delivery </label> 
            
            <div class="credit-card-form" id="myForm" style="display: none;">
            <form>
        
  
    <div class="form-group">
      <label for="card-number">Card Number</label><span class="error"><?php echo $Errnumber ; ?></span>
      <input type="text" id="card-number" name="cardNumber" placeholder="0000 0000 0000 0000" required>
      
    </div>
    <div style="display:flex;">
    <div class="form-group">
      <label for="expirymonth">Expiry Month</label><span class="error"><?php echo $Errmonth ; ?></span>
      <input type="text" id="expirymonth" name="expiryMonth" placeholder="MM" required>
    </div>
    <div class="form-group">
      <label for="expiryyear">Expiry Year</label><span class="error"><?php echo $Erryear ; ?></span>
      <input type="text" id="expiryyear" name="expiryYear" placeholder="YYYY" required>
      
    </div>
    <div class="form-group" style="margin-left:5rem;">
      <label for="cvv">CVV</label><span class="error"><?php echo $Errcvv ; ?></span>
      <input type="text" id="cvv" name="cvv" placeholder="123" required>
     
    </div>
</div>
    <div class="form-group">
      <label for="name">Name on Card Holder</label><span class="error"><?php echo $Errname ; ?></span>
      <input type="text" id="name" name="name" placeholder="Vishal Savlani" required>
      
    </div>
 
</div>


<div style="display:flex;">
<input type="submit" name="submit" style="margin-left:18rem; padding-right:2rem; padding-left:2rem;">
<a href="cart.php" ><button style="margin-left:1rem; padding-right:2rem; padding-left:2rem;">Back</button></a>

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
    <script>
        function showForm(){
            document.getElementById("myForm").style.display = "block";
        }

        function hideForm(){
            document.getElementById("myForm").style.display = "none";
        }
        </script>
    
    

        </script>
</body>

</html>