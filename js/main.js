var isMobile = false; //initiate as false
// device detection
var isMobile = window.matchMedia("only screen and (max-width: 760px)");

$(document).ready(function(){
    $(document).click(function () {
        console.log("page clicked");
        if($('#form2').is(":focus") && isMobile.matches){
            console.log("form in focus")
            $(window).scrollTop(0);
            $(".navbar").animate({height: "100%"});
            $(".main").animate({top: "100%"});
        }else{
            $(".navbar").animate({height: "40%"});
            $(".main").animate({top: "40%"});
        }
    });
});
function search_button(){
    $(".navbar").animate({height: "40%"});
    $(".main").animate({top: "40%"});
}