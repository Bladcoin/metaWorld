
$(function () {
    $('#form-signin').validate({
        rules: {
            'reset_password[password]': {
                required: true,
                minlength: 6
            },
            'reset_password[password2]': {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
        },
        messages: {
            'reset_password[password]': {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            'reset_password[password2]': {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
            },
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            error.insertAfter(element);
        },
    });
})
