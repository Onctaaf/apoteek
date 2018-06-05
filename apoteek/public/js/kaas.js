window.onload() = function(){
  checkpage();
  function validateForm() {
    var x = document.forms["test"]["hoofdpijn"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
  }
}

function checkpage(){
  var url = window.location.href;
  if(url.endsWith("faq") || url.endsWith("apoteek")){
    document.getElementById.style.overflow = "visible";
  }
}

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
