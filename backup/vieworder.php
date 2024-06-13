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
       .progress-container {
  width: 90%;
  height: 0.5rem;
  background-color: #f2f2f2;
  border-radius: 0.8rem;
  margin-left:2rem;
}

.progress-bar {
  height: 100%;
  background-color: #4CAF50;
  border-radius: 5px;
  width: 0%;
  transition: width 0.1s ease-in-out;
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
                    <div class="shopping__cart__table" style="margin-left:2rem; margin-right:2rem;">
                        <h2>MY ORDER</h2><br>
                        <table style="border-spacing: 1rem; border-collapse:unset;">
                            <tbody >
                                <tr style="background-image: url(white.jpg); border-radius:0.4rem;  box-shadow: 0px 5px 15px rgb(0, 0, 0, 0.3);">
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic" >
                                            <img src="images/sneakers/4smain.png" alt="" style="width: 10rem; border-radius: 1.5rem; margin:0.5rem; margin-left:2rem; ">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h5 style="font-size:22px;">Nike Airforce</h5>
                                            <h6>NIKE</h6>
                                            <h7>Size : <h7>8</h7><h7><br>
                                            <h7>Color : <h7>Chocolate</h7></h7><br>
                                            <h7>NAIR125478</h7><br>
                                            <h7>3</h7><br>
                                            <h7>Price : <h7 style="color:red;">16000</h7></h7>
                                        </div>
                                    </td>
                                    <td>
                                    <div style="display:flex; margin-bottom:1rem;">
                                        <h7 style="margin-left:1rem;">Order Confirmed</h7>
                                        <h7 style="margin-left:10rem;">Shipped</h7>
                                        <h7 style="margin-left:10rem;">Out for Delivery</h7>
                                        <h7 style="margin-left:12rem;">Delivered</h7>
                                        </div>
                                    <div class="progress-container">
                                    <div class="progress-bar"></div>
                                    </div>
                                    <!-- <button id="start-btn">Start Progress</button> -->
                                    <script>
    var progressBar = document.querySelector('.progress-bar');
var startBtn = document.querySelector('#start-btn');

startBtn.addEventListener('click', function() {
  var progress = 0;
  var speed = 250; // increase this value to make the progress faster

  var intervalId = setInterval(function() {
    progress += 1;
    progressBar.style.width = progress + '%';
    
    if (progress >= 100) {
      clearInterval(intervalId);
      alert("Done");
    }
  }, speed);
});
    </script>
                                    </td>
                                   </tr>
                                <tr style="background-image: url(white.jpg); border-radius:0.6rem;  box-shadow: 0px 5px 15px rgb(0, 0, 0, 0.3);">
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text" style="margin-left:3rem; padding-bottom: 1rem;">
                                            <h5 style="margin-bottom:1rem;">Delivery Details</h5>
                                            <h6 style="font-size:17px;">Tushar Singh</h6>
                                            <p>301 J1 Pavitra residency ramnagar rander road surat 301 J1 Pavitra residency ramnagar rander road surat</p>
                                            <h8 style="padding:none; margin:none;">395009</h8><br>
                                            <h8>Surat</h8><br>
                                            <h8>Gujarat</h8>
                                        </div>
                                    </td>
                                    <td class="product__cart__item" style="padding-bottom: 7rem;">
                                    <div class="product__cart__item__text" style="margin-left:3rem; padding-bottom: 1rem;">
                                    <h5 style="font-size:17px; margin-bottom:1rem;">Contact Details</h5>
                                    <h8>9586666118</h8><br>
                                     <h8 >visshalsavlani44@gmail.com</h8><br><br>
                                     </div>
                                    </td>
                                    
                                    </tr>
                                    <tr style="background-image: url(white.jpg); border-radius:0.6rem;  box-shadow: 0px 5px 15px rgb(0, 0, 0, 0.3);">
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__text" style="margin-left:3rem; padding-bottom: 1rem;">
                                            <h5 style="margin-bottom:1rem;">Product Review</h5>
                                            <textarea id="w3review" name="w3review" rows="3" cols="30"></textarea><br>
                                            <input type="submit" value="Post Review" style="margin-bottom:2rem; background-color: red;
                                            border-color: white;
                                             color: white;">
                                             <div style="display:flex">
                                            <p>Nice product nice product Nice product nice product Nice product nice product Nice product nice product Nice product nice product</p>
                                            <a href="" style="margin-left:0.5rem; padding-left:0.3rem; padding-right:0.3rem; color:red; padding-bottom:0.1rem;"><i class="fa fa-close" ></i></a>
                                            </div>
                                            <hr>
                                            <div style="display:flex">
                                            <p>Nice product nice product Nice product nice product Nice product nice product Nice product nice product Nice product nice product</p>
                                            <a href="" style="margin-left:0.5rem; padding-left:0.3rem; padding-right:0.3rem; color:red; padding-bottom:0.1rem;"><i class="fa fa-close" ></i></a>
                                            </div>
                                            <hr>
                                            <div style="display:flex">
                                            <p>Nice product nice product Nice product nice product Nice product nice product Nice product nice product Nice product nice product</p>
                                            <a href="" style="margin-left:0.5rem; padding-left:0.3rem; padding-right:0.3rem; color:red; padding-bottom:0.1rem;"><i class="fa fa-close" ></i></a>
                                            </div>
                                            <hr>
                                        </div>
                                    </td>
                                    </tr>
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