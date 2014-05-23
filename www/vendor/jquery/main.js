$(document).ready(function(){
    $(".select-button").change(function(){
        var href = $('.select-button option:selected').attr('data-url');
        window.location.href = href;
    });
});
