
$(document).ready(function () {

    $("#toggleButton").on("click", () => {
        $("#toggleButton").css("border: solid 2px orange;")


    });
    var loginAnimation = $('.card');
    loginAnimation.animate({ opacity: 1 }, "slow");





    var timer1;
    $(".overlay1").mouseenter(() => {

        timer1 = setTimeout(() => {
            $("#image1").css({ "filter": "blur(5px)" });
            $("#c1").animate({ height: '55%' }, 450);


        }, 400);
    }).mouseleave(() => {
        clearTimeout(timer1);
        $("#image1").css({ "filter": "blur(0px)" });
        $("#c1").animate({ height: '15%' }, 350);
    });



    var timer2;
    $(".overlay2").mouseenter(() => {

        timer2 = setTimeout(() => {
            $("#image2").css({ "filter": "blur(5px)" })
            $("#c2").animate({ height: '55%' }, 450);


        }, 400);
    }).mouseleave(() => {
        clearTimeout(timer2);
        $("#image2").css({ "filter": "blur(0px)" });
        $("#c2").animate({ height: '15%' }, 350);
    });

    var timer3;
    $(".overlay3").mouseenter(() => {

        timer3 = setTimeout(() => {
            $("#image3").css({ "filter": "blur(5px)" });
            $("#c3").animate({ height: '55%' }, 350);


        }, 400);
    }).mouseleave(() => {
        clearTimeout(timer3);
        $("#image3").css({ "filter": "blur(0px)" })
        $("#c3").animate({ height: '15%' }, 350);
    });


    var timer4;
    $(".overlay4").mouseenter(() => {

        timer4 = setTimeout(() => {
            $("#image4").css({ "filter": "blur(5px)" })
            $("#c4").animate({ height: '55%' }, 450);


        }, 400);
    }).mouseleave(() => {
        clearTimeout(timer4);
        $("#image4").css({ "filter": "blur(0px)" })
        $("#c4").animate({ height: '15%' }, 350);
    });









}); 