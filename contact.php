<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sneaker Head">
    <meta name="keywords" content="Sneaker Head, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us </title>

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
    .h4 m-0 pr-3{
      font-size:5rem;
    }
    </style>
	
</head>

<body style="margin:0%; padding:0%; overflow-x:hidden;">
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
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

   <div class="section-title" style="text-align:center; ">
                            <span style="padding-top:2rem;">Sneaker Head Customer Support Center</span>
  </div>
    <div class="text-center">
    <h2 class="mt-5 mb-5">FAQ</h2>
  </div>
  <section class="container my-5" id="maincontent">
    <section id="accordion">
      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-17" aria-expanded="false" data-toggle="collapse" href="#faq-17" role="button">
        <div class="position-relative">
		
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;"> 
            How do I place an order ?
          </h2>
		  
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-17" style="">
        <div class="card card-body border-0 p-0">
           <p>• To place your order, follow the steps mentioned below:</p>
		   <p>• Browse by article of your choice</p>
		   <p>• View details of the product, select your size and add to "cart"</p>
           <p>• Create an account or you may proceed as a guest user</p>
           <p>• Enter your shipping address with pin code.</p>
           <p>• Please make sure that you check the total amount and products added to your cart before proceeding.</p> 
           <p>• Next, select the payment option. (Net-Banking/Debit/Credit Card/Wallets or COD)</p>
           <p>• To complete the online payment, you will be redirected to our online payment partner payU Money. For COD, you will need to confirm the order by entering the OTP received on your mobile.</p>
		   

        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-18" aria-expanded="false" data-toggle="collapse" href="#faq-18" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            Which payment methods do you accept ?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-18" style="">
        <div class="card card-body border-0 p-0">
          <p>We accept the following modes of payment:</p>
          <p>Credit cards, Debit Cards, Internet Banking, UPI, COD.</p>
		  <p>
		  </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="faq-19" aria-expanded="false" data-toggle="collapse" href="#faq-19" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            How long does delivery take?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-19" style="">
        <div class="card card-body border-0 p-0">
          <p>The orders are normally shipped within 2 working days from the order date. The order will be delivered to the customers within 5 working days from the date of shipment to serviceable locations.</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-20" aria-expanded="false" data-toggle="collapse" href="#faq-20" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            What is the best email to reach you at?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-20">
        <div class="card card-body border-0 p-0">
          <p>The best email for any inquiries is sneakerhead@gmail.com!</p>
          <p>
          </p>
        </div>
      </div>

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-21" aria-expanded="false" data-toggle="collapse" href="#faq-21" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            How can I cancel my order?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-21">
        <div class="card card-body border-0 p-0">
          <p>To cancel an order, call us on the toll-free number 9638571777 | 9586666118</p>
          <p>
          </p>
        </div>
      </div>
	  
	  
	   <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            Can I exchange my product(s)?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-22">
        <div class="card card-body border-0 p-0">
          <p>Currently, we do not have an exchange policy. You can return the product and get a refund for the same.</p>
          <p>
          </p>
        </div>
      </div>
	  
	  
	   <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            How do I reset my account password?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-22">
        <div class="card card-body border-0 p-0">
          <p>It's easy to re-set your password. visit the account sign-in page. 
		  Click Forgot Password, enter your registered email address and click ‘Submit’. 
		  We'll send you a new link on your registered email ID to set your password.</p>
          <p>
          </p>
        </div>
      </div>
	  
	  
	   <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            Does Sneaker Head products come with a warranty?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-22">
        <div class="card card-body border-0 p-0">
          <p>Yes, all Sneaker Head products come with a warranty period of 90 days from the date of purchase. 
		  TNC Apply.</p>
          <p>
          </p>
        </div>
      </div>
	  
	  
	  

      <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary  border-top" aria-controls="faq-22" aria-expanded="false" data-toggle="collapse" href="#faq-22" role="button">
        <div class="position-relative">
          <h2 class="h4 m-0 pr-3" style="font-size:1.25rem;text-align:left;">
            What is the best time to call?
          </h2>
          <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
            <!-- <i class="fa fa-plus"></i> -->
          </div>
        </div>
      </a>
      <div class="collapse" id="faq-22">
        <div class="card card-body border-0 p-0">
          <p>The best time to call is 24/7! We are always available to answer any questions.</p>
          <p>
          </p>
        </div>
      </div>
    </section>
  </section>
  
    <section class="contact spad">
        <div class="container">
           
                    <div class="contact__text" style="text-align:center;">
                        <div class="section-title" style="text-align:center;">
                        <div class="col-md">
                            <h4 style="padding-bottom:0.2rem;">Contact Us</h4>
  </div>
                            <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                                strict attention.</p>
							<p> We are Happy To Help You</p>
                        </div>
                        <ul>
                            <li>
                                <div class="col-md">
								<h4>Quick Contact</h4>
								<p style="color:red;"><i class="fa fa-phone-square" style="padding-right: 0.4rem;"></i>  9638571777  |  9586666118  |  8849799273 </p>
								<p style="color:red;"><i class="fa fa-envelope" style="padding-right: 0.4rem;"></i> sneakerhead@gmail.com</p>
								<p style="color:red;"><i class="fa fa-home" style="padding-right: 0.4rem;"></i> Vesu,Surat</p>
								</div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
    </section>
    <!-- Contact Section End -->
	
    <?php
			include 'footer.php';
		?>