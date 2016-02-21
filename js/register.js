/**
 * Created by kathrynhodge on 2/20/16.
 */

$(document).ready(function() {
    $(".select-button").click(function(e) {
        e.preventDefault();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email_address = $("#email").val();
        var phone = $("#phone").val();


        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("http://localhost:8888/mhacks2016/travel_broke.db", {
            first_name: firstName,
            last_name: lastName,
            email: email_address,
            phone_number: phone,
        }, function() {
            location.href = "http://localhost:8888/mhacks2016/pickTravel.php";
        })



    })
})