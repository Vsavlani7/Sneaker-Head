
<!DOCTYPE html>
<html lang="en">
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
      .table td, .table th{
        vertical-align:middle;
      }
      .table th{
        padding:1rem;
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
                            <li><a href="./viewsneaker.php" >View Sneakers</a></li>
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
                            <span>User Details</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div style="display:flex;">
		<h2 class="heading" style="color:red; margin:1rem; margin-bottom:1rem; font-size:1.5rem; margin-left:1.6rem; "> USERS </h2>
        <form method="Post" action="" style="margin-left:70rem; margin-top:1rem;">
            <input type="text" name="search_term" id="search_term" placeholder="Enter user email" style="border-color: red;">
            <input type="submit" value="Search" style="background: white;
    border-color: red;
    border-radius: 0.3rem;
    color: red;">
    </form>
	</div>
    <div style="margin-left:4rem; margin-right:4rem;">
        <table class="table">
          <thead style="background-color: #f52525;
    color: white; text-transform: uppercase;">
            <tr>
              <th scope="col" style="padding-left:3rem;">Id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">City</th>
              <th scope="col">Contact</th>
              <th scope="col">E-mail</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>

      <?php
            include 'config.php';
              // Check if form has been submitted
              if (isset($_POST['search_term'])) {
                // Sanitize the search term
                $search_term = mysqli_real_escape_string($con, $_POST['search_term']);
              
                // Build the query
                $query = "SELECT * FROM register WHERE email LIKE '%{$search_term}%'";
              
                // Execute the query
                $result = mysqli_query($con, $query);

                while($row=mysqli_fetch_assoc($result)){

                  $id=$row['id'];
                  $fname=$row['fname'];
                  $lname=$row['lname'];
                  $city=$row['city'];
                  $phone=$row['phone'];
                  $email=$row['email'];
                  
                  echo '<tr>
                  <th scope="row" style="color:red; padding-left:3rem; ">'.$id.'</th>
                  <td>'.$fname.'</td>
                  <td>'.$lname.'</td>
                  <td>'.$city.'</td>
                  <td>'.$phone.'</td>
                  <td>'.$email.'</td>
                  <td>
                  <button class="btn btn-danger" style="background-color:white;"><a href="deleteuser.php?deleteid='.$id.'"  style="color:red;">Delete</a></button>
                  </td>
                  </tr>';
  
                }
              }else{
            $sql="select * from register";
            $result=mysqli_query($con,$sql);
              while($row=mysqli_fetch_assoc($result)){

                $id=$row['id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $city=$row['city'];
                $phone=$row['phone'];
                $email=$row['email'];
                
                echo '<tr>
                <th scope="row" style="color:red; padding-left:3rem; ">'.$id.'</th>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$city.'</td>
                <td>'.$phone.'</td>
                <td>'.$email.'</td>
                <td>
                <button class="btn btn-danger" style="background-color:white;"><a href="deleteuser.php?deleteid='.$id.'"  style="color:red;">Delete</a></button>
                </td>
                </tr>';

              }
            }

            ?>
          </tbody>
        </table>
    </div>

	