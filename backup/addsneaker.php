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
       input[type="radio"]{
        display: none;
        padding-right: 5px;
       }
       label{
        position: relative;
        font-size: 25px;
        border: 2px solid #6e6666;
        padding-right: 14px;
        padding-left: 14px;
        padding-top: 3px;
        padding-bottom: 3px;
       }
       input[type="radio"]:checked + label{
        background-color: red;
        color: white;
       }
       .addimage {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  right:40%;
  top:18%;
}

.addimage:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.addimage1 {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:23%;
  top:55%;
}
.addimage1:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.addimage2 {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:75%;
  top:55%;
}
.addimage2:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.addimage3 {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:13%;
  top:87%;
}
.addimage3:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.addimage4 {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:45%;
  top:87%;
}
.addimage4:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.addimage5 {
    position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:80%;
  top:87%;
}
.addimage5:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
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
                        <a href="./adminindex.php"><img src="images/vtn2.png" width="220px"></a>
                    </div>
                </div>
                <div >
                    <nav class="header__menu mobile-menu" style="padding:0.313rem; padding-top:0.75rem; ">
                        <ul>
                        <li><a href="./addsneaker.php" >Add Sneaker</a></li>
                            <li><a href="./viewuser.php" >View User</a></li>
                            <li><a href="./adminvieworder.php">Orders</a></li>
                            <li><a href="./viewcomment.php" >Comments</a></li>                           
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
                            <a href="./adminindex.php">Home</a>
                            <span>Add Sneaker</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="testimonial" style="background-color: white;">
            <div class="row" style="margin: 0px;">
                <div class="col-lg-5 p-0">
                    <div class="testimonial__text">
                        <div class="testimonial__author">
                            <div class="testimonial__author__text" style="text-align: left;">
                                <h3 style="color:red;">ADD SNEAKER</h3><br><br>
                                <div class="checkout__input">
                                        <p >Sneaker Name</p>
                                        <input type="text" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p >Brand Name</p>
                                        <input type="text" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Price (₹)</p>
                                        <input type="text" style="color:red">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Description</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Style</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Color</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 6</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 7</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 8</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 9</p>
                                        <input type="textbox" style="color:black">
                                    </div>
                                <h5>Note</h5>
                                <p style="font-size:15px;">It is the responsibility of the admin to properly add the details of every sneaker, in case if admin have any query contact on 9586666118. Click on the upload button on the image to add image as per the suitable place.</p>
                            </div>      
                        </div>
                    </div>
                        <input type="submit" value="ADD SNEAKER" class="primary-btn" style="margin-left: 50px;"><br><br>
                </div>
                
                <div class="col-lg-7 p-0" style="background-color: white;">
                    <!-- <div class="testimonial__pic set-bg" data-setbg="images/j1.jpg"></div> -->
                    <img src="images/adminwork/c3.jpg" style="padding:20px; width:95%; filter: grayscale();">
                    <button class="addimage">Upload</button>
                    <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c6.jpg" style="height: 500px; filter: grayscale();"></div></div>
                    <button class="addimage1" >Upload</button>
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c7.jpg" style="height: 500px; filter: grayscale();"></div></div>
                    <button class="addimage2">Upload</button>
                    
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c1.jpg" style="filter: grayscale();"></div></div>
                <button class="addimage3">Upload</button>
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px; "><div class="product__item__pic set-bg" data-setbg="images/adminwork/c2.jpg" style="filter: grayscale();"></div></div>
                <button class="addimage4">Upload</button>
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c5.jpg" style="filter: grayscale();"></div></div>
                <button class="addimage5">Upload</button>
        </div>
        </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

   
   

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