<?php

include 'config.php'; 

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["email"])))
	{
        $email_err = "Please enter E-mail.";
		
    }elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
		
		$email_err = "Email is invalid";
    }else{
		$email = trim($_POST["email"]);
	}
    
    // Check if password is empty
    if(empty(trim($_POST["password"])))
	{
        $password_err = "Please enter your password.";
    } 
	else
	{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err))
	{
        // Prepare a select statement
        $sql = "SELECT id,email, password FROM adminregister WHERE email = ?";
        
        if($stmt = mysqli_prepare($con, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
                {                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    
					if(mysqli_stmt_fetch($stmt))
					{
                        if(password_verify($password, $hashed_password)){
                            header("location: adminindex.php");
                        } 
						else
						{
                            // Password is not valid, display a generic error message
                            $password_err = "Invalid password";
                        }
                    }
                } 
				else
				{
                    // Username doesn't exist, display a generic error message
                    $login_err = "E-mail is not registered";
					echo "<script> alert('$login_err')</script>";
                }
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
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

<body style="overflow-x: hidden; background-image: url(images/login3.jpg); background-repeat:no-repeat; background-size: 70%; background-position-y: 100% ; background-position-x: 45% ;">
    <!-- Checkout Section Begin -->
    <section class="checkout spad" style="padding-top: 1.125rem; padding-bottom: 3.125rem;">
        <div class="container">
            <div class="checkout__form" style="margin-left: 32%; width: 100%; margin-top: 4%;">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6  style="margin-right: 52%; text-align: center; padding-bottom: 0.1rem;">SNEAKER HEAD</h6>
                            <h6 class="checkout__title" style="margin-right: 52%; text-align: center;">IMPOSSIBLE IS NOTHING</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Admin Email<span class="error">*<?php echo $email_err ?></span></p>
                                        <input type="text" name="email" placeholder="Enter Your E-mail" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Admin Password<span class="error">*<?php echo $password_err ?></span></p>
                                        <input type="text" name="password" placeholder="Enter Your Password">
										
                                    </div>
                                </div>
                            </div>
                            <p style="font-size: 12px;">By loggin in you are agreeing the <a href="home.php" style="text-decoration: underline;">privacy policy</a> of the Sneaker Head</p>
                            <button type="submit" class="site-btn" style="padding-top: 0.4rem; padding-bottom: 0.4rem; padding-left: 9.7rem; padding-right: 9.7rem;">Log in</button>
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