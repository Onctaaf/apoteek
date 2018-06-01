$(document).ready(function(){
  console.log("ready!");
  function scrolldown(){

    console.log("de kaasjes");
      $.scrollify.next();
  }


    function scrollup(){
    console.log("zijn geleverd");
        $.scrollify.previous();
    }
});
