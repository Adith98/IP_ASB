<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
?>

 <?php include 'header.php'; ?>
 <div id="demo" class="carousel slide w-100 h-50" data-ride="carousel">

<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<div class="carousel-inner img">
  <div class="carousel-item active text-center">
    <img class="rounded" src="images/offer1.jpg" alt="Los Angeles">
  <div class="carousel-caption  d-md-block">

  <h5>Some info about the ongoing sale</h5>
  <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">More info</a></h4>
  </div>
  </div>  
  <div class="carousel-item text-center">
    <img class="rounded" src="images/offer2.jpg" alt="Chicago">
    <div class="carousel-caption  d-md-block">

  <h5>Some info about the ongoing sale</h5>
  <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">More info</a></h4>
  </div>
  </div>
  <div class="carousel-item text-center">
    <img class="rounded" src="images/offer3.jpg" alt="New York">
    <div class="carousel-caption  d-md-block">
  <h5>Some info about the ongoing sale</h5>
  <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">More info</a></h4>
  </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<div class="container">
  <h6 class="text-center pt-5"><i>Shop from a variety of Supreme quality fabrics available in our inventory</i></h6>
    <div class="card-group">
    <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `home` where id<=3");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
       <div class="card p-2 border-light" >
            <div class="card-header text-center bg-dark text-light"><i><?php echo $product_array[$key]["name"]; ?></i></div>
            <a href="specific?name=<?php echo $product_array[$key]["name"]; ?>"> <img class="card-img-top" src="<?php echo $product_array[$key]["image"]; ?>" alt="Card image cap"></a>
        </div>
        <?php
			}
	}
	?>
    </div>
 <h6 class="text-center pt-5"><i><b>Featured Brands</b></i></h6>
 <div id="demo" class="carousel slide h-25" data-ride="carousel">
 <ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
 </ul>
  <div class="carousel-inner">
  <div class="carousel-item active text-center">
    <img class="rounded w-50"src="images/brand1.jpg" alt="Los Angeles">
  </div>  
  <div class="carousel-item text-center">
    <img class="rounded w-50" src="images/brand2.jpg" alt="Chicago">
  </div>
    <div class="carousel-item text-center">
    <img class="rounded w-50" src="images/brand3.jpg" alt="New York">
  </div>
 </div>
 </div>
 <h6 class="text-center pt-5"><i>Categorized in a way that you would find your desired fabric in a second</i></h6>
 <div class="card-group">
    <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `home` where id<=6 and id>=4 ");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
       <div class="card p-2 border-light" >
            <div class="card-header text-center bg-dark text-light"><i><?php echo $product_array[$key]["name"]; ?></i></div>
            <a href="specificmaterial?name=<?php echo $product_array[$key]["name"]; ?>"><img class="card-img-top" src="<?php echo $product_array[$key]["image"]; ?>" alt="Card image cap"></a>
        </div>
        <?php
			}
	    }
	?>
    
  </div>
    <div class="card p-1 border-light text-center FW1" >
            <div class="card-header text-center bg-dark text-light"><i>Festive and Wedding</i></div>
            <a href="specificmaterial?name=Festive"><img  src="images/F&W.jpg" class="card-img-top FW" alt="Card image cap"></a>
        </div>
     </div>
   <?php include 'footer.php'; ?>
</div>
</body>

</html>