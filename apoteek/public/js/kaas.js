window.onload = function(){
  setup();
  var Theme = document.getElementById("Theme");
  var currentTheme = 1;
  Theme.onclick = function(){
    document.getElementById("body").style.transition = ".3s all ease";
    document.getElementById("html").style.transition = ".3s all ease";
    if(currentTheme == 1){
      toLight();
      currentTheme = 0;
    }
    else{
      toDark();
      currentTheme = 1;
    }
    setTimeout(function(){
      document.getElementById("body").style.transition = "none";
      document.getElementById("html").style.transition = "none";
    }, 500);

  }
  checkpage();
  function validateForm() {
    var x = document.forms["test"]["hoofdpijn"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
  }
}

function setup(){
  currentTheme = localStorage.getItem('theme');
  if(currentTheme == 1){
    toDark();
    currentTheme = 1;
  }
  else{
    toLight();
    currentTheme = 0;
  }
}

function toDark(){
  document.getElementById("body").style.backgroundColor = "#EEEEEE";
  document.getElementById("html").style.backgroundColor = "#EEEEEE";
  localStorage.setItem('theme', '1');
}

function toLight(){
  document.getElementById("body").style.backgroundColor = "#303030";
  document.getElementById("html").style.backgroundColor = "#303030";
  localStorage.setItem('theme', '0');
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
