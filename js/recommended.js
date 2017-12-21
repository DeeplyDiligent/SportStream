jQuery.fn.exists = function(){return this.length>0;}


//on keyup, start the countdown
$(document).ready(function(){
    $.get('card.html', function(cardhtml) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(JSON.parse(this.responseText));
                recommended_cards(this.responseText,cardhtml);
            }
        };
        xmlhttp.open("POST", "./php/recommended.php");
        xmlhttp.setRequestHeader("Content-type", "application/json");
        var data = {};
        if (typeof username === 'undefined'){
            console.log("i cant find a username. please define it in the parent page's header from php -> js!")
        }
        data['yousent'] = username;
        console.log(data);
        xmlhttp.send(JSON.stringify(data));
    }, 'text');
})


//user is "finished typing," do something

function recommended_cards(response,cardhtml){
    array = JSON.parse(response)['newforuser'];
    console.log(array);

    $("#recommended-cards").hide();
    $("#recommended-cards").text("");
    $("#recommended-cards").append('<div class="row">');
    counter = 1;
    array.forEach(function(element,index) {
        $("#recommended-cards").append('<div id="recommended-card-'+index+'">'+cardhtml+'</div>');
        $("#recommended-card-" +index+" .card-title").text(element[6]);
        var now = new Date();
        dateFormat(now, "dddd, mmmm dS, yyyy, h:MM:ss TT");
        $("#recommended-card-" +index+" .card-text").html($.trim(element[2])+", "+$.trim(element[1])+'<br>'+$.trim(dateFormat(now, "dddd, mmmm dS, yyyy, h:MM:ss TT")));
        $("#recommended-card-" +index+" .img-fluid").attr("src",element[8]);

        if (counter == 4){
            counter = 0;
            $("#recommended-cards").append('</div><div class="row">');
        }
        counter++;
    });
    $("#recommended-cards").append('</div>');
    $("#recommended-cards").fadeIn(1000);
    
}