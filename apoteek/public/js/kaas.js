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

$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  console.log(scroll);
  console.log(document.body.scrollHeight);

  var helemaal = document.body.scrollHeight;
  var temp = helemaal/100;
  var positie = scroll/temp;
  var parseIntergert = parseInt(positie);
  console.log(parseIntergert);
  console.log("Ding", parseIntergert);

  $('#inhoudLine').css("width", ""+parseIntergert+"%");


  });
