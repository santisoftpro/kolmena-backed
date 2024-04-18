// register Ajax request

$(document).ready(function () {
    $("#register-btn").click(function (e) { 
        
        if($("#register-form")[0].checkValidity()) {
            e.preventDefault();
            $("#register-btn").val('Please Wait...');
            if($("#rpassword").val() != $("#rcpassword").val())
            {
               $("#passError").text('* Password did not matched');
               $("#register-btn").val('sign up');
            }
            else{
                $("#passError").text('');
                $.ajax({
                    url: './assets/php/action.php',
                    method: 'post',
                    data: $("#register-form").serialize()+'&action=register',
                    success: function (response) {
                        $("#register-btn").val('sign up');
                      
                        if(response === 'register'){
                            console.log(response);
                            window.location = 'dashboard.php';
                        }
                     
                        else {
                            $("#regAlert").html(response);
                        }
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
                    // console.log(response);
                  
                    if(response === 'login') 
                    {
                        window.location = 'dashboard.php';
                    }
                    
                    else{
                        $("#loginAlert").html(response);
                    }
                    window.location = 'dashboard.php';
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
                    $("#forget-form")[0].reset();
                    $("#forgotAlert").html(response);
                }
            });
        }
       
        
    });
});