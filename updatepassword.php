<?php 

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
	header('location:login.php');
};

$password_err = $newpassword_err = $confirmpassword_err ="";

if(isset($_POST['changePassword'])){
    
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $sql = "select password from register where id='$user_id'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    if(password_verify($currentPassword,$row['password'])){

        if($confirmPassword == ''){
            $newpassword_err = "Please Enter Your New Password";
        }
        if($newPassword != $confirmPassword ){
            $confirmpassword_err = "Password Doesn't Match";
        }
        if(strlen($newPassword)<5){
            $newpassword_err = "Password is too short";
        }
        if(strlen($newPassword)>20){
            $newpassword_err = "Password is too long";
        }

    
    if(empty($newpassword_err) && empty($confirmpassword_err)){

        $newPassword = password_hash($newPassword,PASSWORD_BCRYPT);

        $updateQuery = "UPDATE register SET password='$newPassword' where id='$user_id' " ;
        $result = mysqli_query($con, $updateQuery);

        if($result){

            echo "Password Updated successfully";
            header("location:index.php");
        }else{
            echo "something went wrong";
        }

    }
}
    else{

        $password_err = "Current Password doesn't match";
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
    <style>
        .error{
            color:red;
            padding-left:0.5rem;
        }
        </style>
</head>

<body>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-lg-9 col-md-6" style="margin-left: 10%;">
                            <h6 class="checkout__title">Update Password</h6>
                            <div class="checkout__input">
                                <p>Current Password<span class="error"><?php echo $password_err ?></span></p>
                                <input type="password" name="currentPassword" placeholder="Enter Your Current Password">
                                
                            </div>
                            <div class="checkout__input">
                                <p>New Password<span class="error"><?php echo $newpassword_err ?></span></p>
                                <input type="password" name="newPassword" placeholder="Enter Your New Password">
                                
                            </div>
                            <div class="checkout__input">
                                <p>Confirm Password <span class="error"><?php echo $confirmpassword_err ?></span></p>
                                <input type="password" name="confirmPassword" placeholder="Confirm Your Password ">
                               
                            </div>
                            <button type="submit" name="changePassword" class="primary-btn" style="border-radius:0 rem;">Save</button>
                            <a href="profile.php" class="primary-btn" style="border-radius:0 rem; background-color:grey; margin-left:1rem;">Back</a>
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