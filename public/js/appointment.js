$(document).ready(function () {
    $('#appointment_btn').click(function () {
        $('#appointment_name-error').html('');
        $('#appointment_email-error').html('');
        $('#appointment_phone-error').html('');
        $('#appointment_date-error').html('');
        $('#appointment_clock-error').html('');
        $('#appointment_service-error').html('');
        $('#appointment_message-error').html('');

        let url                 = $('#appointment_url').val();
        let appointment_name    = $('#appointment_name').val();
        let appointment_email   = $('#appointment_email').val();
        let appointment_phone   = $('#appointment_phone').val();
        let appointment_date    = $('#appointment_date').val();
        let appointment_clock   = $('#appointment_clock').val();
        let appointment_service = $('#appointment_service').val();
        let appointment_message = $('#appointment_message').val();

        $.ajax({
            type : 'POST',
            data : {
                appointment_name,
                appointment_email,
                appointment_phone,
                appointment_date,
                appointment_clock,
                appointment_service,
                appointment_message
            },
            url : url,
            success : function () {
                toastr.success('Thanks for contacting us. We will contact you ASAP!','Success');
                setTimeout(function () {
                    location.reload();
                },3000);
            },
            error : function (myErrors) {
                $.each(myErrors.responseJSON.errors,function (key, value) {
                    $('#'+key+'-error').html('').html(value);
                });
            }
        });
    });
});
