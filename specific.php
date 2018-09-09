<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$categ=$_SESSION['categ'];
?>

<?php include 'header.php'; ?>
<div class="container">
   <div class ="row bg-dark text-white"  style="margin:10 10 10 20; padding-bottom:10;" id="slider">
   <a style="padding:10 10 10 20" class="card-link h3 title" data-toggle="collapse" href="#Suiting" role="button" aria-expanded="false" aria-controls="collapseExample">
      Suiting
  </a>
  <div class="collapse" id="Suiting">
  <div class="card card-body bg-dark text-white">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
    <div class="col height">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div class="card bg-dark text-white">
            <img class="card-img"src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="card-img-overlay ovl">
                <p class="card-title"><?php echo $product_array[$key]["name"]; ?></p>
                <p class="card-text"><?php echo "Rs. ".$product_array[$key]["price"]; ?></p>
                <form method="post" action="http://localhost/IP_ASB/product">
                <input type="hidden" name="code" value="<?php echo $product_array[$key]["code"]; ?>">
                <button type="submit" class="btn btn-danger">View</a>
                </form>    
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>

  </div>
  <div class ="row bg-dark text-white" style="margin:10 10 10 20; padding-bottom:10;" id="slider">
  <a style="padding:10 10 10 20" class="card-link h3 title" data-toggle="collapse" href="#TraditionalWW" role="button" aria-expanded="false" aria-controls="collapseExample">
      Traditional Women Wear
  </a>
  <div class="collapse" id="TraditionalWW">
  <div class="card card-body bg-dark text-white">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
    <div class="col height">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
          $_SESSION['code'] = $product_array[$key]["code"];
	    ?>
        <div class="card bg-dark text-white">
            <img class="card-img"src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="card-img-overlay ovl">
                <p class="card-title"><?php echo $product_array[$key]["name"]; ?></p>
                <p class="card-text"><?php echo "Rs. ".$product_array[$key]["price"]; ?></p>
                <form method="post" action="http://localhost/IP_ASB/product">
                <button type="submit" class="btn btn-danger">View</a>
                </form>    
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>

  </div>
  <div class ="row bg-dark text-white" style="margin:10 10 10 20; padding-bottom:10;" id="slider">
  <a style="padding:10 10 10 20" class="card-link h3 title" data-toggle="collapse" href="#Denim" role="button" aria-expanded="false" aria-controls="collapseExample">
      Denim
  </a>
  <div class="collapse" id="Denim">
  <div class="card card-body bg-dark text-white">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
    <div class="col height">
        <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct`");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
          $_SESSION['code'] = $product_array[$key]["code"];
	    ?>
        <div class="card bg-dark text-white">
            <img class="card-img"src="<?php echo $product_array[$key]["image"]; ?>">
            <div class="card-img-overlay ovl">
                <p class="card-title"><?php echo $product_array[$key]["name"]; ?></p>
                <p class="card-text"><?php echo "Rs. ".$product_array[$key]["price"]; ?></p>
                <form method="post" action="http://localhost/IP_ASB/product">
                <button type="submit" class="btn btn-danger">View</a>
                </form>   
            </div>
        </div>
        <?php
			}
	}
	?>
    </div>

  </div>
</div>

  <?php include 'footer.php'; ?>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('.col').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    arrows : false,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
    });
  </script>
</body>

</html