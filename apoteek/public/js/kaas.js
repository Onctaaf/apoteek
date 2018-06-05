
console.log("ready!");
function scrolldown(){
  console.log("de kaasjes");
  $.scrollify.next();
}

function scrollup(){
  console.log("zijn geleverd");
  $.scrollify.previous();
}
var scroll = parseInt(window.innerHeight);

var helemaal = document.body.scrollHeight;
var temp = helemaal/100;
var positie = scroll/temp;
var parseIntergert = parseInt(positie);
$('#inhoudLine').css("width", ""+parseIntergert+"%");

//Nodig voor de bovenlaad balk
$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();//Bottom

  scroll = scroll + parseInt(window.innerHeight);

  var helemaal = document.body.scrollHeight;
  var temp = helemaal/100;
  var positie = scroll/temp;
  var parseIntergert = parseInt(positie);

  console.log(parseIntergert);

  if(parseIntergert > 100){
    parseIntergert = 100;
  }

  $('#inhoudLine').css("width", ""+parseIntergert+"%");
  });
