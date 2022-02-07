function initMap() {
    const myLatLng = { lat: 44.53481791533136, lng: 18.70528166906974 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: myLatLng,
    });

    new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Dječiji dom Tuzla",
    });
}

let phone = $("#phone");
let fax = $("#fax");
let mail = $("#mail");

setTimeout(() => {
    phone.animate({ width: "100" }, "slow");
    setTimeout(() => {
        fax.animate({ width: "100" }, "slow");
        setTimeout(() => {
            mail.animate({ width: "100" }, "slow");
            setTimeout(() => {
                document.getElementById("phone").innerHTML = "+387 35 330 322";

                setTimeout(() => {
                    document.getElementById("fax").innerHTML = "+387 35 273 502";
                    setTimeout(() => {
                        document.getElementById("mail").innerHTML = "info@dzdtuzla.ba";

                    }, 300)
                }, 300)
            }, 300)
        }, 500)

    }, 500)

}, 500)
var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
setTimeout(() => {


    anime.timeline({ loop: false })
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1600,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 1,
            duration: 1000,
            delay: 1000
        });

}, 500);

