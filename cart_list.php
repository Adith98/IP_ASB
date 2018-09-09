<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<?php include 'header.php'; ?>
<div class="container">
    <h2> Your Cart <?php echo $_SESSION["username"]?></h2>
    <div class="card-deck"style="width:max-content;">
    <?php 
        $cart_items = $db_handle->runQuery("SELECT * FROM {$_SESSION["cart"]}");
        if (!empty($cart_items)) { 
        foreach($cart_items as $key=>$value){
        ?>
            <div class="card" >
            <img class="card-img-top" src="<?php echo $cart_items[$key]["image"]; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $cart_items[$key]["name"]; ?></h5>
              <p class="card-text"><?php echo $cart_items[$key]["price"]; ?></p>
                 <button type="submit" class="card-link btn btn-primary">
                Buy Now</button>
                 <button type="submit" class="card-link btn btn-primary">
                Remove</button>
            </div>
          </div>
          <?php
        }
    }
    ?>
    </div>
    </div>

    <?php include 'footer.php'; ?>