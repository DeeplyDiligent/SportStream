$(document).ready(function(){
    fitimage();
    function getRows(selector) {
        var height = $(selector).height();
        var line_height = $(selector).css('line-height');
        line_height = parseFloat(line_height)
        var rows = height / line_height;
        return Math.round(rows);
    }
  // Add smooth scrolling to all links
    $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
    });
    
    function typeWriter(text, n, loc) {
      if (n < (text.length)) {
        $(loc).html(text.substring(0, n+1)+" _");
        n++;
        setTimeout(function() {
          typeWriter(text, n,loc)
        }, 50);
      }
        else{
            $(loc).html(text);
            return true;
        }
    }
    

//    $(".jumbotron.quote").css("transition","all .5s linear");
//    $(function(){
//    var bgimage = new Image(); bgimage.src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg/1280px-Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg";
//        $(bgimage).on('load', function(){
//            
//            var text = '"Throw me into the wolves and I will return leading the pack."';
//            var text2 = "- Seneca"
//
//            $(".twr").html(text);
//            var countlines = getRows(".twr")
//            $(".tw2").html(text2);
//            var countlines2 = getRows(".twr")
//            $(".twr").html('<br>');
//            $(".tw2").html('<br>');
//            var text = '"Throw me into the wolves and I will return leading the pack."';
//            var text2 = "- Seneca"
//
//            $(".jumbotron.quote").slideDown(1500); 
////            $(".jumbotron.quote").show();
////            $(".jumbotron.quote").css("height","0px");
////            $(".jumbotron.quote").css("height","auto");
//  
//            
//            
//            setTimeout(function() {
//                $(".jumbotron.quote").css("transition","all .5s linear");
//                typeWriter(text, 0,".twr");
//                setTimeout(function() {
//                    typeWriter(text2, 0,".tw2")
//                }, 5000 );
//                }, 1500 ); 
//            });
//    });
});

function fitimage(){
    var elem = document.getElementById("quote");
    elem.style.height = String($(window).height() - 50)+"px";
}

$(window).resize(function(){fitimage();});