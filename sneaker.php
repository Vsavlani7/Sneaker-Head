<?php

include 'config.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $selected_brand = isset($_GET["brand"]) ? $_GET["brand"] : "";

}else{

    $selected_brand = "";
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
    <style>
        .content {
        /* width: 555px; */
        /* height: auto; */
 
        overflow: hidden;
        position: relative;
        cursor: pointer;
      }

      .content img:hover {
        transform: scale(1.08);
      }
      .content img {
        width: 100%;
        height: 100%;
        transition: all 1s;
      }
        </style>
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
                        <li  class="active"><a href="./sneaker.php" >Sneaker</a></li>
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
    </header>    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option" style="padding:6px; background:white;">
            <div class="row" style="padding-left:15px;">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <span>Sneaker</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <img src="images/banner3.png"  width="100%" style="padding:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); overflow: hidden;">
    <section class="shop spad" style="padding-top:5rem;">
        <!-- <div class="container"> -->
                <div class="col-lg-12">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p >SEE WHAT FITS YOU</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" >
                                <div class="shop__product__option__right" style="position:inherit; right:40px;">
                                <form id="filter_form" method="get">
                                <div class="shop__product__option__right" style="position:inherit; right:40px;">
                                    <label for="brand">Brand:</label>
                                    <select name="brand" id="brand" onchange="submitForm()">
										<option value="">All</option>
                                        <option value="Nike">NIKE</option>
                                        <option value="Adidas">ADIDAS</option>
                                        <option value="Puma">PUMA</option>
                                        <option value="Converse">CONVERSE</option>
                                        <option value="Air Jordan">AIR JORDAN</option>
                                    </select>
                                </div>
								</form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                    <?php
					$sql="select * from shoe where id > 4";
                    if(!empty($selected_brand)){
                        $sql .= " and brand = '$selected_brand'";
                    }
					$result=mysqli_query($con,$sql);
                    if(!$result){
                        die("Error: " .mysqli_error($con));
                    }

					while($rows=mysqli_fetch_assoc($result)){

					$shoe_id = $rows['id'];
					$image = $rows['img4'];
					$brand = $rows['brand'];
					$name = $rows['name'];
					$color = $rows['color'];
					$code = $rows['code'];
					$price = $rows['price'];
					?>
						<div class="col-lg-3 col-md-5 col-sm-5" >
                            <div class='product__item' >
                                <div class="product__item__pic set-bg"> 
                                    <div class="content">
                                <a href='sneaker_detail.php?add_to_cart=<?php echo $shoe_id; ?>'><img src="images/Sneakers/<?php echo $image; ?>" ></a>
                    </div>
                                    <ul class='product__hover'>
                                        <li><a href='mywish.php?shoeid=<?php echo $shoe_id; ?>' id='submit-form'><img src='images/icon/heart2.png' alt='' style="width:4rem;"></a>                                      
                                    </ul>
                                </div>
                                <div class='product__item__text' style="margin-top:6px;">
                                    <h7><?php echo $name; ?></h7><br>
                                    <h7>Brand : <h7><?php echo  $brand ; ?></h7></h7><br>
                                    <!-- <h7>Color : <h7><?php echo $color ; ?></h7></h7><br> -->
									
                                    <h7>Style : <h7><?php echo $code ; ?></h7></h7><br>
									
                                    <h7 style="color:red; padding-top:0.3rem;"> ₹<?php echo $price; ?></h7>
                                </div>
								
                            </div>
                        </div>						
						<?php
					}
					?>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <!-- Js Plugins -->
    <script>
        function submitForm(){
            document.getElementById("filter_form").submit();
        }

    </script>
   <?php
			include 'footer.php';
		?>