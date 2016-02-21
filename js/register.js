/**
 * Created by kathrynhodge on 2/20/16.
 */

$(function() {
    $(".select-button").click(function(e) {
        e.preventDefault();
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var email = $("#email").val();
        var phone = $("#phone").val();


        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("http://localhost:8888/mhacks2016/models/user.py", {
            num : num
        }, function() {
            location.href = "go back to pickTravel";
        })

    })
})