/* general*/

// alert("function");

$(".animsition").animsition({
    inClass: 'fade-in-right-lg',
    outClass: 'fade-out-right-lg',
    // inDuration: 1500,
    // outDuration: 800,
});

/* HomePage   */

$( "#paragraphe2" ).hide();
$( "#ligne2-2" ).hide();
$(document).ready(function(){
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

});


/* action click bouton IconMenu*/

$(document).ready(function(){
    $("#iconMenu").click(function(){

    });

});
