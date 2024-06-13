<?php

session_start();


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
<style>
    /* .team__item:hover{
        transform: scale(1.1);
         filter: brightness(1);
         transition: all 500ms;
    } */
    .photo{
  /* position: absolute; */
  /* top: 50%; */
  /* left: 50%; */
  transform: translate(-50%, -50%);
  /* display: block; */
}

.photo img{
  /* width: 200px; */
  /* height: 280px; */
  object-fit: cover;
  /* filter: grayscale(100%) contrast(120%); */
  box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
  display: block;
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
  margin-top: -10px;
}

.photo:hover img{
  box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
}

.photo .glow-wrap{
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  margin-top: -10px;
}

.photo .glow{
  display: block;
  position:absolute;
  width: 40%;
  height: 200%;
  background: rgba(255,255,255,.2);
  top: 0;
  filter: blur(5px);
  transform: rotate(45deg) translate(-450%, 0);
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover .glow{
  transform: rotate(45deg) translate(450%, 0);
  transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover img,
.photo:hover .glow-wrap{
  margin-top: 0;
}

    </style>
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
                            <li class="active"><a href="./about.php" >About</a></li>
                            
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
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="about spad" style="padding-top:2rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="images/about/about.png" alt="" style=" box-shadow: 1px 1px 2px black, 0 0 25px rgb(31, 31, 32), 0 0 5px rgb(25, 25, 27);">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Who We Are ?</h4>
                        <p>We are known as Sneaker Head. We are online sneaker selling website, which is created by the three muskiteers namely Vishal , Tushar & Nisarg.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>What We Do ?</h4>
                        <p>We are sneaker sellers. We sell original sneakers of the renowned brands such as Nike, Puma etc. Main purpose of this website is to provide you every sneaker you want in the affordable rate.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Why Choose Us ?</h4>
                        <p>Here the question arise why to chose us. As we mentioned we are the certified partner of the famous sneaker companies and you can get every sneaker of many different brands here in resonable price and premium quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0" style="background-color: white;">
                    <div class="testimonial__text">
                        <span class="icon_quotations"></span>
                        <p>“Going out after work? Take your butane curling iron with you to the office, heat it up,
                            style your hair before you leave the office and you won’t have to make a trip back home.”
                        </p>
                        <div class="testimonial__author">
                            <div class="testimonial__author__text">
                                <h5>Kamal Singh</h5>
                                <p>Sneaker Collector</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial__pic set-bg" data-setbg="images/about/about2.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    
    <section class="team spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title">
                  <span>Sneaker Heads</span>
                  <h2>Meet Our Team</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team__item">
                  <a class="photo" href="https://www.instagram.com/_nisargvyas_/"><img src="images/about/nisarg.jpg" alt="">
                  <div class="glow-wrap">
                    <i class="glow"></i>
                  </div>
                </a>
                  <h4>Nisarg Vyas</h4>
                  <span>Manager</span>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team__item">
                  <a class="photo" href="https://www.instagram.com/itstushar05/"><img src="images/about/tushar.jpg" alt="">
                  <div class="glow-wrap">
                    <i class="glow"></i>
                  </div></a>
                  <h4>Tushar Singh</h4>
                  <span>Developer</span>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team__item">
                  <a class="photo" href="https://www.instagram.com/vsavlani/"><img src="images/about/vishal.jpg" alt="">
                  <div class="glow-wrap">
                    <i class="glow"></i>
                  </div></a>
                  <h4>Vishal Savlani</h4>
                  <span>Designer</span>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="team__item">
                  <a class="photo" href="https://www.instagram.com/dix.r___/"><img src="images/about/dixita.jpg" alt="" >
                  <div class="glow-wrap">
                    <i class="glow"></i>
                  </div></a>
                  <h4>Dixita Rana</h4>
                  <span>C.E.O</span>
              </div>
          </div>
      </div>
  </div>
</section>

    <!-- Team Section Begin -->
    <!-- <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Sneaker Heads</span>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <a href="https://www.instagram.com/_nisargvyas_/"><img src="images/about/nisarg.jpg" alt=""></a>
                        <h4>Nisarg Vyas</h4>
                        <span>Manager</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <a href="https://www.instagram.com/itstushar05/"><img src="images/about/tushar.jpg" alt=""></a>
                        <h4>Tushar Singh</h4>
                        <span>Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <a href="https://www.instagram.com/vsavlani/"><img src="images/about/vishal.jpg" alt=""></a>
                        <h4>Vishal Savlani</h4>
                        <span>Designer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <a href="https://www.instagram.com/dix.r___/"><img src="images/about/dixita.jpg" alt="" ></a>
                        <h4>Dixita Rana</h4>
                        <span>C.E.O</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Team Section End -->

    <h4 style="text-align: center; margin-bottom:2rem;">If you want to know the lastest updates follow us on social media.</h4>

  
        <!-- <div style=" padding: 3rem;"> 
            <a href="https://www.instagram.com/sneakerhead._.official/" style="padding-left: 37rem;"><img src="images/about/insta.png" alt="" style="width: 3rem;"></a>
            <a href="#" style="padding-left: 3rem;"><img src="images/about/facebook.jpeg" alt="" style="width: 3rem;"></a>
            <a href="#" style="padding-left: 3rem;"><img src="images/about/twitter.jpeg" alt="" style="width: 3rem;"></a>
        </div> -->
  

        <?php
			include 'footer.php';
		?>