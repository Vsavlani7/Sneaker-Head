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
    <title></title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

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
       <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Types Of Sneakers You’ll Kill For- Know How to Wear Sneakers!</h2>
                        
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
                        <img src="images/blog-details/blog-banner.jpg" alt="">
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
                            <p>Sneakers are easily one of the best trends this decade. These versatile kicks can easily 
							   amp up your fashion. Read this listicle of 8 types of sneakers that are absolutely  dope and 
							   learn how to wear sneakers for a wicked style while you’re at it!</p>
                            <p>From making a dominant appearance on every relevant social-media influencer’s page to being 
							   burnt in order to make a political statement – Sneakers have taken-on a new cult-like symbolism in the 21st century.
							   “Well suited for a physically active and comfortable life, this is a type of footwear that comes with a flexible sole 
							   for a swagger-driven soul!”
							</p>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“It's okay to love your sneakers more than you love
                                most of the people”</p>
                            <h6>_ Kalon sneakers _</h6>
                        </div>
                        <div class="blog__details__text">
						 
						<h2>Sneaker are comfortable and stylish footwear for all casual occasions</h2>
                            <p>These are a pair of casual shoes for women which allow them to look great without trying too hard! Also, these look like the most comfortable pair of sneakers ever created because of how comfortable each and every person wearing them looks – 
							if only there were unicorn sneakers, which weren’t just sneakers for girls but available to all the unicorn and sneaker obsessed women out there (which are definitely a high number). 
							Though if even they do launch unicorn sneakers, nothing is going to beat the white sneakers outfit obsession!
							</p>
                            <p>With this fashion trend catching up to young and old alike, we’ll be seeing an episode of Million Dollar Closets ft sneakers for women pretty soon. 
							As we’re well aware, diamonds are always going to be girls best friends, but a close runner up is shoes for women. After all, Cinderella is proof that a new pair of shoes can change your life!
							</p>
							<img src="images/blog-details/blog-img1.jpg" alt="">
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

    <!-- Footer Section Begin -->
   
    <!-- Footer Section End -->

    <!-- Search Begin -->
   
    <!-- Search End -->

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