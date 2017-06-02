$(document).ready(function(){
    $( "#paragraphe2" ).hide();
    $( "#ligne2-2" ).hide();

    $("#button").click(function(){
        $( "#paragraphe" ).replaceWith($("#paragraphe2"));
        $( "#paragraphe2" ).show();
        $('body').attr('id', 'img1');

        // $("#conteneur").toggleClass("container2");
        $("#body").toggleClass("img2");
        $("#body").addClass("img2");
        $( "#ligne2" ).replaceWith($("#ligne2-2"));
        $( "#ligne2-2" ).show();

    });

    $("#iconMenu").click(function(){

    });
});
