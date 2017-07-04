$(document).ready(function(){
    $( "#paragraphe2" ).hide();
    $( "#ligne2-2" ).hide();
    $(".buttonS").click(function(){
        /*HomePage*/
        $( "#ligne2" ).replaceWith($("#ligne2-2"));
        $( "#ligne2-2" ).show();

        $( "#paragraphe" ).replaceWith($("#paragraphe2"));
        $( "#paragraphe2" ).show();

        $("#home").toggleClass("img2");
        $("#home").addClass("img2");

    });
    $(".icon-menu").click(function(){

    });
});
