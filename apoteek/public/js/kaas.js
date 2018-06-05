window.onload = function(){

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
  if(url.endsWith("Faq") || url.endsWith("apoteek")){
    document.getElementById("body").style.overflow = "visible";
  }
}

function scrolldown(){
  $.scrollify.next();
}

function scrollup(){
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


  if(parseIntergert > 100){
    parseIntergert = 100;
  }

  $('#inhoudLine').css("width", ""+parseIntergert+"%");
  });
