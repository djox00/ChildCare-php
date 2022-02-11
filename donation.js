

$(".sidebar-menu").animate({ "left": "50px" }, 400);
$(".sidebar-menu").animate({ "opacity": "1" }, 500);

var paypal = `    <form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="business" value="djordjedjuric05@gmail.com">
<input type="hidden" name="no_recurring" value="0">
<input type="hidden" name="item_name" value="ChildCare">
<input type="hidden" name="item_number" value="Test Donacija za ChildCare projekat">
<input type="hidden" name="currency_code" value="EUR">

<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
<img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>`;


$("#paypal").click(() => {
    console.log("bab");
    $("#donation").html(paypal).fadeIn(1000);

}); 