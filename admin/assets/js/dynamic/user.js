// register Ajax request

$(document).ready(function () {
    $("#register-btn").click(function (e) { 
        
        if($("#register-form")[0].checkValidity()) {
            e.preventDefault();
            $("#register-btn").val('Please Wait...');
            if($("#rpassword").val() != $("#rcpassword").val()) {
                $("#passError").text('* Passwords do not match');
                $("#register-btn").val('Sign up');
            } else {
                $("#passError").text('');
                $.ajax({
                    url: './assets/php/action.php',
                    method: 'post',
                    data: $("#register-form").serialize()+'&action=register',
                    success: function (response) {
                        console.log("Response:", response); // Check the response in the console
                        $("#register-btn").val('Sign up');
                      
                        if(response.trim() === 'register') {
                            console.log("Registration successful"); // Check if this message appears
                            window.location.href = 'dashboard.php';
                        } else {
                            console.log("Registration failed:", response); // Check if this message appears
                            $("#regAlert").html(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("Error:", error); // Check if there are any AJAX errors
                    }
                });
            }
        }
    });
// login function
    $("#login-btn").click(function (e) { 
        if($("#login-form")[0].checkValidity()){
        e.preventDefault();
        $("#login-btn").val('Please wait..');
        $.ajax({
            url: "./assets/php/action.php",
            method: "post",
            data: $("#login-form").serialize()+'&action=login',
            success: function (response) {
                console.log("Response:", response); // Check the response in the console
                
                if(response.trim() === "login") { // Use trim() to remove any whitespace
                    console.log("Success"); // Check if this message appears in the console
                    window.location.href = 'dashboard.php';
                } else {
                    console.log("Login failed:", response); // Check if this message appears in case of failure
                    $("#loginAlert").html(response);
                }
            },
            error: function(xhr, status, error) {
                console.log("Error:", error); // Check if there are any AJAX errors
            }
        });
        }
        
    });
// forgot function
    $("#forget-btn").click(function (e) { 
        if($("#forget-form")[0].checkValidity())
        {
            e.preventDefault();
            $("#forget-btn").val('Please wait');
            $.ajax({
                url: "./assets/php/action.php",
                method: "post",
                data: $("#forget-form").serialize()+'&action=forgot',
                success: function (response) {
                    $("#forget-btn").val('Submit');
                    $("#forget-form")[0].reset();
                    $("#forgotAlert").html(response);
                }
            });
        }
       
        
    });
});