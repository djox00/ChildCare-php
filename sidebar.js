
$("#myprofile").on("click", () => {

    var sidebar = $('#mySidebar');
    document.getElementById("backdrop").style.display = "block";
    sidebar.animate({ right: 0 }, 200);


});


$(".closebtn").on("click", () => {

    var sidebar = $('#mySidebar');
    sidebar.animate({ right: -250 }, 200);
    setTimeout(() => {
        document.getElementById("backdrop").style.display = "none";
    }, 700);

});


$(".box1").hide();
$("#userData").on("click", () => {


    $(".box1").animate({ height: 'toggle' }, 650);
    if ($(".box2").is(':visible')) { $(".box2").animate({ height: 'toggle' }, 450); }
    if ($(".box3").is(':visible')) { $(".box3").animate({ height: 'toggle' }, 450); }
});

$(".box2").hide();
$("#Changepassword").on("click", () => {

    $(".box2").animate({ height: 'toggle' }, 450);
    if ($(".box1").is(':visible')) { $(".box1").animate({ height: 'toggle' }, 450); }
    if ($(".box3").is(':visible')) { $(".box3").animate({ height: 'toggle' }, 450); }

});

$(".box3").hide();
$("#activity").on("click", () => {

    $(".box3").animate({ height: 'toggle' }, 450);
    if ($(".box1").is(':visible')) { $(".box1").animate({ height: 'toggle' }, 450); }
    if ($(".box2").is(':visible')) { $(".box2").animate({ height: 'toggle' }, 450); }
});