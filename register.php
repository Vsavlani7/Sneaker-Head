<?php

include 'config.php';
?>
<?php

$fname=$lname=$city=$phone=$email=$otp=$password=$cpassword="";
$Errfname=$Errlname=$Errcity=$Errphone=$Erremail=$Errotp=$Errpassword=$Errcpassword="";

if(isset($_POST['submit']))
{
	
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$city=trim($_POST['city']);
	$phone=trim($_POST['phone']);
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
	$cpassword=trim($_POST['cpassword']);
	
	if(empty($fname)){
		$Errfname="Please Enter Your First Name";
		
	}elseif(!preg_match('/^[a-zA-Z]+$/', $fname)){
		
		$Errfname=" First Name contains only letter";	
		
	}else{
			$fname=$_POST['fname'];
	}
	
	if(empty($fname)){
		
		$Errlname="Please Enter Your Last Name";
		
	}elseif(!preg_match('/^[a-zA-Z]+$/', $lname)){
		
		$Errlname=" Last Name contains only letter";	
		
	}else{
			$lname=$_POST['lname'];
	}
	
	if(empty($city)){
		
		$Errcity="Please Enter Your City";
	}
	elseif(!preg_match('/^[a-zA-Z]+$/', $city)){
		
		$Errcity="City contains only letter";	
		
	}else{
			$city=$_POST['city'];
	}
	
	if(empty($phone)){
		
		$Errphone="Please Enter Your Contact Number";
	}
	elseif(!preg_match('/^[0-9]{10}+$/', $phone)){
		
		$Errphone="Contact Number is not valid";	
		
	}else{
		$equery="select * from register where phone='$phone'";
		$newquery=mysqli_query($con, $equery);
		
		$ecount=mysqli_num_rows($newquery);
		if($ecount>0){
			$Errphone="Contact is already Registered";
		}else{
			$phone=$_POST['phone'];
		}
	}
	
	if(empty($email))
	{
        $Erremail = "Please enter yourE-mail.";
		
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$Erremail="Email is not valid";
	}else{
		$equery="select * from register where email='$email'";
		$newquery=mysqli_query($con, $equery);
		
		$ecount=mysqli_num_rows($newquery);
		if($ecount>0){
			$Erremail="Email is already Registered";
		}else{
			$email=$_POST['email'];
		}
		
	}
	
	if(empty($password))
	{
        $Errpassword = "Please enter your password.";
		
    }elseif($password != $cpassword){
		$Errcpassword = "Password Doesn't match";
	}else{
		$password= $_POST['password'];
		$pass=password_hash($password,PASSWORD_BCRYPT);
	}
	
	if(empty($Errname) && empty($Erremail) && empty($Errcpassword)){
        $otp = rand(100000, 999999);
		$sql="insert into register(fname,lname,city,phone,email,password,otp) values ('$fname','$lname','$city','$phone','$email','$pass','$otp')";
		$to = $email;
        $subject = "OTP Verification";
        // $message = "Your OTP is $otp";
        $message = "
                <html>
                    <body>
                        <h2>SNEAKER HEAD</h2>
                        <p>Here is your OTP (One-Time PIN) to verify your Identity.</p>
                        <h3><b>".$otp."</b></h3>
                    </body>
                </html>
                ";
        $headers = "From: sender_email@example.com\r\n";
        $headers .= "Reply-To: noreply@gmail.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
mail($to, $subject, $message, $headers);
		$iquery = mysqli_query($con, $sql);
		if($iquery){
			?>
			<script>
			alert("Registration Successful");

			</script>
			<?php
           

            header("location: L2.php");
		}else{
			?>
			<script>
			alert("Something Wrong");
			</script>
			<?php
		}
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
        span{
            padding-left:0.5rem;
        }
        </style>
</head>
<body>
    <!-- Checkout Section Begin -->
    <section class="checkout spad" style="padding-top: 3.125rem; padding-bottom: 3.125rem;">
        <div class="container">
            <div class="checkout__form">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Register</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*<?php echo $Errfname ?></span></p>
                                        <input type="text" name="fname" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*<?php echo $Errlname ?></span></p>
                                        <input type="text" name="lname" placeholder="Enter Your Last Name">
										
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Town/City<span>*<?php echo $Errcity ?></span></p>
                                <input type="text" name="city" placeholder="Enter Your City/Town">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*<?php echo $Errphone ?></span></p>
                                        <input type="text" name="phone" placeholder="Enter Your Contact Details">
										
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*<?php echo $Erremail ?></span></p>
                                        <input type="text" name="email" placeholder="Enter Your E-mail">
										
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Password<span>*<?php echo $Errpassword ?></span></p>
                                        <input type="password" name="password" placeholder="Enter Your Password">
										
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Confirm Password<span>*<?php echo $Errcpassword ?></span></p>
                                        <input type="password" name="cpassword" placeholder="Confirm Your Password">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    I have read all the terms and condition, privacy policy and agreed all of them.
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" name="submit" class="primary-btn" style="border-radius:0 rem; padding-top:0.7rem; padding-bottom:0.7rem;">submit</button>
                            <a href="index.php"  class="primary-btn" style="background-color:red; margin-left:0.25rem; border-radius:0 rem; padding-top:0.8rem; padding-bottom:0.8rem;">Back</a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <img src="images/register4.png" style="
                            margin-left: 1.5rem;
                            width:85%;
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