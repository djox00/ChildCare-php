

$(".sidebar-menu").animate({ "left": "50px" }, 400);
$(".sidebar-menu").animate({ "opacity": "1" }, 500);

var paypal = ` <div id="paypal-container">   <form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="business" value="djordjedjuric05@gmail.com">
<input type="hidden" name="no_recurring" value="0">
<input type="hidden" name="item_name" value="ChildCare">
<input type="hidden" name="item_number" value="Test Donacija za ChildCare projekat">
<input type="hidden" name="currency_code" value="EUR">

<input class="pay-btn" type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
<img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
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
    }

});


$("#visa").click(() => {
    if ($("#container").is(":hidden")) {
        $("#container").fadeIn(400);
    }


    if (!$("#visa-container").is(":visible")) {
        $("#donation").hide().html(visa).fadeIn(450);
        $("#visa-container").animate({ "margin-top": "20px" }, 400);
    }

});





