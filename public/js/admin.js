$(document).ready(function () {

    $(function () {
        var that = $('#mail'),
            token = $('#_token-csrf').html(),
            url = that.data('url');

        $.ajax({
            type: "GET",
            url: url,
            data: {'_token': token},
            success: function (mail) {
                $('#letters').html(mail.letters);
                $('#trashed').html(mail.trashed);
            },
            error: function () {
            }
        });
    });

    //  AJAX delete image
    $('.close').click(
        function () {
            var imgId = $(this).data('img-id'),
                token = $(this).data('token'),
                url = $(this).data('url');
            console.log("клик по Id" + imgId);

            if (confirm('Удалить картинку?')) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {imgId: imgId, '_token': token},
                    success: function () {
                        console.log("удалило");
                        $('#Image' + imgId).remove();
                    },
                    error: function () {
                        console.log("ошибка");
                    }
                });
            }
        }
    );


});