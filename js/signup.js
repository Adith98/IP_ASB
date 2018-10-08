$(document).ready(function () {
    $("form").submit(function (e) { 
        e.preventDefault();
        var email = $("#email").val();
        var username = $("#username").val();
        var c_password = $("#confirm_password").val();
        var gender = $("#gender").val();
        var number = $("#number").val();
        var password = $("#password").val();
        var submit = $("#submit").val();
       $(".form-message").load("action_sign.php",
        {
            email: email,
            username: username,
            c_password: c_password,
            number: number,
            gender:gender,
            password: password,
            submit: submit
        });        
    });
        
});

