   
$( document ).ready(() => {
    var folder = "./Gallery/"; 
    $.ajax({
       
        url: folder,
        success: function(data) {
            $(data).find("a").attr("href", function(i, val) {
                if(val.endsWith("jpg") || val.endsWith("jpeg") || val.endsWith("png")   ){
                $("#rw").append("<div class='col-lg-3'>  <img src='" + folder +  val + "'></div>");}
            });
        }
    });



});