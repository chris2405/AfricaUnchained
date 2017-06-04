$(document).ready(function(){
    $( "#paragraphe2" ).hide();
    $( "#ligne2-2" ).hide();
    $("#button").click(function(){
        $( "#ligne2" ).replaceWith($("#ligne2-2"));
        $( "#ligne2-2" ).show();

        $( "#paragraphe" ).replaceWith($("#paragraphe2"));
        $( "#paragraphe2" ).show();

        $(".container").toggleClass("img2");
        $(".container").addClass("img2");
    });

});
