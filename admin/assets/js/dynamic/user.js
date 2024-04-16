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
                            window.location = './dashboard.php';
                        }
                        else {
                            $("#regAlert").html(response);
                        }
                    }
                });
            }
        }
    });
});