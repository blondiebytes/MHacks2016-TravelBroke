/**
 * Created by kathrynhodge on 2/20/16.
 */


$(document).ready(function() {
    $(".submit-button").click(function(e) {
        console.log("lol ");
        e.preventDefault();
        location.href = "http://localhost:8888/mhacks2016/pickTravel.php"
        var start = $("#start").val();
        var budget = $("#budget").val();
        var date = $("#date").val();
        ;

        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...
        $.post("#", {
            starting_location: start,
            cost: budget,
            departure_date: realData,
        }, function(data, status) {
            console.log(data, status);
            location.href = "http://localhost:8888/mhacks2016/pickTravel.php";
        })
            */
    })
})