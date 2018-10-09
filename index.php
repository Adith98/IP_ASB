<?php
session_start(); 
if(isset($_SESSION['loggedin'])){
  header("Location:http://localhost/IP_ASB/");
} ?>
<html>
<head>
  <title>Kapde Ka Dukaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <header class="sticky-top" style="height:12%">
<nav class="navbar navbar-light" >
      <a class="navbar-brand brand"href="http://localhost/IP_ASB/" style="display:inline">
        <img src="images/logo.png" width="50" height="60" class="d-inline-block align-top" alt="">
        Kapde Ka Dukaan
      </a>
      <a class="justify-content-end btn btn-primary" href="http://localhost/IP_ASB/Signup">Signup</a>
</header>
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner"style="height:88%;">
    <div class="carousel-item active">
      <img class="one" alt="Los Angeles">
    <div class="carousel-caption  d-md-block">
    <h2>Welcome To Kapde Ki Dukaan</h2>
    <h5>Blah blah blah blah</h5>
    <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">Let's Shop</a></h4>
    </div>
    </div>  
    <div class="carousel-item">
      <img class="two" alt="Chicago">
      <div class="carousel-caption  d-md-block">
    <h2>Welcome To Kapde Ki Dukaan</h2>
    <h5>Blah blah blah blah</h5>
    <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">Let's Shop</a></h4>
    </div>
    </div>
    <div class="carousel-item">
      <img class="three" alt="New York">
      <div class="carousel-caption  d-md-block">
    <h2>Welcome To Kapde Ki Dukaan</h2>
    <h5>Blah blah blah blah</h5>
    <h4><a href="http://localhost/IP_ASB/home" class="btn btn-outline-light">Let's Shop</a></h4>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
</body>
</html>
    