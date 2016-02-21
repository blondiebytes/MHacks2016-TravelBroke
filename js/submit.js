/**
 * Created by kathrynhodge on 2/20/16.
 */


$(document).ready(function() {
    $(".submit-button").click(function(e) {
        console.log("lol ");
        e.preventDefault();
        var start = $("#start").val();
        var budget = $("#budget").val();
        var date = $("#date").val();
        var realData = "2016-"+date+"-1--2016-"+date+"28";

        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("herokuapp./post?", {
            starting_location: start,
            cost: budget,
            departure_date: realData,
        }, function(data, status) {
            console.log(data, status);
            location.href = "http://localhost:8888/mhacks2016/pickTravel.php";
        })

    })
})