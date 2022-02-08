


$("#item1").on("click", () => {
    $("#box1").animate({ "height": "toggle" }, 700);
});
$("#box1").hide();
$("#box2").hide();
$("#box3").hide();
$("#box4").hide();
$("#box5").hide();
$("#box6").hide();
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

$(".info-card").animate({ "margin-top": "10%" }, 900);



var textWrapper = document.querySelector('.ml14 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml14 .line',
        scaleX: [0, 1],
        opacity: [0.5, 1],
        easing: "easeInOutExpo",
        duration: 900
    }).add({
        targets: '.ml14 .letter',
        opacity: [0, 1],
        translateX: [40, 0],
        translateZ: 0,
        scaleX: [0.3, 1],
        easing: "easeOutExpo",
        duration: 800,
        offset: '-=600',
        delay: (el, i) => 150 + 25 * i
    }).add({
        targets: '.ml14',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });