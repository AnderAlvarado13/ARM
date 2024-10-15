$(function() {
    $('.input-file__input').on('change', function(){
        $(this).prev().text($(this)[0].files[0].name);

    })

});