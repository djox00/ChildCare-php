

$(".sidebar-menu").animate({ "left": "50px" }, 400);
$(".sidebar-menu").animate({ "opacity": "1" }, 500);

var paypal = ` <div id="paypal-container">   <form action="https://www.paypal.com/donate" method="post" target="_top">
<p class="paypal-desc">Donacije putem Paypala su jako brze i jako sigurne!  </p> 
<input type="hidden" name="business" value="djordjedjuric05@gmail.com">
<input type="hidden" name="no_recurring" value="0">
<input type="hidden" name="item_name" value="ChildCare">
<input type="hidden" name="item_number" value="Test Donacija za ChildCare projekat">
<input type="hidden" name="currency_code" value="EUR">
<input class="pay-btn" type="image" name="submit" src="./images/donate.png" alt="Donate">

</form></div>`;


var visa = ` <div id="visa-container"> <div style="width: 100px; height: 100px; background-color: blue;">   </div>`;


$("#container").hide();

$("#paypal").click(() => {
    if ($("#container").is(":hidden")) {
        $("#container").fadeIn(400);
    }
    if (!$("#paypal-container").is(":visible")) {
        $("#donation").hide().html(paypal).fadeIn(450);
        $("#paypal-container").animate({ "margin-top": "20px" }, 400);
        $("#container").css({ "background-image" : `url("https://ecommercenews.eu/wp-content/uploads/2018/09/paypal.png")`,   "background-position" : "center", "background-repeat" : "none"
         }).hide().fadeIn(900);
    }

});


$("#visa").click(() => {
    if ($("#container").is(":hidden")) {
        $("#container").fadeIn(400);
    }


    if (!$("#visa-container").is(":visible")) {
        $("#donation").hide().html(visa).fadeIn(450);
        $("#visa-container").animate({ "margin-top": "20px" }, 400);
        $("#container").css({ "background-image" : "none"});
    }

});





