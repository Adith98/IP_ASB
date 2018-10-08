<?php
session_start();
require_once("db/dbcontroller.php");
$db_handle = new DBController();

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$number = $_POST['number'];
$c_password = $_POST['c_password'];
$gender = $_POST['gender'];

if(empty($email) || empty($password) || empty($username) || empty($number) || empty($gender) || empty($c_password)){
    echo "<span>Fill in all fields</span>";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<span>Improper Email</span>";
}
elseif( preg_match('/\s/',$username) )
{
    echo "<span>No spaces allowed in the username</span>";
    $errorUsername = true;
}
elseif(!preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/',$username)){
    echo "<span>Invalid Username</span>";
}
elseif( strlen($username)< 6 ){
    echo "<span>Username should contain atleast 6 characters</span>";
}
elseif( strlen($password)< 8){
    echo "<span>Password should contain atleast 8 characters</span>";
}
elseif( $password != $c_password ){
    echo "<span>Passwords do not match</span>";
}
elseif(!preg_match('/^[7-9]\d{9}$/',$number)){
    echo "<span>Invalid Phone Number</span>";
}
else
{
    $query = "INSERT INTO users(username,email,password,number,gender)";
    $query .= " VALUES ('$username','$email','$password','$number','$gender')";
    $value = $db_handle->connectDB()->query($query);
    if($value === TRUE)
    {
        $sql = "CREATE TABLE IF NOT EXISTS `cart_$username` (
        `id` int(8) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `code` varchar(255) NOT NULL,
        `image` text NOT NULL,
        `price` double(10,2) NOT NULL,
        PRIMARY KEY (`id`)
      )";
    $db_handle->connectDB()->query($sql);
    echo "<span>Successfully logged in</span>";
    }else{
        echo "<span>Error has occured</span>";
    }
}
?>
<script type="text/javascript">
    var success = "<?php echo $success ?>";
    if(success == true){
        window.location.href = "http://localhost/IP_ASB/login";
    }
</script>