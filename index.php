<?php

include 'config.php';
session_start();

$sql="select * from shoe where id='12'";
$query=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($query);
$shoe_id = $rows['id'];					

$sql1="select * from shoe where id='33'";
$query1=mysqli_query($con,$sql1);
$rows=mysqli_fetch_assoc($query1);
$shoe_id1 = $rows['id'];	

$sql2="select * from shoe where id='11'";
$query2=mysqli_query($con,$sql2);
$rows=mysqli_fetch_assoc($query2);
$shoe_id2 = $rows['id'];	

/*$sql3="select * from shoe where id='21'";
$query3=mysqli_query($con,$sql3);
$rows=mysqli_fetch_assoc($query3);
$shoe_id3 = $rows['id'];	

$sql4="select * from shoe where id='22'";
$query4=mysqli_query($con,$sql4);
$rows=mysqli_fetch_assoc($query4);
$shoe_id4 = $rows['id'];						
*/
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
        .timer{
            position: relative;
        }
		.banner1{
			width:45rem;
		}
		.banner2{
			width:45rem;
		}
		.banner3{
			width:30rem;
		}
		.banner4{
			width:30rem;
		}
		.banner5{
			width:30rem;
		}
		.banner7{
			width:87.5rem;
		}
        .adidas {
  overflow: hidden;
  width:849px;
}

.image1 {
 transition: all 1000ms;
}



.adidas:hover .image1 {
  transform: scale(1.02);
  
}
.image2 {
 transition: all 1000ms;
}



.adidas2:hover .image2 {
  transform: scale(1.02);
  
}
.adidas2 {
  overflow: hidden;
  width:819px;
}



.content {
        width: 555px;
        height: auto;
 
        overflow: hidden;
        position: relative;
        cursor: pointer;
      }

      .content img:hover {
        transform: scale(0.96);
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
    <!-- Hero Section Begin -->
            <div class="hero__items set-bg" data-setbg="images/home/5.png"></div>
            <div style="display:flex;">
            <div class="adidas">
            <img src="images/home/adidas1.webp"  width="849" style="padding:1.25rem;" class="image1">
            </div>
            <div class="adidas2">
            <img src="images/home/adidas2.webp"  width="819" style="padding-top:1.25rem; padding-right:0.625rem; padding-bottom:1.25rem;" class="image2">
                                </div>
                                </div>
            <img src="images/brand/a.png"  width="170" style="margin-left:16rem;">
            <img src="images/brand/p.png"  width="200" style="margin-left:4.125rem;">
            <img src="images/brand/c.png"  width="150" style="margin-left:4.125rem;">
            <img src="images/brand/n.png"  width="180" style="margin-left:4.125rem">
            <img src="images/brand/j.png"  width="200" style="margin-left:4.125rem; margin-right:1.875rem;">
            <div style="display:flex">
            <div class="content">
            <a href="sneaker_detail.php?add_to_cart=<?php echo $shoe_id2; ?>"><img src="images/home/7.jpg"   width="555" style="padding-left:1.875rem; padding-right:0.625rem; padding-top:0.938rem; padding-bottom:1.25rem;"></a>
            </div>
            <div class="content">
            <a href="sneaker_detail.php?add_to_cart=<?php echo $shoe_id1; ?>"><img src="images/home/101.jpg"   width="545" style="padding-top:0.938rem; padding-bottom:1.25rem; "></a>
            </div>
            <div class="content">
            <a href="sneaker_detail.php?add_to_cart=<?php echo $shoe_id; ?>"><img src="images/home/6.jpg"  width="565" style="padding-left:0.625rem; padding-right:1.563rem; padding-bottom:1.25rem; padding-top:0.938rem;"></a>
                                </div>    
        </div>
            <a href="sneaker_detail.php?add_to_cart=<?php echo $shoe_id3; ?>"><img src="images/home/999.png"   style="padding-left:0px; padding-right:0px;"></a>
            <a href="sneaker_detail.php?add_to_cart=<?php echo $shoe_id4; ?>"><img src="images/home/timer1.png"  width="1500" style="margin-left:90px; padding-right:10px; padding-top:30px; padding-bottom:20px;"></a>
            <div class="col-lg-4 offset-lg-1">
                <div class="timer">
                <div class="categories__deal__countdown" style="position: absolute;
                bottom: 0.5rem;
                right: 1rem;
                font-size: 1.125rem;
                padding-bottom:2.5rem;">
                    <span>***************************************************</span>
                    <h2>Grab Your Special Edition</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn" style="background-color:darkolivegreen;">Shop now</a>
                </div>
            </div>
            </div>
           
        <?php
			include 'footer.php';
		?>
            