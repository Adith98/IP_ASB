<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
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
  <ul id="some">
    <li><a href="https://www.facebook.com/"><img src="images/facebook.png"></a></li>
    <li><a href="https://www.instagram.com/"><img src="images/instagram.png"></a></li>
    <li><a href="https://twitter.com/"><img src="images/twitter.png"></a></li>
    <li><a href="https://www.linkedin.com/"><img src="images/linkedin.png"></a></li>
    <li><a href="https://www.snapchat.com/"><img src="images/snapchat.png"></a></li>
  </ul>
  <div class = "slideshow">
    <div class="mySlides">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><center><h1>Item No 1</h1></center></div>
    </div>
    <div class="mySlides">
        <a href="https://www.google.com/"><img src="images/Wallpaper2.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 2</h1></div>
    </div>
    <div class="mySlides">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 3</h1></div>
    </div>
  </div>
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
        
  <div class ="slider"  id="slider">
  <h3>Product Category</h3>
    <div class="yourclass">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div class="product">
            <img src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="overlay">
                <h4><?php echo $product_array[$key]["name"]; ?></h4>
                <h4><?php echo "Rs. ".$product_array[$key]["price"]; ?></h4><br><br><br><br>
                <a href="home1.php?code=<?php echo $product_array[$key]["code"]; ?>">View</a>   
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>
  </div>
  <div class ="slider1"  id="slider">
  <h3>Product Category</h3>
    <div class="yourclass">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div class="product">
            <img src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="overlay">
                <h4><?php echo $product_array[$key]["name"]; ?></h4>
                <h4><?php echo "Rs. ".$product_array[$key]["price"]; ?></h4><br><br><br><br>
                <a href="home1.php?code=<?php echo $product_array[$key]["code"]; ?>">View</a>   
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>
  </div>
  <div class ="slider1"  id="slider">
  <h3>Product Category</h3>
    <div class="yourclass">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div class="product">
            <img src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="overlay">
                <h4><?php echo $product_array[$key]["name"]; ?></h4>
                <h4><?php echo "Rs. ".$product_array[$key]["price"]; ?></h4><br><br><br><br>
                <a href="home1.php?code=<?php echo $product_array[$key]["code"]; ?>">View</a>   
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>
  </div>
  <div class ="slider1"  id="slider">
  <h3>Product Category</h3>
    <div class="yourclass">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div class="product">
            <img src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="overlay">
                <h4><?php echo $product_array[$key]["name"]; ?></h4>
                <h4><?php echo "Rs. ".$product_array[$key]["price"]; ?></h4><br><br><br><br>
                <a href="home1.php?code=<?php echo $product_array[$key]["code"]; ?>">View</a>   
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>
  </div>
  <div class="featured">
    <div class="mySlides1">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><center><h1>Item No 1</h1></center></div>
    </div>
    <div class="mySlides1">
        <a href="https://www.google.com/"><img src="images/Wallpaper2.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 2</h1></div>
    </div>
    <div class="mySlides1">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 3</h1></div>
    </div>
        <a class="prev1" onclick="plusSlides1(-1)">&#10094;</a>
        <a class="next1" onclick="plusSlides1(1)">&#10095;</a>
  </div>
  <div class="brands">
      <div class="brand"><img src="images/brand1.jpg" style="width:100%;height:100%;"></div>
      <div class="brand"><img src="images/brand2.jpg" style="width:100%;height:100%;"></div>
      <div class="brand"><img src="images/brand3.jpg" style="width:100%;height:100%;"></div>
  </div>
  <div class="featured1">
    <div class="mySlides2">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><center><h1>Item No 1</h1></center></div>
    </div>
    <div class="mySlides2">
        <a href="https://www.google.com/"><img src="images/Wallpaper2.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 2</h1></div>
    </div>
    <div class="mySlides2">
        <a href="https://www.google.com/"><img src="images/Wallpaper1.jpg" style="width:100%; height:100%;"></a>
        <div class="text"><h1>Item No 3</h1></div>
    </div>
        <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
        <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <footer>
    <ul1><li><h3>Contact us</h3></li><li><h5>9859746213</h5></li><li><h5>18008 89998</h5></li></ul1>
    <ul1><li><h3>Policy</h3></li><li><h5>Returns</h5></li><li><h5>Terms of use</h5></li></ul1>
    <ul1><li><h3>Help</h3></li><li><h5>Payments</h5></li><li><h5>Shipping</h5></li></ul1>
    <ul1><li><h3>Social</h3></li><li><h5>Instagram</h5></li><li><h5>Twitter</h5></li></ul1>
  </footer>

  <script src="js/main.js"></script>
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