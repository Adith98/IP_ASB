<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  
  <div class = "header sticky" id="myHeader">
    
  
   <div class="extra" id="ok">
        <nav>
            <div class="nav" > 
                <a href="#" onclick="openCity(event, 'London'); return false;">   Gift Cards   </a>
                <a href="#" onclick="openCity(event, 'Paris'); return false;">   Track Orders   </a> 
                <a href="#" onclick="openCity(event, 'Tokyo'); return false;">   Contact us  </a>
            </div>  
        </nav>
    </div>  
    <div id="London" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">close</span>
        <h3>Separate content for Gift Cards</h3>
    </div>

    <div id="Paris" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">close</span>
        <h3>Separate content for Track Order</h3>
    </div>

    <div id="Tokyo" class="tabcontent">
    <span onclick="this.parentElement.style.display='none'" class="topright">close</span>
        <h3>Separate content for Contact us</h3>
    </div>
    
    <a href="http://localhost/IP_ASB/">
        <h1  style="color:rgb(2, 15, 27); margin:3% 0 0 10%;">KAPDE KA DUKAAN</h1>
    </a>
    
    
    
    
    <div class = "main_nav" id="ok">
        <nav class="categ">
            <a href="https://www.google.com/">   Men  </a>|
            <a href="https://www.google.com/">   Women  </a> |
            <a href="https://www.google.com/">   Brands  </a>|
            <a href="https://www.google.com/">   Festive and Wedding  </a>|
        </nav>
        <form class="search" action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <nav class="cont">
            <div class="user">
                <a  href="https://www.google.com/" ><i class="fa fa-user border"></i></a>
                <div class="signup">
                    <h4 style="padding:6% 0 2% 10%; margin:0;color:black">Your Account</h3>
                    <h5 style="padding:2% 0 7% 10%; margin:0;">Access account and manage orders</h4>
                    <button onclick="location.href='login.php'" class="btn btn-primary" style="float:left; margin-left:90;">
                    Login</button>
                    <button onclick="location.href='signup.php'" class="btn btn-primary" style="float:right; margin-right:90;">
                    Signup</button>
                </div>
            </div>
            <div class="Wishlist">
            <a  href="https://www.google.com/" ><i class="fa fa-heart border"></i></a>
            </div>
            <div class="Cart">
            <a  href="https://www.google.com/" ><i class="fa fa-shopping-cart border"></i></a>
            </div>
        </nav>
        
    </div>
  </div>    
  
  <div class="contain">
  <h2 style="padding: 20 0 20 0">Sign Up to Kapde ka Dukaan</h2>
  <form action="/action_page.php">
    <input type="email"  id="email" placeholder="Enter email" name="email" required>
	<input type="password" placeholder="Password" id="password" required>
	<input type="password" placeholder="Confirm Password" id="confirm_password" required>
	
	<b>Gender :</b> <input type="radio" name="gender" value="male" > Male
  	<input type="radio" name="gender" value="female" required> Female
  	<input type="radio" name="gender" value="other"> Other <br><br>
	<button type="submit">Sign Up</button><br><br>
	<a href="login.php" style="float:right; margin:0 10 10 0">Already a member? Login</a>
  </form>
</div>
<footer>
    <ul1><li><h3>Contact us</h3></li><li><h5>9859746213</h5></li><li><h5>18008 89998</h5></li></ul1>
    <ul1><li><h3>Policy</h3></li><li><h5>Returns</h5></li><li><h5>Terms of use</h5></li></ul1>
    <ul1><li><h3>Help</h3></li><li><h5>Payments</h5></li><li><h5>Shipping</h5></li></ul1>
    <ul1><li><h3>Social</h3></li><li><h5>Instagram</h5></li><li><h5>Twitter</h5></li></ul1>
  </footer>
  <script type="text/javascript">
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
	</script>

</body>


</html>