/**
 * Created by kathrynhodge on 2/20/16.
 */
$(document).ready(function(){
    $(".skewed input").focus(function(){
        $(this.parentNode).addClass("active");
    });

    $(".skewed input").blur(function(){
        $(".skewed").removeClass("active");
    });
});