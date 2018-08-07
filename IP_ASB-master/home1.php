<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$code=$_GET["code"];
?>
<html>
 <head>
  <title>Hello</title>
  <link rel="stylesheet" href="product.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
 </head>
 <body>
 <div class = "header" id="myHeader">
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
          <?php 
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where code='$code'");
            if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        
          ?>
          <div class="Separate"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
          <div class="Buy">
              <form method="post" action="#">
              <input type="submit" value="Add to Cart" class="bt2" >
              <input type="submit" value="Buy Now" class="bt1" >
              </form>         
          </div>
          <?php
            }
        }
        ?>
      </div>
      <div class="right">Helol</div>
  </div>
  
  
  
  

  
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