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
  <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
 </head>
 <body>
 <div class = "header sticky" id="myHeader">
    <nav>
        <div class="nav" id="nav"> 
            <a href="https://www.google.com/"id="nav">   Gift Cards   </a>
            <a href="https://www.google.com/"id="nav">   Track Orders   </a> 
            <a href="https://www.google.com/"id="nav">   Cart   </a>
        </div>  
    </nav>
    <h1  style="color:rgb(2, 15, 27); margin:3% 0 0 8%;">KAPDE KA DUKAAN</h1>
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
        <input id="atc" type="submit" value="Add to Cart" class="bt2" >
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