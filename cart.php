<?php

error_reporting(0);

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<script>
	
	</script>
</head>

<body style="overflow-x:hidden;">
   
    
<header style="background-color:white; ">
        <hr style="width: 100%; border-top: 0.125rem solid rgb(0, 0, 0); margin: 0%; ">
        <div class="container" >
            <div class="row">
                <div>
                    
                    <div class="header__logo" style="padding: 0.313rem; padding-top: 0.75rem; padding-right: 3.125rem; padding-bottom: 0.625rem;">
                        <a href="./index.php"><img src="images/vtn2.png" width="220px"></a>
                    </div>
                </div>
                <div >
                    <nav class="header__menu mobile-menu" style="padding:0.313rem; padding-top:0.75rem; ">
                        <ul>
                        <li><a href="./sneaker.php" >Sneaker</a></li>
                            <li><a href="./collab.php" >Collaboration</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./about.php" >About</a></li>
                            
                           <li style=" margin-left: 12.5rem; margin-right: 1.875rem;"> <a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a></li>
                           <li style=" margin-right: 1.875rem;"> <a href="cart.php"><img src="img/icon/cart.png" alt=""></a></li>
                            <li style=" margin-right: 1.875rem;"><a href="#"><img src="img/icon/person.jpeg" alt="" style="width:20px;"></a>
                                <ul class="dropdown" style="width: 18.75rem; height: 17.5rem; border-radius: 0.938rem; left: -4.375rem; top: 3.75rem; background-color: #161919bd;">
                                    <li style="margin-right: 3.125rem; padding: 0.313rem; padding-top: 0.938rem;"><a href="profile.php" style="
                                        font-size: 1rem;">My Profile</a></li>
                                    <li style="padding:  0.313rem;"><a href="wishlist.php" style="
                                        font-size: 1rem;">Wishlist</a></li>
                                   <li style="padding:  0.313rem;"><a href="myorder.php" style="
                                        font-size: 1rem;">My order</a></li>
                                    <li style="padding:  0.313rem;"><a href="contact.php" style="
                                        font-size: 1rem;">Contact Us</a></li>
                                    
									<?php
									if(isset($_SESSION["loggedin"])){
										echo "<li style='padding: 0.313rem; padding-left: 0.625rem; '><a href='logout.php' class='primary-btn' style='background-color:rgb(255, 255, 255); color: black;width: 200px; font-family: inherit; letter-spacing: 0px; margin-left: 35px; border-radius: 5px; text-align: center; '>Log Out</a></li>";
									}else{
										echo "<li style='padding: 0.313rem; padding-left: 0.625rem; '><a href='login.php' class='primary-btn' style='background-color:rgb(255, 255, 255); color: black;width: 200px; font-family: inherit; letter-spacing: 0px; margin-left: 35px; border-radius: 5px; text-align: center; '>Log In</a></li>
										
										<li style='padding:  0.313rem; padding-left: 0.625rem; '> <a href='register.php' class='primary-btn' style='background-color:rgb(255, 255, 255); color: black;width: 200px; font-family: inherit; letter-spacing: 0px; margin-left: 35px; border-radius: 5px; text-align: center; '>Register</a></li>";
									}
									?>
									
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
        <hr style="width: 100%; border-bottom: 0.125rem solid rgb(0, 0, 0); margin: 0px; ">
    </header>
    <section class="breadcrumb-option" style="padding:6px; background:white;">
            <div class="row" style="padding-left:15px;">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>My Cart</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
		<div class="user-profile">
		</div>
            <div class="row">
			
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <h2>MY SNEAKER COLLECTION</h2><br><br>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <form method="POST">
							<?php
							$query2 = "select * from cart where user_id= '$user_id'";
							$select = mysqli_query($con,$query2);
							while($rows=mysqli_fetch_assoc($select)){
								
								$newid = $rows['id'];
								$id = $rows['prod_id'];
								$image = $rows['image'];
								$brand = $rows['brand'];
								$name = $rows['name'];
								$price= $rows['price'];
								$size = $rows['size'];
								$code = $rows['code'];
								$color = $rows['color'];
								$quantity = $rows['quantity'];
								
								$total += $price * $quantity ;
                                $subtotal = $total;

                                
							
							?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic " >
                                            <a href="sneaker_detail.php?add_to_cart=<?php echo $id; ?>"><img src="images/Sneakers/<?php echo $image; ?>" alt="" style="width: 150px; border-radius: 20px;"></a>
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h5 style="font-size:22px;"><?php echo $brand.$name; ?></h5><br>
											<div style="display:flex">
                                            <h6>Size :</h6><h6><?php echo $size; ?></h6>
											</div>
											<div style="display:flex">
                                            <h6>Color:</h6><h6><?php echo $color ; ?></h6>
											</div>
											<div style="display:flex">
                                            <h6>Style:</h6><h6><?php echo $code ; ?></h6>
											</div>
                                            
                                        </div>
                                    </td>
                                    <td>
									<div class="input-group mb-3 product_data" style="width:130px">
									<!-- <button class="input-group-text decrement-btn">-</button> -->
									<input type="text" name="newquantity" class="form-control text-center qty-input bg-white" value="<?php echo $quantity; ?>" disabled >
									<!-- <button class="input-group-text increment-btn">+</button> -->

									</div>
                                        
                                    </td>
                                    <td class="cart__price" style="color: red;">₹<?php echo $price; ?></td>
                                    <td class="cart__close"><a href="delcart.php?id=<?php echo $id ?>& newid=<?php echo $newid ?>"><i class="fa fa-close"></i></a></td>
                                </tr> 
								<?php
                                
								}
								?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="sneaker.php">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <?php

                        $query4 = "select * from cart where user_id= '$user_id'";
                        $select2 = mysqli_query($con,$query4);
                        while($rows=mysqli_fetch_assoc($select2)){
                            $price = $rows['price'];
                            $quantity = $rows['quantity'];

                            $total2 += $price*$quantity;

                        }
    
                        

                        if(isset($_POST['submit_discount'])){

                            $discount_code = $_POST['discount'];
                            
                            $usage_query = "SELECT * FROM coupon_usage WHERE code = '$discount_code' and user_id='$user_id'";
                            $usage_result = mysqli_query($con,$usage_query);
                            /*$rows=mysqli_fetch_assoc($usage_result);
                            $num_uses = $rows['num_uses'];*/

                            if(mysqli_num_rows($usage_result) > 0){
                                $_SESSION['message'] = "Discount code is already been used";
                            }else{

                                $discount_query = "select discount_percentage from coupon_codes where code='$discount_code'";
                                $discount_result = mysqli_query($con,$discount_query);
                                if(mysqli_num_rows($discount_result)> 0){
                                    $rows=mysqli_fetch_assoc($discount_result);
                                    $discount_percentage = $rows['discount_percentage'];

                                    $discount_amount = $total2 * ($discount_percentage);
                                    $discount_price = $total2 - $discount_amount;
                                    $total = $discount_price;

                                    $newprice_query = "insert into coupon_usage(code, user_id) values('$discount_code','$user_id')";
                                    $newprice_select = mysqli_query($con,$newprice_query);

                                    if($newprice_select){
                                        $_SESSION['success_message'] = "Discount is applied";
                                        $_SESSION['success_message'] = " You saved ₹$discount_amount on this order.";

                                        
                                    }
                                }else{
                                    $_SESSION['message'] = "Coupon Code is invalid";
                                }
                            }
                        }




?>
                        <h6>Discount codes</h6>
                        
                            <input type="text" name="discount" placeholder="Coupon code">
                            <input type="submit" name="submit_discount" value="Apply" style="background-color:black; color:white;">
                        
                    </div>
                    </form>
                    <div class="cart__total" style="background-color: #f2f2f0">
                        <h5 style="font-size:22px;">Cart total</h5>
                        <ul>
                            <li>Subtotal <span>₹<?php echo $subtotal ; ?></span></li>
                            <li>Discount <span>₹<?php echo $discount_amount ; ?></span></li>
                            <li>Total <span>₹<?php echo $total ; ?></span></li>
                        </ul>
                        <a href="order.php?newprice=<?php echo $total; ?>&discount=<?php echo $discount_amount; ?>" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
                    
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    
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
	<script src="custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        <?php 
        if(isset($_SESSION['message'])) 
        {
             ?>

            alertify.set('notifier','position', 'top-center');
            alertify.error('<?= $_SESSION['message']; ?>');
            <?php 
            unset($_SESSION['message']);
        } 

        if(isset($_SESSION['success_message'])) 
        {
             ?>

            alertify.set('notifier','position', 'top-center');
            alertify.success('<?= $_SESSION['success_message']; ?>');
            <?php 
            unset($_SESSION['success_message']);
        } 
        ?>
    </script>
</body>

</html>