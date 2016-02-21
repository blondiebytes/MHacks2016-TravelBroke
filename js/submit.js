/**
 * Created by kathrynhodge on 2/20/16.
 */


$(function() {
    $(".submit-button").click(function(e) {
        e.preventDefault();
        var start = $("#start").val();
        var budget = $("#budget").val();
        var date = $("#date").val();

        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("#", {
            start: start,
            budget: budget,
            date: date,
        }, function() {
            location.href = "http://localhost:8888/mhacks2016/pickTravel.php";
        })

    })
})