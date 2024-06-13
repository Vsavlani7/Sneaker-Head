<?php

include 'config.php';
$get_product_id = $_GET['prodid'];

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
	.error{
		color:red;
            padding-left:0.5rem;
        }
	</style>
</head>

<body>
<h5 style="margin-left: 50px; padding-bottom: 0.8rem; color:red; padding-top:1rem; font-size:2rem; margin-top:0.5rem; margin-bottom:1rem;" >Customer Reviews</h5>
                        <div style="background-image: url(white.jpg); border-radius:0.6rem;  box-shadow: 0px 0px 5px rgb(0, 0, 0, 0.3); width: 60rem; height: auto; margin-left: 45px; margin-bottom:1.5rem;">
                        <?php

                            $showreview = "select r.id as rid, r.review, r.date, u.id as uid, u.fname, u.lname from reviews r, register u where r.user_id=u.id and  prod_id='$get_product_id'";
                            $showresult = mysqli_query($con,$showreview);
                            while($rows=mysqli_fetch_assoc($showresult)) { 

                                $reviews = $rows['review'];
                                $fname = $rows['fname'];
                                $lname = $rows['lname'];
                                $date = $rows['date'];
    ?>
                            <p  style=" padding:0.4rem; padding-top: 1rem; padding-right:1rem; margin-left:4%; "><?php echo $reviews ; ?> </p>
                            <div style="display:flex;">
                            <p style="margin-left: 4%; text-align: left; padding-left:0.3rem; color:red;"><?php echo $date ; ?></p>
                            <p style="margin-left: 4%;  padding-left:38rem; text-align: right; padding-right:2rem; padding-bottom:0.5rem;"><?php echo $fname." ".$lname; ?></p>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                   
    <!-- Checkout Section Begin -->
    
    <!-- Checkout Section End -->


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