var returnjson = "";
var requestsent = false;
function isElementInViewport(elem) {
    var $elem = $(elem);

    // Get the scroll position of the page.
    var scrollElem = $(window);
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

$(document).scroll(function(){

    if (isElementInViewport($("#newscards")) && !requestsent){
        requestsent = true;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                returnjson = this.responseText;
                $.get('newscard.html', function(data) {
                   cards(returnjson,data)
                }, 'text');
            }
        };
        xmlhttp.open("POST", "./foxsportscraper.php?q=abcnews");
        xmlhttp.send();
    }
    
});

function cards(jsonstring,cardhtml){
    array = JSON.parse(jsonstring);
    if (array.length == 0){
        $("#newscards").text("No Results");
    }else{
        $("#newscards").text("");
        $("#newscards").append('<div class="row">');
        counter = 1;
        array.forEach(function(element,index) {
            $("#newscards").append('<div id="news-result-'+index+'">'+cardhtml+'</div>');
            $('#news-result-'+index).hide();
            $("#news-result-" +index+" .card-title").text(element["title"]);
            $("#news-result-" +index+" .img-fluid").attr("src",element["picture"]);
            $("#news-result-" +index+" .link").attr("href",element["link"]);
            description = JSON.parse(element["desc"]);
            $("#news-result-" +index+" .card-text").text(description.substring(3,description.length-4));
            if (counter == 4){
                counter = 0;
                $("#newscards").append('</div><div class="row">');
            }
            var img = new Image();
            img.onload = function() { $('#news-result-'+index).delay(300*index).fadeIn(400); }
            img.src = element["picture"];
            counter++;
        });
        $("#newscards").append('</div>');
    }   
    
}