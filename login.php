<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();

?>
<?php include 'header.php'; ?>
  <div class="container">
    <div class="contain">
      <h2 style="padding: 20 0 20 0">Login to Kapde ka Dukaan</h2>
      <form class="form">
        <input type="text" id="email" placeholder="Enter email" name="email">
        <input type="password" id="password" placeholder="Password"  name="password">
        <button class="btn btn-primary" id="submit" type="submit">Login</button><br><br>
        <p class="form-message"></p>
        <a href="login.php">Recover Password</a><br><br>
        <a href="signup.php">Not a Member? Signup</a>
      </form>
    </div>
  </div>
  <script src="js/login.js"></script>
  <?php include 'footer.php' ?>
</body>


</html>