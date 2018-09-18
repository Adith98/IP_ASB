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
      <form action="action_sign.php" name="myForm" method="post">
        <input type="text" placeholder="Username" name="username" id="username" required>
        <input type="email" placeholder="Email" name="email" id="email" required>
        <input type="password" placeholder="Password" name="password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>
        <input type="text" placeholder="Contact Number" name="number" id="number" required>
        <select name="gender" id="gender">
          <option value="0">Gender</option>
          <option value="1">male</option>
          <option value="2">female</option>
          <option value="3">other</option>
        </select>
        <button class="btn btn-primary"type="submit">Sign Up</button><br><br>
        <a href="login.php" style="float:right; margin:0 10 10 0">Already a member? Login</a>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var gender = document.forms["myForm"]["gender"].value;

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>

<?php include 'footer.php'; ?>
</body>


</html>