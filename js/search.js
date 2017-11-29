jQuery.fn.exists = function(){return this.length>0;}

//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time in ms (5 seconds)

//on keyup, start the countdown
$(document).ready(function(){
    $('#form2').keyup(function(){
        console.log("timer cleared");
        clearTimeout(typingTimer);
        if ($('#form2').val()) {
            $("#search-result-heading").text("Please Wait...");
            $("#search-results-cards").fadeOut(100,function(){
                $(".search-results").slideDown();
            });
            
            typingTimer = setTimeout(function(){
                $.get('card.html', function(data) {
                   search($('#form2').val(),data)
                }, 'text');
            }, doneTypingInterval);
        }else{
            $(".search-results").slideUp();
        }
    });
})


//user is "finished typing," do something

function search(str,cardhtml){
    console.log(cardhtml);
    var data = {};
    if (str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cards(this.responseText,cardhtml);
            }
        };
        xmlhttp.open("POST", "./searchsports.php");
		xmlhttp.setRequestHeader("Content-type", "application/json");
		data['yousent'] =  str;
        xmlhttp.send(JSON.stringify(data));
    }
}

function cards(jsonstring,cardhtml){
    array = JSON.parse(jsonstring);
    console.log(array);
    if (array.length == 0){
        $("#search-result-heading").text("No Results");
        $("#search-results-cards").fadeOut(100);
    }else{
        $("#search-results-cards").text("");
        $("#search-results-cards").append('<div class="row">');
        counter = 1;
        array.forEach(function(element,index) {
            $("#search-results-cards").append('<div id="search-result-'+index+'">'+cardhtml+'</div>');
            $("#search-result-" +index+" .card-title").text(element[6]);
            $("#search-result-" +index+" .img-fluid").attr("src",element[8]);
            if (counter == 4){
                counter = 0;
                $("#search-results-cards").append('</div><div class="row">');
            }
            counter++;
        });
        $("#search-results-cards").append('</div>');
        console.log("all processed");
        $("#search-result-heading").text("Search Results");
        $("#search-results-cards").fadeIn(1000);
    }   
    
}