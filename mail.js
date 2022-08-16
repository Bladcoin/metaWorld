$(function () {
    $("#feedback").focus();

    $('.form-anti-bot, .form-anti-bot-2').hide(); // hide inputs from users
    var answer = $('.form-anti-bot input#anti-bot-a').val(); // get answer
    $('.form-anti-bot input#anti-bot-q').val( answer ); // set answer into other input

    if ( $('form#feedback input#anti-bot-q').length == 0 ) {
        var current_date = new Date();
        var current_year = current_date.getFullYear();
        $('form#feedback').append('<input type="hidden" name="anti-bot-q" id="anti-bot-q" value="' + current_year + '" />'); // add whole input with answer via javascript to form
    }
});

$('#feedback').submit(function (evtObj) {
    evtObj.preventDefault();
    var form = $(this);
    $('#feedback .formLoader').fadeIn();
    $.ajax({
        url: $(form).attr('action'),
        type: 'POST',
        data: form.serialize(),

        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            if (data['status'] == '200') {
                $('#feedback').hide();
                $('#feedback').parents().eq(1).find('.entry-header').hide();
                $('#feedback').parents().eq(1).find('.form-success').removeClass('hide').hide().fadeIn();
            } else {
                $('#feedback .formLoader').fadeOut('fast');
                $( '#feedback [name="'+data['message']+'"]' ).css('background', '').effect( "shake",{direction:'up',distance:3,times:2}).css('background','rgba(255, 0, 0, 0.6)');
            }
        },
        error: function (data) {
            $("#eMessage").css('display','flex');
        }
    });
});