window.onload = function(){
  var url = window.location.href;
  setup();
  var Theme = document.getElementById("Theme");
  var currentTheme = 1;
  Theme.onclick = function(){
    document.getElementById("body").style.transition = ".3s all ease";
    document.getElementById("html").style.transition = ".3s all ease";
    if(url.endsWith("contact")){
      document.getElementById("naam").style.transition = ".3s all ease";
      document.getElementById("email").style.transition = ".3s all ease";
      document.getElementById("onderwerp").style.transition = ".3s all ease";
      document.getElementById("text").style.transition = ".3s all ease";
    }
    elements = document.getElementsByTagName('apoteekHome');
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.transition = ".3 all ease";
    }
    elements = document.getElementsByTagName('mainHome');
    for (var i = 0; i < elements.length; i++) {
      elements[i].style.transition = ".3 all ease";
    }
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
      if(url.endsWith("contact")){
        document.getElementById("naam").style.transition = "none";
        document.getElementById("email").style.transition = "none";
        document.getElementById("onderwerp").style.transition = "none";
        document.getElementById("text").style.transition = "none";
      }
      elements = document.getElementsByTagName('apoteekHome');
      for (var i = 0; i < elements.length; i++) {
        elements[i].style.transition = "none";
      }
      elements = document.getElementsByTagName('mainHome');
      for (var i = 0; i < elements.length; i++) {
        elements[i].style.transition = "none";
      }
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
    document.getElementById("body").style.backgroundColor = "#404040";
    document.getElementById("html").style.backgroundColor = "#404040";
  document.getElementById("html").style.color = "#CCCCCC";
    document.getElementById("ThemeImg").src = "images/zon.svg";
        elements = document.getElementsByClassName('pijldown');
        for (var i = 0; i < elements.length; i++) {
          elements[i].src = 'images/pijl.svg';
        }
        elements = document.getElementsByClassName('pijlup');
        for (var i = 0; i < elements.length; i++) {
          elements[i].src = 'images/pijl.svg';
        }
        elements = document.getElementsByClassName('apoteekFaq');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#212121';
        }
        elements = document.getElementsByTagName('input');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#AAAAAA';
        }
        elements = document.getElementsByTagName('textarea');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#AAAAAA';
        }
        elements = document.getElementsByClassName('apoteekHome');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#212121';
        }
        elements = document.getElementsByClassName('mainHome');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#333333';
              elements[i].style.opacity = '0.9';
        }
  localStorage.setItem('theme', '1');
}

function toLight(){
  document.getElementById("body").style.backgroundColor = "#EEEEEE";
  document.getElementById("html").style.backgroundColor = "#EEEEEE";
  document.getElementById("html").style.color = "#212121";
    document.getElementById("ThemeImg").src = "images/maan.svg";
        elements = document.getElementsByClassName('pijldown');
        for (var i = 0; i < elements.length; i++) {
          elements[i].src = 'images/arrowblack.svg';
        }
        elements = document.getElementsByClassName('pijlup');
        for (var i = 0; i < elements.length; i++) {
          elements[i].src = 'images/arrowblack.svg';
        }
        elements = document.getElementsByClassName('apoteekFaq');
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.backgroundColor = '#DDDDDD';
        }

        elements = document.getElementsByTagName('input');
        for (var i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = '#EEEEEE';
        }
                elements = document.getElementsByTagName('textarea');
                for (var i = 0; i < elements.length; i++) {
                  elements[i].style.backgroundColor = '#EEEEEE';
                }

                elements = document.getElementsByClassName('apoteekHome');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].style.backgroundColor = '#DDDDDD';
                }
                                elements = document.getElementsByClassName('mainHome');
                                for (var i = 0; i < elements.length; i++) {
                                    elements[i].style.backgroundColor = '#DDDDDD';
                                        elements[i].style.opacity = '0.9';
                                }
  localStorage.setItem('theme', '0');
}


function checkpage(){
  var url = window.location.href;
  if(url.endsWith("Faq") || url.endsWith("apoteek") || url.endsWith("maint" || url.endsWith(""))){
    document.getElementById("body").style.overflow = "visible";
  }
}

function scrolldown(){
  $.scrollify.next;
}

function scrollup(){
  $.scrollify.previous;
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
  $('#inpercent').text(parseIntergert + "%");
  });
