$(document).ready(function(){
    $("#carousel1").css("width","60%");
    $(".carousel .mask").mouseover(function(){
        $(this).parent().parent().parent().children().animate({width:"10%"},{ duration: 500, queue: false });
        $(this).parent().parent().stop();
        $(this).parent().parent().animate({width: "60%"},{ duration: 500, queue: false });
    });
});