<?php
error_reporting(0); 
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $sql = "insert into comment(user_id,name,email,phone,comment) values('$user_id','$name','$email','$phone','$comment')";
    $result=mysqli_query($con,$sql);
    if($result){
        $_SESSION['success_message'] = "Comment Added successfully";
    }else{
        echo "something Wrong";
    }


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
    <title>Sneaker Blogs | Template</title>

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
    <style>
        .blog__details__comment form input {
            color:black;
        }
        .blog__details__comment form textarea {
            color:black;
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
    <section class="breadcrumb-option" style="padding:6px; background:white;">
            <div class="row" style="padding-left:15px;">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./blog.php">Blog</a>
                            <span>Blog-Details</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Header Section Begin -->

    <!-- Header Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>SNEAKERS TRENDS TO TURN UP HEAT THIS SEASON!</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="images/blog-details/blog-banner3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <p>Sneakers, popularized by sportsmen early on, soon became mainstream heroes in just a few decades. 
							They shone bright on the sports scene and were recast on the fashion runways claiming staunch dominance for good. 
							Today, the sneaker can be paired with almost any other outfit you own. It even goes well with a tailored suit. 
							So kick the last year in the gut by investing in a killer pair of sneakers this 2021. Here are some styles that must feature on your fashion radar.</p>
							
							<img src="images/blog-details/blog-banner2.jpeg" alt="">
							
							
                            <p>Chunky soles</p>
							
							<p>The heavy duty chunky sole reigned like a royal this season and the trend is here on a long staycation, giving the classic trainer a run for its money. 
							These sneakers are now equipped with sturdier panels along with a regular sole for better grip and performance. 
                             Team these A-stars with khakis for a more off-duty casual look instead of co-ords.
							</p>
							
							<img src="images/blog-details/blog-detail2.jpeg" alt="">
							
							<p>Classic basic</p>
							
							<p> This one’s for all the minimalists who would like a bit of edge with their style. 
							   Opt for a pair with classic minimal colours such as bright white or subtle neutral shades off-set with edgy logo-prints or stitched panels. Add that extra edge with trendy shoe laces in contrasting colours. 
                               Wear them with well-tailored suiting as opposed to denims. 
							</p>
							
							<img src="images/blog-details/blog-detail3.jpeg" alt="">
							
							<p>Hi-tech</p> 
							<p>Designed for high performance on the running track, hi-tech runners will not only make the lap from start to finish like pros but will also grace your wardrobe with the much needed stylish edge. 
							Now available in abstract shapes with indents on the sole for better landing — some are even made to resemble a tough terrain. All in all, these are worth the spend. Pair them with oversized hoodies and utility shorts. 
							Throw on a bum bag worn like a sling bag – just for kicks!</p>
							
							<img src="images/blog-details/blog-detail4.jpg" alt="">
							
							<p>Neon effect</p> 
							<p>This one is for all the daredevils, the ones who gravitate towards and embrace bright and intrepid colour choices. A sneaker in all neon exudes sheer confidence and makes a bold statement. 
							Be sure that you don’t overdo the rest of your outfit (unless you can pull it off like a style god). Make subtle choices by picking a denim on denim outfit or a coordinated set in black. 
							   Then leave it to you sneakers to do all the sweet talking – and walking.</p>
							
							<img src="images/blog-details/blog-detail5.jpeg" alt="">
							
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“It's okay to be little obsessed with your shoes.</p>
                            <h6>_ sneakerhead _</h6>
                        </div>
                        <div class="blog__details__text">
						 
						
                        </div>
                        
                       
                        <div class="blog__details__comment">
                            <h4>Leave A Comment</h4>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                    <p >Name</p>
                                        <input type="text" placeholder="Enter Your Name" name="name">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                    <p >Email</p>
                                        <input type="text" placeholder="Enter Your Email" name="email">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                    <p >phone</p>
                                        <input type="text" placeholder="Enter Your Contact Deatils" name="phone">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                    <p >Comment</p>
                                        <textarea placeholder="Enter Your Comment" name="comment"></textarea>
                                        <button type="submit" name="submit" class="site-btn">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->


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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        <?php 

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