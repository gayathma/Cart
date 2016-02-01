/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 *
 */
function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register');
    });
    $('.error').removeClass('alert alert-danger').html('');

}
function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

function loginAjax() {
    var Email = $(".loginEmail").val();
    var Pass = $(".loginPass").val();
    $.ajax({
        type: "POST",
        dataType: "text",
        url: "http://localhost/dropbox/thulara/checkLogin", //Relative or absolute path to response.php file
        data: {
            active:'ok',
            email:Email,
            password:Pass
        },
        success: function (data) {
            if(data==="failed"){
                $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
                shakeModal();
            }else{
                  window.location="http://localhost/dropbox/thulara/shop";
            }
        }
    });
    
}

function RegisterAjax() {
    var Email = $(".RegEmail").val();
    var Pass = $(".RegPassword").val();
    var ConPass = $(".RegPassConfirm").val();
    $.ajax({
        type: "POST",
        dataType: "text",
        url: "http://localhost/dropbox/thulara/home/registerUser", //Relative or absolute path to response.php file
        data: {
            active:'ok',
            email:Email,
            password:Pass,
            ConfirmPass:ConPass
        },
        success: function (data) {
            if(data==="allempty"){
                $('.error').addClass('alert alert-danger').html("All Fields Need To Be Filled");
                shakeModal();
            }else if(data === "emailnotvalid"){
                $('.error').addClass('alert alert-danger').html("Email has to be valid");
                shakeModal();
            }else if(data === "passlengthinvalid"){
                $('.error').addClass('alert alert-danger').html("Password has to be more than 8 characters");
                shakeModal();
            }else if(data === "passnotmatch"){
                $('.error').addClass('alert alert-danger').html("No matching passwords");
                shakeModal();
            }else if(data === "notsaved"){
                $('.error').addClass('alert alert-danger').html("Error in your registration");
                shakeModal();
            }else if(data === "emailinuse"){
                $('.error').addClass('alert alert-danger').html("Email in use");
                shakeModal();
            }else if(data === "saved"){
                $('.error').removeClass('alert alert-danger');
                $('.error').addClass('alert alert-success').html("Registration success - now you can login");
            }
        }
    });
    
}


function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}
