<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
$code= $_GET["code"];
?>
<?php include 'header.php'; ?>
<div class="container" style="margin-top:10;">
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-2">
          <img class="zoom img-fluid img-thumbnail" id="img1" src="Cloth Samples\MEN\suit\s01.jpg" onmouseover="show1()">
          <img class="zoom img-fluid img-thumbnail" id="img2" src="Cloth Samples\MEN\suit\s02.jpg" onmouseover="show2()">
          <img class="zoom img-fluid img-thumbnail" id="img3" src="Cloth Samples\MEN\suit\s03.jpg" onmouseover="show3()">
          <img class="zoom img-fluid img-thumbnail" id="img4" src="Cloth Samples\MEN\suit\s05.jpg" onmouseover="show4()">
          <img class="zoom img-fluid img-thumbnail" id="img5" src="Cloth Samples\MEN\suit\s07.jpg" onmouseover="show5()">
          <img class="zoom img-fluid img-thumbnail" id="img6" src="Cloth Samples\MEN\suit\s06.jpg" onmouseover="show6()">
        </div>
        <div class="col">
          <?php 
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where code='$code'");
            if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
              $_SESSION['product_image']= $product_array[$key]["image"];
              $_SESSION['product_name']=$product_array[$key]["name"];
              $_SESSION['product_price']=$product_array[$key]["price"];
              $_SESSION['code']=$product_array[$key]["code"];
              
        
        ?>
            <img class="img-thumbnail image" id="image" src="<?php echo $product_array[$key]["image"]; ?>">
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $product_array[$key]["name"]; ?>
          </h5>
          <h6 class="card-subtitle mb-2 text-muted">Rs.
            <?php echo $product_array[$key]["price"]; ?>
          </h6>
          <p class="card-text">Inclusive of all taxes</p>
          <div class="dropdown-divider"></div>
          <h5 class="card-title">Product Details:</h5>
          <p class="card-text">1. Brand -</p>
          <p class="card-text">2. Material -</p>
          <p class="card-text">3. Color -</p>
          <form action="<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?>cart.php
          <?php }else{ ?>error.php
          <?php } ?>" 
          method="post" class="form-inline">
          <button type="submit" class="card-link btn btn-primary">
            Add To Cart</button>
          </form>
          <div class="dropdown-divider"></div>
          <h5 class="card-title">Offers!!</h5>
          <p class="card-text">Kuch toh badhiya offer with promocode</p><a href="#">-> View </a>
          <p class="card-text">Kuch toh badhiya offer with promocode</p><a href="#">-> View </a>
        </div>
      </div>
    </div>
    <?php } }
        ?>
  </div>
</div>


<script src="js/product.js"></script>
<?php include 'footer.php'; ?>
</body>

</html>