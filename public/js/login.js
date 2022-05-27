$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('keyup','#email, #password', function (e) {

    if (e.keyCode == 13) {
        $('#btnLogin').trigger('click');
    }
});
$(document).on('click', '#btnLogin', function () {
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax({
        url: "admin-login-post",
        type: 'POST',
        data: { email: email, password: password, },
        beforeSend: function () {
            $("#btnLogin").html(`<div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>`);
        },
        success: function (data) {
            window.location.href = 'admin';
        },
        error: function (error) {
            $("#btnLogin").html(`Login`)
            if (error.responseJSON.invalid == 1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'E-mail ou senha inválidos',

                })
            }
        }
    });
});


