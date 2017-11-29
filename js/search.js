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
            
            typingTimer = setTimeout(function(){search($('#form2').val())}, doneTypingInterval);
        }else{
            $(".search-results").slideUp();
        }
    });
})


//user is "finished typing," do something

function search(str){
    var data = {};
    if (str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cards(this.responseText);
            }
        };
        xmlhttp.open("POST", "./searchsports.php");
		xmlhttp.setRequestHeader("Content-type", "application/json");
		data['yousent'] =  str;
        xmlhttp.send(JSON.stringify(data));
    }
}

function cards(jsonstring){
    array = JSON.parse(jsonstring);
    console.log(array);
    if (array.length == 0){
        $("#search-result-heading").text("No Results");
    }else{
        array.forEach(function(element,index) {
            $("#search-results-cards").append('<div id="search-result-'+index+'"></div>');
            $('#search-result-'+index).load('card.html',"",function(){
                $("#search-result-" +index+" .card-title").text(element[6]);
                if(index == array.length-1){
                    console.log("all processed");
                    $("#search-result-heading").text("Search Results");
                    $("#search-results-cards").fadeIn(1000);
                }
            });
        });
    }   
    
}