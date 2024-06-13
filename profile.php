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
                            <span>My Profile</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <?php
                
                $sql = "select * from register where id='$user_id'";
                $query = mysqli_query($con,$sql);
                $rows = mysqli_fetch_assoc($query);

                $fname = $rows['fname'];
                $lname = $rows['lname'];
                $city = $rows['city'];
                $phone = $rows['phone'];
                $email = $rows['email'];

                ?>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="shopping__cart__table">
                        <h2>MY ACCOUNT</h2><br><br>
                        <div style="display:flex;">
                       <img src="images/icon/myprofile.png" style="width:2rem;"> 
                       <h4 style="padding-left:1rem;">Profile</h4> 
                       <a href="updateprofile.php" style="padding-left:20rem; color:red; font-size:1.1rem; text-decoration:underline;">Edit Profile</a>
                        </div><hr>
                       <div  style="display:flex; padding-top:1rem;">
                       <h6>First Name :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;"><?php echo $fname; ?></h6>
                        </div>
                        <div  style="display:flex; padding-top:1rem;">
                       <h6>Last Name :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;"><?php echo $lname; ?></h6>
                        </div>
                        <div  style="display:flex; padding-top:1rem;">
                       <h6>City :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;"><?php echo $city; ?></h6>
                        </div>
                        <div  style="display:flex; padding-top:1rem;">
                       <h6>Phone :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;"><?php echo $phone; ?></h6>
                        </div>
                        <div  style="display:flex; padding-top:1rem;">
                       <h6>Email :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;"><?php echo $email; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-top:5.7rem; padding-left:3rem;">
                <div style="display:flex;">
                       <img src="images/icon/lock.jpeg" style="width:2rem;"> 
                       <h4 style="padding-left:1rem;">Password</h4> 
                       <a href="updatepassword.php" style="padding-left:14rem; color:red; font-size:1.1rem; text-decoration:underline;">Change Password</a>
                        </div><hr>
                       <div  style="display:flex; padding-top:1rem;">
                       <h6>Password :</h6>
                       <h6 style="padding-left:0.5rem; color:#786363;">*******</h6>
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
</body>

</html>