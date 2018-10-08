<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
$type=$_GET['name'];
?>
<?php include 'header.php'; ?>
<div class="container">
  <h6 class="text-center pt-5"><i><?php echo $type ?></i></h6>
  <div class="row">
  <?php
	        $product_array = $db_handle->runQuery("SELECT * FROM `tblproduct` where type='$type'");
	        if (!empty($product_array)) { 
		    foreach($product_array as $key=>$value){
	    ?>
        <div id="blah" class="col-4">
        <div class="card">
            <div class="card-header text-center bg-dark text-light"><i><?php echo $product_array[$key]["name"]; ?></i></div>
            <a href="specific?name=<?php echo $product_array[$key]["name"]; ?>"> <img class="card-img-top" src="<?php echo $product_array[$key]["image"]; ?>" alt="Card image cap"></a>
        </div>
        </div>
        <?php
			}
	}
	?>
    </div>
    </div>

    <?php include 'footer.php'; ?>
    <script type="text/javascript">
    function checkWidth() {
    if ($(window).width() < 514) {
        $("[id^='blah']").removeClass('col-4');
    } else {
        $("[id^='blah']").addClass('col-4');
    }
    }   

    $(window).resize(checkWidth);
    </script>   
 