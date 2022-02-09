
$("#box1").hide();
$("#box2").hide();
$("#box3").hide();
$("#box4").hide();
$("#box5").hide();


$("#item1").on("click", () => {
    $("#box1").animate({ "height": "toggle" }, 700);
});

$("#item2").on("click", () => {
    $("#box2").animate({ "height": "toggle" }, 700);


});
$("#item3").on("click", () => {
    $("#box3").animate({ "height": "toggle" }, 700);

});
$("#item4").on("click", () => {
    $("#box4").animate({ "height": "toggle" }, 700);

});
$("#item5").on("click", () => {
    $("#box5").animate({ "height": "toggle" }, 700);

});

$(".info-card").animate({ "margin-top": "2%" }, 400);


setInterval(() => {
    $("#contact").animate({ "font-size": 23 }, 1000);

}, 5000);

setInterval(() => {
    $("#contact").animate({ "font-size": 17 }, 1000);

}, 10000);