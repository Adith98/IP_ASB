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
  <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    
    <a href="#">
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
    });
    });
  </script>
 </body>
</html>