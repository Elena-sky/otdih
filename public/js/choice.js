$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // AJAX
    // Подбирает номер по выбранным пунктам

    $('input').change(function () {
        var toilet = $('.toilet').is(':checked'),
            kitchen = $('.kitchen').is(':checked'),
            count = $('.count').val();
        console.log('1'+kitchen+'2'+toilet+'3'+count);

        $('.standard').hide();
        $('.lux').hide();
        $('.luxPlus').hide();
        $('.house1').hide();
        $('.house2').hide();

        $.ajax({
            type: "POST",
            url: document.location.origin +"/choice/answer",
            data: {toilet: toilet, kitchen: kitchen, count: count},
            success: function (response) {
                console.log('yes'+response);
                $('.'+response).show();
            },
            error: function () {
                console.log("ошибка");
            }
        });


    });


});