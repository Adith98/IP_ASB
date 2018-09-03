<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$code=$_GET["code"];
?>
<html>
 <head>
  <title>Hello</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
 <div class="BuyingPage">
  <div class="left">   
    <div class="Separate">
        <div class="list">
            <img id="img1" src="Cloth Samples\sample1.jpg" onmouseover ="show1()">
            <img id="img2" src="Cloth Samples\sample2.jpg" onmouseover ="show2()">
            <img id="img3" src="Cloth Samples\sample3.jpg" onmouseover ="show3()">
            <img id="img4" src="Cloth Samples\sample4.jpg" onmouseover ="show4()">
            <img id="img5" src="Cloth Samples\sample5.jpg" onmouseover ="show5()">
        </div>
        <?php 
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where code='$code'");
            if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        
        ?>
        <div class="image" >
            <img id="image" src="<?php echo $product_array[$key]["image"]; ?>">
        </div>

    </div>    
  </div>
  <div class="right">
    <div class="price"> 
        <h2><?php echo $product_array[$key]["name"]; ?></h2>
        <h4>Rs. <?php echo $product_array[$key]["price"]; ?></h4>
        <h5>Inclusive of all taxes</h5>
    </div>
    <div class="description">
        <h2>Product Details:</h2>
        <h4>1. ldkslkasdkmasdkamsd</h4>
        <h4>2. ldkslkasdkmasdkamsd</h4>
        <h5>** slkdjasdlasdljas;dkj</h5>
        <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
        <input id="atc" type="submit" value="Add to Cart" class="bt2" ></form>
        <input id="bn" type="submit" value="Buy Now" class="bt1" >  
    </div>
    <div class="offers"> 
        <h2>!!Offers!!</h2>
        <div class="offers_list"><h3>Kuch toh badhiya offer with promocode</h3><a href="#"><h4> &#x2192 View </h4></a></div>
        <div class="offers_list"><h3>Kuch toh badhiya offer with promocode</h3><a href="#"><h4> &#x2192 View </h4></a></div>
    </div>    
  </div> 
  <?php } }
        ?>
 </div>  
          
 <footer>
    <ul1><li><h3>Contact us</h3></li><li><h5>9859746213</h5></li><li><h5>18008 89998</h5></li></ul1>
    <ul1><li><h3>Policy</h3></li><li><h5>Returns</h5></li><li><h5>Terms of use</h5></li></ul1>
    <ul1><li><h3>Help</h3></li><li><h5>Payments</h5></li><li><h5>Shipping</h5></li></ul1>
    <ul1><li><h3>Social</h3></li><li><h5>Instagram</h5></li><li><h5>Twitter</h5></li></ul1>
  </footer> 
  
  

  <script src="js/product.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.yourclass').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    });
    });
  </script>
 </body>
</html>