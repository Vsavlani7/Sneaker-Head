<?php

$allowed_types = array('image/png', 'image/jpeg', 'image/gif');
$max_size = 5 * 1024 * 1024; // 5 MB


// Connect to the database
include 'config.php';

if(isset($_POST["submit"])){

  $shoename = $_POST['shoename'];
  $brandname = $_POST['brandname'];
  $price = $_POST['price'];
  $color = $_POST['color'];
  $code = $_POST['code'];
  $desc = $_POST['desc'];
  $size6 = $_POST['size6'];
  $size7 = $_POST['size7'];
  $size8 = $_POST['size8'];
  $size9 = $_POST['size9'];

$file_paths = array();

for ($i = 1; $i <= 6; $i++){  
  $file_name = $_FILES["img$i"]["name"];
  $file_tmp_name = $_FILES["img$i"]["tmp_name"];
  $file_size = $_FILES["img$i"]["size"];
  $file_type = $_FILES["img$i"]["type"];
  
  // Check if a file was uploaded for this input
  if ($file_name != "") {
    // Validate the file
    if (!in_array($file_type, $allowed_types)) {
      die("Error: File type not allowed");
    }

    if ($file_size > $max_size) {
      die("Error: File size exceeds maximum allowed");
    }
    
    
    // Move the file to a temporary location
    // $target_dir = "images/Sneakers/";
    $target_file = basename($file_name);
    if (!move_uploaded_file($file_tmp_name,"images/Sneakers/".$file_name)) {
      die("Error: Failed to move file");
    }
    $file_paths[] = $target_file;
  }
}
    // Insert the file path into the corresponding column in the database
    $sql = "INSERT INTO shoe(name,brand,price,description,color,code,size6,size7,size8,size9,img1,img2,img3,img4,img5,img6) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssiiiissssss", $shoename,$brandname,$price,$desc,$color,$code,$size6,$size7,$size8,$size9,...$file_paths);
    if (!$stmt->execute()) {
      die("Error: Failed to insert into database");
    }
  

}
// Close the database connection

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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  right:30%;
  top:18%;
  width: 13.5rem;
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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:23%;
  top:55%;
  width: 13.5rem;
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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:75%;
  top:55%;
  width: 13.5rem;
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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:13%;
  top:87%;
  width: 13.2rem;
  
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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:49%;
  top:87%;
    width: 13.2rem;
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
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:83%;
  top:87%;
  width: 13.2rem;
}
.addimage5:hover {
  background-color: red;
  box-shadow: 1px 1px 2px black, 0 0 25px black, 0 0 5px black;
}
.spanvishal{
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  left:15%;
  top:97%;
  color:red;
}
        </style>
</head>

<body style="overflow-x:hidden;">
<header style="background-color:white; ">
        <hr style="width: 100%; border-top: 0.125rem solid rgb(0, 0, 0); margin: 0%; ">
        <div class="container" >
            <div class="row" >
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
                            <span>Add Sneaker</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="testimonial" style="background-color: white;">
            <div class="row" style="margin: 0px;">
            
                <div class="col-lg-5 p-0">
                <form method="POST" enctype="multipart/form-data">
                    <div class="testimonial__text">
                        <div class="testimonial__author">
                            <div class="testimonial__author__text" style="text-align: left;">
                                <h3 style="color:red;">ADD SNEAKER</h3><br><br>
                                <div class="checkout__input">
                                        <p >Sneaker Name</p>
                                        <input type="text" style="color:black" name="shoename" placeholder="Enter Your  Shoe Name">
                                    </div>
                                    <div class="checkout__input">
                                        <p >Brand Name</p>
                                        <input type="text" style="color:black" name="brandname" placeholder="Enter Your  Brand Name">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Price (₹)</p>
                                        <input type="text" style="color:red" name="price" placeholder="Enter Your  Shoe Price">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Description</p>
                                        <input type="textbox" style="color:black" name="desc" placeholder="Enter Your  Shoe Description">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Style</p>
                                        <input type="text" style="color:black" name="code" placeholder="Enter Your  Shoe Style">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Color</p>
                                        <input type="text" style="color:black" name="color" placeholder="Enter Your  Shoe Color">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 6</p>
                                        <input type="number" style="color:black" name="size6" placeholder="Enter Your  Shoe Quantity of Size 6">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 7</p>
                                        <input type="number" style="color:black" name="size7" placeholder="Enter Your  Shoe Quantity of Size 7">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 8</p>
                                        <input type="number" style="color:black" name="size8" placeholder="Enter Your  Shoe Quantity of Size 8">
                                    </div>
                                    <div class="checkout__input">
                                        <p>Size 9</p>
                                        <input type="number" style="color:black" name="size9" placeholder="Enter Your  Shoe Quantity of Size 9">
                                    </div>
                            
                                    
                                    
                                    
                                <h5>Note</h5>
                                <p style="font-size:15px;">It is the responsibility of the admin to properly add the details of every sneaker, in case if admin have any query contact on 9586666118. Click on the upload button on the image to add image as per the suitable place.</p>
                            </div>      
                        </div>
                    </div>
                        <input type="submit" name="submit" value="ADD SNEAKER" class="primary-btn" style="margin-left: 50px;"><br><br>
                </div>
               
                <div class="col-lg-7 p-0" style="background-color: white;">
                    <!-- <div class="testimonial__pic set-bg" data-setbg="images/j1.jpg"></div> -->
                    <img src="images/adminwork/c3.jpg" style="padding:20px; width:95%; filter: grayscale();">
                    <input class="addimage" type="file" name="img1" required />
                    <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c6.jpg" style="height: 500px; filter: grayscale();"></div></div>
                    <input class="addimage1" type="file" name="img2" required />
                    <div class="col-lg-6 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c7.jpg" style="height: 500px; filter: grayscale();"></div></div>
                    <input class="addimage2" type="file" name="img3" required />
                    
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c55.jpg" style="filter: grayscale();"></div></div>
                <input class="addimage3" type="file" name="img4" required />
                  <span class="spanvishal">*Image will be shown on sneaker page</span>                 
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px; "><div class="product__item__pic set-bg" data-setbg="images/adminwork/c1.jpg" style="filter: grayscale();"></div></div>
                <input class="addimage4" type="file" name="img5" required />
                                    
                <div class="col-lg-4 col-md-5 col-sm-5" style="padding: 20px;"><div class="product__item__pic set-bg" data-setbg="images/adminwork/c2.jpg" style="filter: grayscale();"></div></div>
                <input class="addimage5" type="file" name="img6" required />
               
        </div>
        </form>
        
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