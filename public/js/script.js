$(document).ready(function () {
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
});

