<?php

    session_start();
    require_once("db/dbcontroller.php");
    $db_handle = new DBController();

    $email=$_POST['email'];
    $password=$_POST['password'];

    $errorEmpty = false;
    $errorEmail = false;
    $errorPassword = false;
    $success = false;

    $result = $db_handle->runQuery("SELECT * FROM `users` where email='$email'");

    if(empty($email) || empty($password)){
        echo "<span>Fill in all fields</span>";
        $errorEmpty = true;
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span>Invalid Email</span>";
        $errorEmail = true;
    }
    else
    {
        if (!empty($result)) {
        foreach($result as $key=>$value){
            $password1 = $result[$key]["password"];
            $number = $result[$key]["number"];
            $username = $result[$key]["username"];
        }
        if($password1!=$password){
                echo "<span>Invalid Password</span>";
                $errorPassword = true;
        }
        else{
            echo "<span>Success</span>";
            $_SESSION['loggedin'] = true;
            $_SESSION["username"] = $username;
            $_SESSION["cart"] = "cart_$username";
            $_SESSION["number"] = $number;
            $_SESSION["email"] = $email;
            $success= true;
        }
    }
        else{
            echo "<span>Email is not registered</span>";
    }
}
?>

<script type="text/javascript">

     $("#email","#password").removeClass("border border-danger");
     var errorEmpty = "<?php echo $errorEmpty ?>",
     errorEmail = "<?php echo $errorEmail ?>",
     errorPassword = "<?php echo $errorPassword ?>",
     success = "<?php echo $success ?>";
    
    if(errorEmpty == true){
        $("#email","#password").addClass("border border-danger");
    }
    if(errorEmail == true){
        $("#email").addClass("border border-danger");
    }
    if(errorPassword == true){
        $("#password").addClass("border border-danger");
    }   
    if(errorEmpty == false && errorEmail == false && errorPassword == false){
        $("#email","#password").val("");
    }
    if(success == true){
        window.location.href = "http://localhost/IP_ASB/home";
    }
    
</script>