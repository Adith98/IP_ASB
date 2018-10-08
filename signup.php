<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();
if(isset($_SESSION['loggedin'])){
  header("Location:http://localhost/IP_ASB/home");
}
?>
 <?php include 'header.php'; ?>
  <div class="container">
    <div class="contain">
      <h2 style="padding: 20 0 20 0">Sign Up to Kapde ka Dukaan</h2>
      <form class="form">
        <input type="text" placeholder="Username" id="username" >
        <input type="text" placeholder="Email" id="email" >
        <input type="password" placeholder="Password" name="password" id="password" >
        <input type="password" placeholder="Confirm Password" id="confirm_password" >
        <input type="text" placeholder="Contact Number" id="number" >
        <select id="gender">
          <option value="0">Gender</option>
          <option value="1">male</option>
          <option value="2">female</option>
          <option value="3">other</option>
        </select>
        <button class="btn btn-primary"type="submit">Sign Up</button><br><br>
        <p class="form-message"></p>
      </form>
      <a href="login.php">Already a member? Login</a>
    </div>
  </div>
  <script src="js/signup.js"></script>
  

<?php include 'footer.php'; ?>
</body>


</html>