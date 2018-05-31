window.onload = function(){
  setTimeout(function() {
     $(window).scrollTop(0);
 }, 500);
  console.log("kkaas");
  setRandomColor()
}
function getRandomColor(){
    var letters = "0123456789ABCDEF";
    var color = '#';
    for (var i = 0; i<6; i++){
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function setRandomColor(){
  $(".colorpad").css("background-color", getRandomColor());
}
