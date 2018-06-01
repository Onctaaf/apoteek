window.onload = function(){
  setTimeout(function() {
     window.scrollTo(0,0);
 }, 500);
  console.log("kkaas");





}
function scrolldown(){

  console.log("de kaasjes");
    $.scrollify.next();
}


  function scrollup(){
  console.log("zijn geleverd");
      $.scrollify.previous();
  }

document.getElementById("kaasbroodje").addEventListener("click", function(){
  $.scrollify.next();
  console.log("broodjes");
});
