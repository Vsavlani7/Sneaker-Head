<?php

error_reporting(0);
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

$get_product_id=$_GET['add_to_cart'];
$sql="select * from shoe where id=$get_product_id";
$query=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($query)){
	
	$shoe_id = $rows['id'];
    $image = $rows['img1'];
    $image1 = $rows['img2'];
    $image2 = $rows['img3'];
    $image3 = $rows['img4'];
    $image4 = $rows['img5'];
    $image5 = $rows['img6'];
	$brand = $rows['brand'];
	$name = $rows['name'];
	$price= $rows['price'];
	$desc= $rows['description'];
	$code = $rows['code'];
	$color = $rows['color'];
	$size6 = $rows['size6'];
	$size7 = $rows['size7'];
	$size8 = $rows['size8'];
	$size9 = $rows['size9'];
	
};



if(isset($_POST['addcart'])){
	if(isset($_SESSION['loggedin'])){
		$shoe_image = $_POST['shoe_image'];
		$shoe_brand = $_POST['shoe_brand'];
		$shoe_name = $_POST['shoe_name'];
		$shoe_price = $_POST['shoe_price'];
		$shoe_size = $_POST['size'];
		$shoe_quantity = $_POST['shoe_quantity'];
		$shoe_color = $_POST['shoe_color'];
		$shoe_code = $_POST['shoe_code'];
	
		$user_id = $_SESSION['user_id'];
		$get_product_id=$_GET['add_to_cart'];
		if(!isset($shoe_size)){
			echo "<script> alert('Please select your shoe size')</script>";
		}else{
		$sql_query= "select * from cart where prod_id='$get_product_id' and user_id='$user_id' and size='$shoe_size'";
		$select_cart = mysqli_query($con,$sql_query);
		if(mysqli_num_rows($select_cart) > 0){
			$_SESSION['message'] = "Product already exist";
            
		}elseif($shoe_size == '6' and $shoe_quantity > $size6){
			$_SESSION['message'] = "Product is not available in size6";	
            
		}elseif($shoe_size == '7' and $shoe_quantity > $size7){
			$_SESSION['message'] = "Product is not available in size7";
           
		}elseif($shoe_size == '8' and $shoe_quantity > $size8){
			$_SESSION['message'] = "Product is not available in size8";
           
		}elseif($shoe_size == '9' and $shoe_quantity > $size9){
			$_SESSION['message'] = "Product is not available in size9";
            
		}else{
			$new_query = "insert into cart(user_id,prod_id,brand,name,image,price,quantity,size,color,code) values ('$user_id','$get_product_id','$shoe_brand','$shoe_name','$shoe_image','$shoe_price','$shoe_quantity','$shoe_size','$shoe_color','$shoe_code')" ;
			$new_cart = mysqli_query($con, $new_query);
			if($new_query){
				header('location:cart.php');
			}else{
				echo "<script>Something Wrong</script>";
			}
		
		}
		}
	}else{
	
	echo "<script type = \"text/javascript\">
			alert(\"Login Yourself First\");
			window.location = (\"login.php\")
			</script>";
	exit;
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
    <title>Sneaker Head</title>

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
        input[type="radio"]{
        display: none;
        padding-right: 5px;
       }
       label{
        position: relative;
        font-style: initial;
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
                            <a href="./sneakers.php">Sneakers</a>
                            <span>Sneaker</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Testimonial Section Begin -->
    <section class="testimonial" style="background-color: white;">
            <div class="row" style="margin: 0px;">
			
                <div class="col-lg-5 p-0" >
				<form method="POST" action="" >
                    <div class="testimonial__text" style="text-align:left;">
                        <div class="testimonial__author">
                            <div class="testimonial__author__text" style="text-align: left;" style="padding-left:3rem;" >
                                <h3><?php echo $name ?></h3><br>
                                <p style="text-transform:uppercase;"><?php echo $brand ?></p><br>
								<input type="hidden" name="shoe_brand" value="<?php echo $brand;?>" >
								<input type="hidden" name="shoe_name" value="<?php echo $name;?>" >
                               
                                <div style="display:flex;">
                                <p style="font-style:normal; color: black;">COLOR : </p><p style="font-style:normal; color: black; text-transform:uppercase; padding-left:0.2rem;"> <?php echo $color ?></p>
                                </div><br>
                                <p style="color:red; font-weight: 700; font-style:normal; font-size: x-large;"> ₹<?php echo $price ?></p>
								<input type="hidden" name="shoe_price" value="<?php echo $price;?>"><br>
                                <h5>Description</h5>
                                <p style="font-size:15px;"><?php echo $desc ?></p>
                                    <p style="font-size:15px;">Style : <?php echo $code; ?></p>
									<input type="hidden" name="shoe_code" value="<?php echo $code; ?>">
                                    <p style="font-size:15px;">Color : <?php echo $color; ?></p>
									<input type="hidden" name="shoe_color" value="<?php echo $color;?>"><br>
                                    <p style="font-style:normal; color: black;">SIZE</p><br>
                                   <p>
                                    <input type="radio" name="size" id= "shoe_size6" value="6" />
									<label for="shoe_size6">6</label>
                                    <input type="radio" name="size" id= "shoe_size7" value="7" />
									<label for="shoe_size7">7</label>
                                    <input type="radio" name="size" id= "shoe_size8" value="8" />
									<label for="shoe_size8">8</label>
                                    <input type="radio" name="size" id= "shoe_size9" value="9" />
									<label for="shoe_size9">9</label>
                                   </p>
                            </div>
                            
                           
                                
                        </div>
                    </div>
                    <h5 style="margin-left: 3rem;">QTY</h5><br>
                        
                            <input type="number" min="1" name="shoe_quantity" value="1" style="width:8%; text-align:center; margin-left: 3rem; padding:1%;">
                        <br><br><br>
                        <input type="submit" value="ADD TO CART" name= "addcart" class="primary-btn" style="margin-left: 3rem;">
						<a href="mywish.php?shoeid=<?php echo $shoe_id ?>" style="background-color: red; margin-left: 0.6rem; padding-top:0.9rem; padding-bottom:0.9rem; padding-left:0.8rem; padding-right:0.8rem;" ><img src="img/icon/heart2.png" alt="" style="width: 45px; height:50px; "></a><br><br><br>
                        <h5 style="margin-left: 50px; padding-bottom: 4px;" >Shipping & Return</h5>
                        <p style="margin-left: 50px; font-size:medium;">Free standard delivery on all orders and free return within 14 days of your order delivery date. Visit our Return Policy for more information.</p><br>
                        <p style="margin-left: 50px; font-size:medium;">For any queries, please contact Customer Service at 9586666118 or via customercareindia@sneakerhead.com.</p>
                        <h5 style="margin-left: 50px; padding-bottom: 0.8rem; color:red; padding-top:1rem;" >Customer Reviews</h5>
                        <div style="background-image: url(white.jpg); border-radius:1rem;  box-shadow: 0px 0px 5px rgb(0, 0, 0, 0.3); width: 30rem; height: auto; margin-left: 45px;">
                        <?php

                        $showreview = "select r.id as rid, r.review, u.id as uid, u.fname, u.lname from reviews r, register u where r.user_id=u.id and  prod_id='$get_product_id'";
                        $showresult = mysqli_query($con,$showreview);
                        $rows=mysqli_fetch_assoc($showresult);

                            $reviews = $rows['review'];
                            $fname = $rows['fname'];
                            $lname = $rows['lname'];
                       
                            ?>

                            <p  style=" padding:0.4rem; padding-left: 0%; margin-left:4%;"><?php echo $reviews ; ?></p>
                            <p style="margin-left: 4%; text-align: right; padding-right:2rem; padding-bottom:0.5rem;"><?php echo $fname." ".$lname ; ?> </p>
                        </div>
                        <a href="review.php?prodid=<?php echo $get_product_id ; ?>" style="margin-left: 50px; text-align: right; padding-right:2rem; padding-bottom:0.5rem; color:red;">Read more...</a>
                    </div>
                
                <div class="col-lg-7 p-0" style="background-color: white;">
                    <!-- <div class="testimonial__pic set-bg" data-setbg="images/j1.jpg"></div> -->
                    <div class="row" style="height: 40%;">
                        <div class="col-lg-12 col-md-8 col-sm-8" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image; ?>" style="height: 500px;"></div></div>
                        <input type="hidden" name="shoe_image" value="<?php echo $image3 ; ?>" >
                    </div>
                    <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image1; ?>" style="height: 500px;"></div></div>
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image2; ?>" style="height: 500px;"></div></div>
                    
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image3; ?>" ></div></div>
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px; "><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image4; ?>"></div></div>
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/Sneakers/<?php echo $image5; ?>"></div></div>
				</form>
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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        <?php 
        if(isset($_SESSION['message'])) 
        {
             ?>

            alertify.set('notifier','position', 'top-center');
            alertify.error('<?= $_SESSION['message']; ?>');
            <?php 
            unset($_SESSION['message']);
        } 
        ?>
    </script>
</body>

</html>