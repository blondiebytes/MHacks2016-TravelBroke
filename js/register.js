/**
 * Created by kathrynhodge on 2/20/16.
 */

$(function() {
    $(".select-button").click(function(e) {
        e.preventDefault();
        var num = $("#id").val();

        /** jQuery.post( url [, data ] [, success ] [, dataType ] )...*/
        $.post("#", {
            num : num
        }, function() {
            location.href = "linkFromMethod";
        })

    })
})