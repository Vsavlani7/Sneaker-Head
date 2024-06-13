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
   .credit-card-form {
  max-width: 35rem;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 0.5rem;
}

.credit-card-form h2 {
  margin-top: 0;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: #333;
}

button[type="submit"] {
  display: block;
  margin-top: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color:black;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: red;
}

        </style>
</head>

<body>
   
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <h3>Payment Method</h3>
            <input type="radio" name="payment" id="cash" style="margin-left:18rem;  height:1rem; width:2%;"><label style="margin-left:0.5rem; font-size:1.5rem;">Credit Card </label> 
        <div class="credit-card-form">
  <form>
    <div class="form-group">
      <label for="card-number">Card Number</label>
      <input type="text" id="card-number" name="card-number" placeholder="0000 0000 0000 0000">
    </div>
    <div style="display:flex;">
    <div class="form-group">
      <label for="expiry">Expiry Date</label>
      <input type="text" id="expiry" name="expiry" placeholder="MM / YY">
    </div>
    <div class="form-group" style="margin-left:5rem;">
      <label for="cvv">CVV</label>
      <input type="text" id="cvv" name="cvv" placeholder="123">
    </div>
</div>
    <div class="form-group">
      <label for="name">Name on Card Holder</label>
      <input type="text" id="name" name="name" placeholder="Vishal Savlani">
    </div>
  </form>
</div>
<input type="radio" name="payment" id="cash" style="margin-left:18rem;  height:1rem; width:2%; padding-top:2rem;"><label style="padding-top:2rem; margin-left:0.5rem; font-size:1.5rem;">Cash on Delivery </label> 
<div style="display:flex;">
<button type="submit" style="margin-left:18rem; padding-right:2rem; padding-left:2rem;">Submit</button>
<button type="submit" style="margin-left:1rem; padding-right:2rem; padding-left:2rem;">Back</button>
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