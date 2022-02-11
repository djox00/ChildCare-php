
$("#box1").hide();
$("#box2").hide();
$("#box3").hide();
$("#box4").hide();
$("#box5").hide();


$("#item1").on("click", () => {
    $("#box1").animate({ "height": "toggle" }, 700);
    if ($("#box2").is(':visible')) { $("#box2").animate({ height: 'toggle' }, 700); }
    if ($("#box3").is(':visible')) { $("#box3").animate({ height: 'toggle' }, 700); }
    if ($("#box4").is(':visible')) { $("#box4").animate({ height: 'toggle' }, 700); }
    if ($("#box5").is(':visible')) { $("#box5").animate({ height: 'toggle' }, 700); }
});

$("#item2").on("click", () => {
    $("#box2").animate({ "height": "toggle" }, 700);
    if ($("#box1").is(':visible')) { $("#box1").animate({ height: 'toggle' }, 700); }
    if ($("#box3").is(':visible')) { $("#box3").animate({ height: 'toggle' }, 700); }
    if ($("#box4").is(':visible')) { $("#box4").animate({ height: 'toggle' }, 700); }
    if ($("#box5").is(':visible')) { $("#box5").animate({ height: 'toggle' }, 700); }


});
$("#item3").on("click", () => {
    $("#box3").animate({ "height": "toggle" }, 700);
    if ($("#box2").is(':visible')) { $("#box2").animate({ height: 'toggle' }, 700); }
    if ($("#box1").is(':visible')) { $("#box1").animate({ height: 'toggle' }, 700); }
    if ($("#box4").is(':visible')) { $("#box4").animate({ height: 'toggle' }, 700); }
    if ($("#box5").is(':visible')) { $("#box5").animate({ height: 'toggle' }, 700); }

});
$("#item4").on("click", () => {
    $("#box4").animate({ "height": "toggle" }, 700);
    if ($("#box2").is(':visible')) { $("#box2").animate({ height: 'toggle' }, 700); }
    if ($("#box3").is(':visible')) { $("#box3").animate({ height: 'toggle' }, 700); }
    if ($("#box1").is(':visible')) { $("#box1").animate({ height: 'toggle' }, 700); }
    if ($("#box5").is(':visible')) { $("#box5").animate({ height: 'toggle' }, 700); }

});
$("#item5").on("click", () => {
    $("#box5").animate({ "height": "toggle" }, 700);
    if ($("#box2").is(':visible')) { $("#box2").animate({ height: 'toggle' }, 700); }
    if ($("#box3").is(':visible')) { $("#box3").animate({ height: 'toggle' }, 700); }
    if ($("#box4").is(':visible')) { $("#box4").animate({ height: 'toggle' }, 700); }
    if ($("#box1").is(':visible')) { $("#box1").animate({ height: 'toggle' }, 700); }

});

$(".info-card").animate({ "margin-top": "2%" }, 400);


