$(document).ready(function () {

    $('.full_height > .row').css('height', window.innerHeight);

    $('#add_employee').on('submit', function (e) {

        e.preventDefault();
        var form = $(this);

        $.ajax( {
            type: "POST",
            url: form.attr( 'action' ),
            data: form.serialize(),
        } ).done(function (e) {
            console.log(e)
        });
    });

    $.dobPicker({
        daySelector: '#dobday',
        monthSelector: '#dobmonth',
        yearSelector: '#dobyear',
        dayDefault: 'Day',
        monthDefault: 'Month',
        yearDefault: 'Year'
    });
});

