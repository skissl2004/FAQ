jQuery(function($){
$("p.Question").css({cursor:"pointer"}).click(function(){
$(this).next().toggle("normal");
});
});

jQuery(function ($) {
    $("a.Question").css({ cursor: "pointer" }).click(function () {
        $(this).next().toggle("normal");
    });
});
jQuery(function ($) {
    $("a.plus").css({ cursor: "pointer" }).click(function () {
        $(this).next().toggle("normal");
    });
});