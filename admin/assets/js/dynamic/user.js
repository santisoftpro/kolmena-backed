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
                        window.location = 'dashboard.php';
                        if(response === 'register'){
                            console.log(response);
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
                    window.location = 'dashboard.php';
                    if(response === 'login') 
                    {
                        window.location = 'dashboard.php';
                    }
                    
                    else{
                        $("#loginAlert").html(response);
                    }
            }
        });
        }
        
    });
});