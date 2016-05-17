function animateIndex()
{
    $('.list-logo').fadeIn("slow");
    $('.header-image img').animate({ marginTop:"10px" , opacity:"1"},1000);
    $('.header-image h1 ').delay(100).animate({ marginTop:"0px" , opacity:"1"},1000);
    $('.header-image .button ').delay(100).animate({ marginTop:"5px" , opacity:"1"},1000);
    $("#paraanimar").animate({paddingBottom:"150px"},3000);
}
function animateStepOne()
{

    $("#list-cultivo li").each(function(indice, elemento) {
      duracion = 100 * indice;
      $(elemento).delay(duracion).animate({ marginTop: "5px", opacity:"1"},1000);
    });

}

function animateStepTwo()
{

    $("#list-image-cultivo li").each(function(indice, elemento) {
    duracion = 150 * indice;
    $(elemento).delay(duracion).animate({ marginTop: "5px", opacity:"1"},1000);
    });

}
function animateStepThree()
{

    $("#list-fertilizantes li").each(function(indice, elemento) {
    duracion = 150 * indice;
    $(elemento).delay(duracion).animate({ marginTop: "5px", opacity:"1"},1000);
    });

}



