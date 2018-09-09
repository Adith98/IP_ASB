<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

?>
<?php include 'header.php'; ?>
  <div class="container">
    <div class="contain">
      <h2 style="padding: 20 0 20 0">Login to Kapde ka Dukaan</h2>
      <form action="action_log.php" method="post">
        <input type="email" id="email" placeholder="Enter email" name="email" required>
        <input type="password" placeholder="Password" id="password" name="password" required>
        <button class="btn btn-primary" type="submit">Login</button><br><br>
        <a href="login.php" style="float:left; padding-left:10">Recover Password</a><br><br>
        <a href="signup.php" style="float:left; padding-left:10">Not a Member? Signup</a>
      </form>
    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>


</html>