   
   var folder = "./Gallery/"; 

   $.ajax({
      
       url: folder,
       success: function(data) {
           $(data).find("a").attr("href", function(i, val) {
               if(val.endsWith("jpg") || val.endsWith("jpeg") || val.endsWith("png")   ){
               $("#rw").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 img-box'  >  <img id='" + Math.random().toString(36).slice(2) + "' src='" + folder +  val + "'></div>");}
           });
       }
   });


$( document ).ready(() => {
  

 


 $("img").click( (event)=>{  

let imgElement = event.target.outerHTML; 

$("#img-backdrop").css({"display" : "block"}); 
$("#img-view").html(imgElement); 

$("#img-backdrop").append( `<a href="javascript:void(0)" class="closebtn" onclick="closePhoto() ">×</a>`);
disableBodyScroll(); 


}); 




});

function closePhoto() {

  $("#img-backdrop").css({"display" : "none"}); 
  $("#img-view").html(''); 
  enableBodyScroll(); 

}



function enableBodyScroll() {
    if (document.readyState === 'complete') {
      document.body.style.position = '';
      document.body.style.overflowY = '';
  
      if (document.body.style.marginTop) {
        const scrollTop = -parseInt(document.body.style.marginTop, 10);
        document.body.style.marginTop = '';
        window.scrollTo(window.pageXOffset, scrollTop);
      }
    } else {
      window.addEventListener('load', enableBodyScroll);
    }
  }
  
  function disableBodyScroll({ savePosition = true } = {}) {
    if (document.readyState === 'complete') {
      if (document.body.scrollHeight > window.innerHeight) {
        if (savePosition) document.body.style.marginTop = `-${window.pageYOffset}px`;
        document.body.style.position = 'fixed';
        document.body.style.overflowY = 'scroll';
      }
    } else {
      window.addEventListener('load', () => disableBodyScroll({ savePosition }));
    }
  }