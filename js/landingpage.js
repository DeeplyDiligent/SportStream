//var isMobile = false; //initiate as false
//// device detection
//var isMobile = window.matchMedia("only screen and (max-width: 760px)");
//
//$(document).ready(function(){
//    var slideIndex = 0;
//    carousel();
//    function carousel() {
//        var images = ["1.jpg","2.jpg","3.jpg"];
//        var i;
//        slideIndex++;
//        if (slideIndex > images.length) {slideIndex = 1}
//        console.log(images[slideIndex-1]);
//         $(".bg.landing").each(function(index) {
//            $(this).hide();
//            $(this).delay(2000* index).fadeIn(2000);
//        });
//        $(".bg.landing").css({
//            'background-image': 'linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1)), url("./images/landingpage/' + images[slideIndex-1]+'")'
//          });
//        setTimeout(carousel, 3000); // Change image every 2 seconds
//    }
//});
