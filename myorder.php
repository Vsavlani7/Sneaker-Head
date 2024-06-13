<?php

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

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                                    <li style="padding: 0.313rem; padding-left: 0.625rem; "> <a href="login.php" class="primary-btn" style="background-color:rgb(255, 255, 255); color: black;width: 200px; font-family: inherit; letter-spacing: 0px; margin-left: 35px; border-radius: 5px; text-align: center; ">Log In</a></li>
                                    <li style="padding:  0.313rem; padding-left: 0.625rem; "> <a href="register.php" class="primary-btn" style="background-color:rgb(255, 255, 255); color: black;width: 200px; font-family: inherit; letter-spacing: 0px; margin-left: 35px; border-radius: 5px; text-align: center; ">Register</a></li>
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
    <section class="shopping-cart spad" style="padding-top:2rem;">
                    <div class="shopping__cart__table" style="margin-left:15rem; margin-right:10rem;">
                        <h2>MY ORDER</h2><br><br>
                        <table style="border-spacing: 1rem; border-collapse:unset;">
                            <!-- <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead> -->
                            <tbody >
                                <?php

                                $sql = "select o.id as oid, o.order_id, o.size, o.quantity, o.price, s.id as sid, s.img1, s.brand, s.name, s.code, s.color from order_item o, shoe s where o.prod_id=s.id and user_id= '$user_id'";
                                $select = mysqli_query($con,$sql);
							    while($rows=mysqli_fetch_assoc($select)){
								
                                $oid = $rows['oid'];
                                $id = $rows['order_id'];
                                $sid = $rows['sid'];
								$image = $rows['img1'];
								$brand = $rows['brand'];
								$name = $rows['name'];
								$price= $rows['price'];
								$size = $rows['size'];
								$code = $rows['code'];
								$color = $rows['color'];
								$quantity = $rows['quantity'];

                                ?>
                                <tr style="background-image: url(white.jpg); border-radius:1.6rem;  box-shadow: 0px 5px 15px rgb(121 121 121 / 30%);">
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic" >
                                            <img src="images/sneakers/<?php echo $image; ?>" alt="" style="width: 10rem; border-radius: 1.5rem; margin:0.5rem; margin-left:2rem; ">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h5 style="font-size:22px;"><?php echo $brand.$name; ?></h5>
                                            <h6><?php echo $brand; ?></h6>
                                            <h7>Size : <h7><?php echo $size; ?></h7><h7><br>
                                            <h7>Color : <h7><?php echo $color; ?></h7></h7><br>
                                            <h7><?php echo $code; ?></h7><br>
                                            <h7>Price : <h7 style="color:red;">₹<?php echo $price; ?></h7></h7>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display:flex;">
                                        <h6>QTY :</h6>
                                        <h6 style="margin-left:0.3rem;"><?php echo $quantity; ?></h6>
                                        </div>
                                    </td>
                                    <td><a href="sneaker_detail.php?add_to_cart=<?php echo $sid ?>"><input type="button" value="View Product" class="primary-btn" style="padding:0.4rem; letter-spacing:0.1rem; border-radius:0.4rem; color:black; background-color:white"></td>
                                    <td ><a href="vieworder.php?id=<?php echo $id; ?>&oid=<?php echo $oid; ?>&sid=<?php echo $sid ; ?>"><input type="button" value="View Order" class="primary-btn" style="padding:0.4rem; letter-spacing:0.1rem; border-radius:0.4rem; color:white; background-color:red"></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
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
</body>

</html>