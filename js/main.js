$(document).ready(function(){
    $(document).click(function () {
        if($('#form2').is(":focus") && (window).width <= 480){
            $(window).scrollTop(0);
            $(".navbar").animate({height: "100%"});
            $(".main").animate({top: "100%"});
        }else{
            $(".navbar").animate({height: "40%"});
            $(".main").animate({top: "40%"});
        }
    });
});