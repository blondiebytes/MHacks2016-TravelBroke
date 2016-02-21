
/**
 * Created by kathrynhodge on 2/20/16.
 */


$(document).ready(function() {
    $(".submit-button").click(function(e) {
        e.preventDefault();
        var chosen= $("#selection").val();

        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("http://localhost:8888/mhacks2016/travel_broke.db", {
            selection:chosen,
        }, function() {
            location.href = "toBitlyLink";
        })

    })
})