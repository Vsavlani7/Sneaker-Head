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
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>ON THE RISE: INDIA'S BURGEONING SNEAKER SCENE</h2>
                        
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
                        <img src="images/blog-details/blog-banner5.jpg" alt="">
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
                            <p>India is known for its abundance of bright clothing and intricate textiles, but when it comes to sneakers, it’s a different story. 
							Though the members of the budding sneaker scene only make up a fraction of India’s 1.3 billion people, they have recently been making international waves. 
							Major cities Mumbai, New Delhi, and Bangalore are sneaker hotspots, and have become home to many sneakerheads, as well as India’s two major multi-brand sneaker stores: VegNonVeg and Superkicks.</p>
                            <p>As the community develops, the number of collaborations, brands, influencers and fanatics increases, yet gaping holes in the community have also become apparent. 
							So, we’ve tracked down some of the founding members of the strong but powerful Indian sneaker scene to share their experiences, hopes, complaints, suggestions, habits, and more.
							</p>
							
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“when you are a sneakerhead you never stop collecting”</p>
                            <h6>_sneakerhead _</h6>
                        </div>
                        <div class="blog__details__text">
						 
						<h2>Cause for Celebration</h2>
                            <p></p>
							<p>  As pioneers in the Indian sneaker game, the VegNonVeg team have a lot of control in shaping the future of this community. 
							Perhaps the epitome of all the excitement around the nascent Indian sneaker community was VegNonVeg’s release of the Nike Air Jordan 4 ‘What The’ in late 2022. 
							Local sneakerheads camped out for two nights prior to the release – a tradition painfully familiar to Western sneaker communities.
							</p>
                            <p>
							On the Saturday morning of the drop, with tired punters waiting in line, out of nowhere appeared a marching band decked out in custom VegNonVeg x ‘What The 4’ 
							uniforms to announce and celebrate the sneaker’s arrival. A huge bowl of fresh samosas was then presented to share with the hungry and dedicated fans, as everyone took photos with the band. 
							Attention sneaker stores: try to top that fanfare at your next big release!
							</p>
							<img src="images/blog-details/blog-detail7.jpg" alt="">
							<p></p>
							<h2>Gaining influence</h2>
							<p>While sneaker influencers and ‘shoetubers’ are a staple of international sneaker markets, 
							in India there are just a few bloggers in this subtle influencer community. 
							Female sneakerhead and Head of Content at VegNonVeg, Shivani Boruah, and her daily fit-pics have amassed 14K followers on Instagram, making her one of India’s most prominent sneaker influencers. 
							Additionally, many Bollywood stars have increasingly been spotted wearing the coolest kicks (sneakerstarsindia is an Instagram page dedicated to this).
							</p>
							<p>Bollywood fashion trends often inform the trends followed by the masses, but these celebrities regularly take sneaker advice from fashion and streetwear bloggers like Shivani Boruah, Aditya Bhalla, Uday Shanker, Shaun Das, Henry Vinoth (who also runs sneakernewsindia), and Aman Parmar. 
							Superkicks use their Instagram page to connect with ‘sneaker seekers’: people who are on the fringes of the sneaker scene but not yet fully into it. Sangeet wants people to know that ‘it’s a very inclusive culture. People tend to get intimidated by sneakerheads and sneaker culture, they think 
							“if I don’t wear that kind of cool shoe I’m not a part of it,” but that’s not the case.’
							</p>
							<img src="images/blog-details/blog-detail8.jpg" alt="">
							<p></p>
							<h2>Foundation for the Future</h2>
							<p>
							While there are still many obstacles to be faced by Indian sneakerheads on the daily, there’s also plenty of room for improvement. 
							Thankfully, in the face of these obstacles, the existing sneakerheads are managing to remain positive. ‘I mean, we sound frustrated – we’re not’ Parth assures. 
							‘It’s a growing market, it’s gonna take time, but I think it will get there eventually.’While nobody can accurately predict exactly where ‘there’ is, the sneaker community in India has the potential to expand exponentially.
							</p>
							<p>Brands like PUMA and adidas have already recognised the growing market and initiated partnerships. Increasing numbers of brands and shoes are entering the market. 
							Collection launches and sneaker releases are well-attended. Stories about sneakerheads are popping up in the local news. Who knows what could happen next. Once it gets ‘there’, 
							it may just blow the rest of us out of the water.</p>
							<p></p>
							<img src="images/blog-details/blog-detail9.jpg" alt="">
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