<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
}


$sql="Select * from register where id=$user_id";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($result);

$fname = $rows['fname'];
$lname = $rows['lname'];
$city = $rows['city'];
$phone = $rows['phone'];
$email = $rows['email'];


if(isset($_POST['submit'])){
    
    $newfname=$_POST['fname'];
    $newlname=$_POST['lname'];
    $newcity=$_POST['city'];
    $newphone=$_POST['phone'];
    $newemail=$_POST['email'];
    

    $updateSql="UPDATE register set fname='$newfname',lname='$newlname',city='$newcity',phone='$newphone',email='$newemail' where id=$user_id";
    $newresult=mysqli_query($con,$updateSql);
    if($newresult){
        header('location:profile.php');

    }else{

        echo "Something Wrong";
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
<body>
    <!-- Checkout Section Begin -->
    <section class="checkout spad" style="padding-top: 3.125rem; padding-bottom: 3.125rem;">
        <div class="container">
            <div class="checkout__form">
                <form  method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Update Profile</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="fname" placeholder="Enter Your First Name" value="<?php echo $fname; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="lname" placeholder="Enter Your Last Name" value="<?php echo $lname; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text" name="city" placeholder="Enter Your City" value="<?php echo $city; ?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" placeholder="Enter Your Contact Number" value="<?php echo $phone; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" placeholder="Enter Your E-mail Address" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                               <p style="margin-left:0.9rem;">Note - Enter your details properly</p>
                            </div>
                            <button type="submit" name="submit" class="primary-btn" style="border-radius:0 rem; padding-top:0.8rem; padding-bottom:0.8rem;">Save</button>
                            <a href="profile.php"  class="primary-btn" style="border-radius:0 rem; background-color:grey; margin-left:1rem; padding-top:0.8rem; padding-bottom:0.8rem;">Back</a>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <img src="images/update.jpg" style="
                            margin-left: 1.5rem;
                            width:95%;
                            margin-left:1rem;
                        ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
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