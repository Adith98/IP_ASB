<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
?>
<?php include 'C:/wamp64/www/IP_ASB/header.php'; ?>
<div class="container">
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?>
    <h2> Your Cart <?php echo $_SESSION["username"]?></h2>
    <div class="card-deck row">
    <?php 
        $cart_items = $db_handle->runQuery("SELECT * FROM {$_SESSION['cart']}");
        if (!empty($cart_items)) { 
        foreach($cart_items as $key=>$value){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card" >
            <img class="card-img-top" src="<?php echo $cart_items[$key]["image"]; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $cart_items[$key]["name"]; ?></h5>
              <p class="card-text"><?php echo $cart_items[$key]["price"]; ?></p>
                 <form class="d-inline-block" method="post" action="buynow.php">
                 <input type="hidden" name="code" value="<?php echo $cart_items[$key]["code"]; ?>">
                 <button type="submit" class="card-link btn btn-primary">Buy Now</button>
                </form>
                <form class="d-inline-block" method="post" action="remove.php">
                <input type="hidden" name="code" value="<?php echo $cart_items[$key]["code"]; ?>">
                <input type="hidden" name="id" value="<?php echo $cart_items[$key]["id"]; ?>">
                <button type="submit" class="card-link btn btn-primary">Remove</button>
                </form>
            </div>
          </div>
        </div>
          <?php
        }
    }else{
        ?><h4>Your Cart is empty</h4><?php
    }
    
    ?>
    </div>

<?php }else{ ?>
    <h2> You need to Login to view the cart</h2>
    <a href="javascript:history.go(-1)">okay</a>
<?php }?>
</div>
    <?php include 'C:/wamp64/www/IP_ASB/footer.php'; ?>
</body>
</html>