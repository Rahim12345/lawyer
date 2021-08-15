$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadComments($('#blog_id_comment').val());
    $('#postComment').click(function () {
        $(this).prop('disabled',true);
        let reKey   = $('#re-key').val().trim();
        grecaptcha.ready(function () {
            grecaptcha.execute(reKey, { action: 'comment' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;

                $('#comment_message-error').html('');
                $('#comment_name-error').html('');
                $('#comment_email-error').html('');
                let recaptcha       = $('#recaptchaResponse').val();
                let id              = $('#blog_id_comment').val().trim();
                let comment_name    = $('#comment_name').val().trim();
                let comment_email   = $('#comment_email').val().trim();
                let comment_message = $('#comment_message').val().trim();
                let url             = $('#commentUrl').val().trim();
                $.ajax({
                    type : 'POST',
                    data : {recaptcha,id,comment_name,comment_email,comment_message,token},
                    url : url,
                    success : function () {
                        $('#comment_name').val(null);
                        $('#comment_email').val(null);
                        $('#comment_message').val(null);
                        loadComments($('#blog_id_comment').val());
                        $('#postComment').prop('disabled',false);
                    },
                    error : function (myErrors) {
                        $.each(myErrors.responseJSON.errors,function (key, value) {
                            if (key === 'comment_name' || key === 'comment_email' || key === 'comment_message')
                            {
                                $('#' + key + '-error').html('').html(value)
                            }
                            else
                            {
                                console.log(value);
                            }
                        })
                        $('#postComment').prop('disabled',false);
                    }
                });
            });
        });
    });

    function loadComments(blogID) {
        $.ajax({
            type : 'POST',
            data : { blogID },
            url  : $('#loadCommentsUrl').val(),
            success : function (response) {
                $('#comments-block').html('').html(response.output);
                $('#countComment').html('').html('Comments ('+response.count+')');
            }
        });
    }
});
