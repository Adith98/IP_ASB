<html>
<head>
  <title>KapdeKaDukaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body> 
<header class="sticky-top">
    <ul class="nav justify-content-end" style="height:10px">
    <li class="nav-item a">
    <a class="nav-link active" href="notyetready.php">Gift Cards</a>
  </li>
  <li class="nav-item a">
    <a class="nav-link" href="notyetready.php" >Track Orders</a>
  </li>
  <li class="nav-item a">
    <a class="nav-link" href="notyetready.php" >Contact us</a>
  </li>
    </ul>
    <nav class="navbar navbar-light">
      <a class="navbar brand" href="http://localhost/IP_ASB/home">
        <img src="images/logo.png" width="30" height="40" class="d-inline-block align-top" alt="" style="margin-right:10px">
        Kapde Ka Dukaan
      </a>

    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >
        <li class="nav-item ">
          <?php $_SESSION['categ']="men"; ?>
            <a class="nav-link text-danger mr-3" href="http://localhost/IP_ASB/specific?name=Men">
              <b>Men</b>
            </a>
          </li>
          <li class="nav-item">
            <?php $_SESSION['categ']="women" ;?>
            <a class="nav-link text-danger mr-3" href="http://localhost/IP_ASB/specific?name=Women">
              <b>Women</b>
            </a>
          </li>
          <li class="nav-item">
          <?php $_SESSION['categ']="kids"; ?>
            <a class="nav-link text-danger mr-3" href="http://localhost/IP_ASB/specific?name=kids">
              <b>Kids</b>
            </a>
          </li>
          <li class="nav-item">
          <?php $_SESSION['categ']="f&w"; ?>
            <a class="nav-link text-danger mr-3" href="http://localhost/IP_ASB/specific?name=festive">
              <b>Festive and Wedding</b>
            </a>
          </li>
        </ul>
        <div class="Search">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
      <ul class="nav">
        <div class="user">
          <li class="nav-item dropdown">
            <a class="nav-link " href="signup.php" id="navbarDropdown"  data-toggle="dropdown">
              <i class="fa fa-user icon"></i>
            </a>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <p class="dropdown-item" href="#"><?php echo $_SESSION["username"]?></p>
            <a class="dropdown-item" href="#">Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">logout</a>
            </div><?php
          }else{
          ?>
            <div class="signup" aria-labelledby="navbarDropdown">
              <b>Your Account</b>
              <div class="dropdown-divider"></div>
              <h6>Access account and manage orders</h6>
              <div class="dropdown-divider"></div>
              <button onclick="location.href='login.php'" class="btn btn-primary" style="float:left;">
                Login</button>
              <button onclick="location.href='signup.php'" class="btn btn-primary" style="float:right;">
                Signup</button>
            </div>
          <?php } ?> 
          </li>
        </div>
        </li>
        </div>
        <li class="nav-item dropdown">
          <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-heart icon"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="display:none"></div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="http://localhost/IP_ASB/cart_list" id="navbarDropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-shopping-cart icon">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?><span class="badge badge-pill badge-danger">
            <?php 
                  $cart_count = $db_handle->numRows("SELECT * FROM `{$_SESSION["cart"]}`");
                  if (!empty($cart_count)){
                    echo $cart_count;
                  }else{
                    ?>0<?php 
                  } 
          }?>
          </span></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="display:none"></div>
        </li>
      </ul>

    </nav>
  </header>

 