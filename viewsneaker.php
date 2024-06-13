
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
<body>
<header style="background-color:white;  ">
        <hr style="width: 135%; border-top: 0.125rem solid rgb(0, 0, 0); margin: 0%; ">
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
        <hr style="width: 135%; border-bottom: 0.125rem solid rgb(0, 0, 0); margin: 0px; ">
    </header>
    <section class="breadcrumb-option" style="padding:6px; background:white;">
            <div class="row" style="padding-left:15px;">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./adminindex.php">Home</a>
                            <span>Sneakers</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
	<div style="display:flex;">
		<h2 class="heading" style="color:red; margin:1rem; margin-bottom:1rem; font-size:1.5rem; margin-left:1.6rem;"> SNEAKERS </h2>
        <form method="Post" action="" style="margin-left:84.5rem; margin-top:1rem; position: fixed;">
            <input type="text" name="search_term" id="search_term" placeholder="Enter brand name" style="border-color: red;">
            <input type="submit" value="Search" style="background: white;
    border-color: red;
    border-radius: 0.3rem;
    color: red;">
    </form>
	</div>
    <div  style="min-height:465px; margin-left:1rem; margin-right:1rem;">
        <table class="table">
          <thead style="background-color: #f52525;
    color: white; text-transform: uppercase;">
            <tr>
              <th scope="col" style="padding-left:1rem;">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Price(₹)</th>
              <th scope="col">Description</th>
              <th scope="col">Code</th>
              <th scope="col">Color</th>
              <th scope="col">Size6</th>
              <th scope="col">Size7</th>
              <th scope="col">Size8</th>
              <th scope="col">Size9</th>
              <th scope="col">IMG 1</th>
              <th scope="col">IMG 2</th>
              <th scope="col">IMG 3</th>
              <th scope="col">IMG 4</th>
              <th scope="col">IMG 5</th>
              <th scope="col">IMG 6</th>
              <th scope="col">Operation</th>
            </tr>
          </thead>
          <tbody>

            <?php
            include 'config.php';
            if (mysqli_connect_errno()) {
                die("Failed to connect to MySQL: " . mysqli_connect_error());
              }
              
              // Check if form has been submitted
              if (isset($_POST['search_term'])) {
                // Sanitize the search term
                $search_term = mysqli_real_escape_string($con, $_POST['search_term']);
              
                // Build the query
                $query = "SELECT * FROM shoe WHERE brand LIKE '%{$search_term}%' and id > 4";
              
                // Execute the query
                $result = mysqli_query($con, $query);
              
              while($row=mysqli_fetch_assoc($result)){

                $id=$row['id'];
                $name=$row['name'];
                $brand=$row['brand'];
                $price=$row['price'];
                $description=$row['description'];
                $code=$row['code'];
                $color=$row['color'];
                $size6=$row['size6'];
                $size7=$row['size7'];
                $size8=$row['size8'];
                $size9=$row['size9'];
                $image1=$row['img1'];
                $image2=$row['img2'];
                $image3=$row['img3'];
                $image4=$row['img4'];
                $image5=$row['img5'];
                $image6=$row['img6'];

                
                echo '<tr>
                <th scope="row" style="color:red; padding-left:1rem; ">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$brand.'</td>
                <td>'.$price.'</td>
                <td>'.$description.'</td>
                <td>'.$code.'</td>
                <td>'.$color.'</td>
                <td>'.$size6.'</td>
                <td>'.$size7.'</td>
                <td>'.$size8.'</td>
                <td>'.$size9.'</td>
                <td>'.$image1.'</td>
                <td>'.$image2.'</td>
                <td>'.$image3.'</td>
                <td>'.$image4.'</td>
                <td>'.$image5.'</td>
                <td>'.$image6.'</td>
                <td>
                <button class="btn btn-danger" style="background-color:white;"><a href="deletecomment.php?deleteid='.$id.'"  style="color:red;">Delete</a></button>
                <button class="btn btn-danger" style="background-color:white; border-color:green; margin:0.3rem;"><a href="updatesneaker.php?updateid='.$id.'"  style="color:green;">Update</a></button>
                </td>
                </tr>';

              }
            
              }else{
                $sql="select * from shoe where id > 4";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($result)){

                $id=$row['id'];
                $name=$row['name'];
                $brand=$row['brand'];
                $price=$row['price'];
                $description=$row['description'];
                $code=$row['code'];
                $color=$row['color'];
                $size6=$row['size6'];
                $size7=$row['size7'];
                $size8=$row['size8'];
                $size9=$row['size9'];
                $image1=$row['img1'];
                $image2=$row['img2'];
                $image3=$row['img3'];
                $image4=$row['img4'];
                $image5=$row['img5'];
                $image6=$row['img6'];

                
                echo '<tr>
                <th scope="row" style="color:red; padding-left:1rem; ">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$brand.'</td>
                <td>'.$price.'</td>
                <td>'.$description.'</td>
                <td>'.$code.'</td>
                <td>'.$color.'</td>
                <td>'.$size6.'</td>
                <td>'.$size7.'</td>
                <td>'.$size8.'</td>
                <td>'.$size9.'</td>
                <td>'.$image1.'</td>
                <td>'.$image2.'</td>
                <td>'.$image3.'</td>
                <td>'.$image4.'</td>
                <td>'.$image5.'</td>
                <td>'.$image6.'</td>
                <td>
                <button class="btn btn-danger" style="background-color:white;"><a href="deletecomment.php?deleteid='.$id.'"  style="color:red;">Delete</a></button>
                <button class="btn btn-danger" style="background-color:white; border-color:green; margin:0.3rem;"><a href="updatesneaker.php?updateid='.$id.'"  style="color:green;">Update</a></button>
                </td>
                </tr>';

              }
            }

            ?>
          </tbody>
        </table>
    </div>
            </body>
            </html>